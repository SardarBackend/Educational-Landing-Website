<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendNotificationCodeJob;
use App\Models\User;
use App\Models\ActiveCode;
use App\Notifications\notificationCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(){
        return view('public.Auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    } 

    public function password(Request $request)
    {
        $phoneNumber = $request->number;

        $user = User::firstOrCreate([
            'phonenumber' => $phoneNumber,
        ]);

        $activeCode = $user->activecode()->latest()->first();

        if (
            $activeCode &&
            Carbon::parse($activeCode->expired_at)->isFuture()
        ) {
            $code = $activeCode->code;
        } else {

            if ($activeCode) {
                $activeCode->delete();
            }

            $code = ActiveCode::createCode();

            ActiveCode::create([
                'user_id'    => $user->id,
                'code'       => $code,
                'expired_at' => now()->addMinutes(10),
            ]);
        }

        // SendNotificationCodeJob::dispatch(
        //     $code,
        //     $phoneNumber,
        //     $user,
        //     'qasedak'
        // );

        session()->put('code', $code);

        return view('public.Auth.verify', compact('phoneNumber'));
    }


    ///////////////


    /**
     * Handle phone number submission and send verification code.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function verify_confrim_post()
    {
        $sessionCode = session()->get('code') ?? collect([]);
        $phoneNumber = Cookie::get('key');

        $user = User::where('phonenumber', $phoneNumber)->first();

        $userId = $user->id ?? null;

        $existingUser = User::find($userId);

        if ($existingUser) {
            $now = Carbon::now();
            $expiredAt = Carbon::parse($existingUser->activecode[0]->expired_at);

            if (isset($existingUser->activecode[0]->code) && !$expiredAt->lessThan($now)) {
                $code = $existingUser->activecode[0]->code;
                // Send notification here if needed
            } else {
                ActiveCode::where('code', $existingUser->activecode[0]->code)->delete();
                $code = ActiveCode::createCode();

                ActiveCode::create([
                    'user_id' => $existingUser->id,
                    'code' => $code,
                    'expired_at' => now()->addMinutes(10),
                ]);
            }
            // $existingUser->notify(new notificationCode($code,$phoneNumber , 'Ghasedak'));
            SendNotificationCodeJob::dispatch($code,$phoneNumber,$existingUser);
            session()->put('code', value: $code);
            return view('public.Auth.verify', compact('phoneNumber'));
        } else {
            $newUser = User::create([
                'phonenumber' => $phoneNumber,
            ])->get();

            $code = ActiveCode::createCode();

            ActiveCode::create([
                'user_id' => $newUser->id,
                'code' => $code,
                'expired_at' => now()->addMinutes(10),
            ]);
            // $newUser->notify(new notificationCode($code,$phoneNumber , 'Ghasedak'));
            SendNotificationCodeJob::dispatch($code,$phoneNumber,$existingUser);
            session()->put('code', $code);

            return view('public.Auth.verify', compact('phoneNumber'));
        }
    }

    /**
     * Display the verification page.
     *
     * @return \Illuminate\View\View
     */
    public function verify()
    {

        return view('public.Auth.verify');
    }

    /**
     * Check if a verification code exists.
     *
     * @return bool
     */
    public function role()
    {
        return view('public.role');
    }


    /**
     * Verify the code and log the user in.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */


    public function verify_confrim(Request $request )
    {
        $phoneNumber=$request->phoneNumber;
        $user = User::where('phonenumber', $phoneNumber)->first();
        $activeCode = $user->activecode()->latest()->first()->code;

        if ($request->code==$activeCode) {
                Auth::loginUsingId($user->id);
                if (!$user->Approved) {
                    $user->update([
                        'Approved' => true
                    ]);
                }
                Alert::success('ورود', text: 'با موفقیت وارد شدید');
                return redirect('/');
        }



        return view('public.Auth.verify', compact('phoneNumber'));
    }

}

