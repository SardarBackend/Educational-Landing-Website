<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Book;
use App\Models\Course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function Cart(){
        $cart = Cart::all();

        $totalPrice = 0;
        $totalDiscust = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];

            $totalDiscust += (
                (($item['discount_percent'] ?? $item['product']->discust) / 100)
                * $item['price']
                * $item['quantity']
            );
        }
        // session()->forget('cart');
        $FinalPrice = $totalPrice - $totalDiscust;
        // dd($cart);
        if (count($cart)) {
            // Return the view for the cart page
            return view('public.Cart' , compact('cart','totalPrice','FinalPrice','totalDiscust'));
        }
        return view('public.cart-empty');    
        }

    public function addBookToCart(Book $book, Request $request){
        // Check if the product is already in the cart
        if (Cart::has($book)) {
            // Update quantity if the product is already in the cart
            Cart::update($book, $request->quantity);
            
            } else {
                // Add the product to the cart with its quantity, price, and color
                Cart::put(
                [
                    'quantity' => $request->quantity,
                    'price' => $book->price,
                    'color' => $request->color,
                    'type' => Book::class
                ],
                $book
            );

            // Show success alert after adding the product

            // Redirect back to the previous page
        Alert::success('عملیات موفق آمیز بود',' محصول به سبد خرید شما اضافه شد');        }
        return back();
    }

    public function addCourseToCart(Course $Course, Request $request){
        // Check if the product is already in the cart
        if (Cart::has($Course)) {
            // Update quantity if the product is already in the cart
            Cart::update($Course, $request->quantity);
            
            } else {
                // Add the product to the cart with its quantity, price, and color
                Cart::put(
                [
                    'quantity' => $request->quantity,
                    'price' => $Course->price,
                    'color' => $request->color,
                    'type' => Course::class

                ],
                $Course
            );

            // Show success alert after adding the product

            // Redirect back to the previous page
        Alert::success('عملیات موفق آمیز بود',' محصول به سبد خرید شما اضافه شد');        }
        return back();
    }

    public function deleteFromCart(Book $product)
    {
        // Delete the product from the cart
        Cart::delete($product);

        // Redirect back to the previous page
        return back();
    }

    public function deleteAll()
    {
        // Clear the entire cart
        session()->forget('cart');

        // Redirect back to the previous page
        return redirect()->route('cart');
    }


    public function updateCart(Request $request)
    {
        // Get product ID and quantity from the request
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Find the product in the cart
        $cartItem = Cart::where('product_id', $productId)->first();

        // Update the quantity if the product exists in the cart
        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();

            return response()->json(['success' => true]);
        }

        // Return an error if the product is not found
        return response()->json(['success' => false], 400);
    }

    public function Checkout(){
        return view('public.checkout');

    }
    public function Checkout_complete(){
        return view('public.checkout-complete');

    }
}
