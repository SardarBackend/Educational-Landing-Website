<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Morilog\Jalali\Jalalian;

#[Fillable(['name', 'email', 'password','Approved'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public function scopeOfShamsiMonth($query, $year, $month)
    {
        $start = Jalalian::fromFormat('Y-m-d', "$year-$month-01")->toCarbon(); // شروع ماه
        $end = $start->copy()->endOfMonth(); // پایان ماه
        return $query->whereBetween('created_at', [$start, $end]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'meli_code',
        'password',
        'image',
        'is_superuser',
        'birthday',
        'cart_number',
        'home_number',
        'Gender',
        'about',
        'created_at'
    ];




    protected static $rules = [
        'name' => ['required', 'string', 'max:255'],
        'phonenumber' => ['required' ,'max:255'],
        'meli_code' => ['required', 'max:255'],
        // 'image' => ['required'],
        'cart_number' => ['required',  'max:255'],
        'home_number' => ['required'  , 'max:255'],
        'email' => ['required',  'email', 'max:255'],
        'birthday' => ['required'],
        'is_superuser' => ['nullable']
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function activecode(){
        return $this->hasMany(Activecode::class);
    }

    public function is_staff(){

        return $this->is_staff;
    }

    public function is_superuser(){
        return $this->is_superuser;
    }
    // public function permission (){
    //     return $this->belongsToMany(permission::class);
    // }

    // public function role (){
    //     return $this->belongsToMany(role::class);
    // }

    // public function hasRole($role){
    //     return !! $role->intersect($this->roles)->all();
    // }

    // public function hasPermission($key){
    //     return $this->permisons->contains('name', $key->name) || $this->hasRole($key->roles);
    // }

    public function Addresses() {
        return $this->hasMany(address::class);
    }


    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function orders_sellers() {
        return $this->hasMany(Order::class , 'Seller_id');
    }


    public function SellerOrders() {
        return $this->hasMany(Order::class ,  'Seller_id','id');
    }


    public function favorite (){
        return $this->belongsToMany(Book::class);
    }
    public function favorite_blog (){
        return $this->belongsToMany(blog::class , 'blog_user');
    }

    // public function products() {
    //     return $this->hasMany(::class);
    // }

    public function messages(){
        return $this->hasMany(message::class);
    }

// User.php
public function courses()
{
    return $this->belongsToMany(Course::class)
                ->withTimestamps();
}
// User.php
public function favoriteCourses()
{
    return $this->belongsToMany(
        Course::class,
        'favorite_courses'
    )->withTimestamps();
}
// User.php
public function my_courses()
{
    return $this->hasMany(Course::class);
}

}
