<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/blogs', [HomeController::class,'blogs'])->name('blogs');
Route::get('/blog-{id}', [HomeController::class,'single_blog'])->name('blog_single');
Route::get('/books', [HomeController::class,'books'])->name('books');
Route::get('/book-{id}', [HomeController::class,'single_book'])->name('book');
Route::get('/faq' , [HomeController::class, 'faq'])->name('faq');


Route::get('/login',[AuthController::class , 'login'])->name('login');
Route::post('/login',[AuthController::class , 'login_post'])->name('login_post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');


Route::get('episode-list',[PodcastController::class , 'episode_list']);
Route::get('episode-single',[PodcastController::class , 'episode_single']);
Route::get('about-us',[HomeController::class, 'about']);

Route::get('course-list',[HomeController::class, 'course_list']);
Route::get('course-{id}',[HomeController::class, 'course_single']);
Route::get('Achievements',[HomeController::class, 'Achievements']);
Route::get('way',[HomeController::class, 'way']);

// Profile
Route::post('/selectaddress{id}',[HomeController::class,'selectaddress'])->name('selectaddress')->middleware('auth');
Route::get('/Addresses',[ProfileController::class,'address'])->name('address')->middleware('auth');
Route::post('/Addresses',[ProfileController::class,'address_post'])->name('address_post')->middleware('auth');
Route::get('/factors',[ProfileController::class,'factors'])->name('factors')->middleware('auth');
Route::get('/single-factors-{id}',[ProfileController::class,'single_factors'])->name('single_factors')->middleware('auth');
Route::get('/message',[ProfileController::class,'message'])->name('message')->middleware('auth');
Route::get('/favorites',[ProfileController::class,'favorites'])->name('favorites')->middleware('auth');
Route::get('/personal',[ProfileController::class,'personal'])->middleware('auth')->name('personal');
Route::post('/deleteaddress/{id}', [ProfileController::class, 'delete_address'])->name('delete_address')->middleware('auth');
Route::get('/edit',[ProfileController::class,'edit_user'])->name('edit_user');
Route::match(['put', 'patch'],'/edit_post{id}',[ProfileController::class,'edit_user_post'])->name('edit_user_post')->middleware('auth');
Route::post('/adresses_post',[ProfileController::class,'adresses_post'])->name('adresses_post')->middleware('auth');
Route::post(uri: '/AddressesEdit/{id}',action: [ProfileController::class,'adresses_post'])->name('AddressesEdit')->middleware('auth');
// Profile

Route::post('/like',[HomeController::class,'like_post'])->name('like_post')->middleware('auth');

Route::post('/dislike',[HomeController::class,'dislike_post'])->name('dislike_post')->middleware('auth');

Route::get('/blogs-{category}',[HomeController::class,'blog_category'])->name('blog_category');

Route::post('/create_comment',[HomeController::class,'craete_comment'])->name('create_comment');
Route::post('/create_question',[HomeController::class,'create_question'])->name('create_question');
Route::post('/contact',[HomeController::class,'Contact_post' ])->name('Contact_post');
Route::post('/send_email',[HomeController::class,'send_email' ])->name('send_email');

Route::get('Cart',[CartController::class , 'Cart'])->name('cart');
Route::get('Checkout',[CartController::class , 'Checkout']);
Route::get('Checkout_complete',[CartController::class , 'Checkout_complete']);


Route::post('/add_to_card{book}',[\App\Http\Controllers\CartController::class,'addToCart'])->name('add_to_card');
Route::delete('/delete_cart{book}',[\App\Http\Controllers\CartController::class,'deleteFromCart'])->name('delete_cart');
Route::post('/delete_cartAll',[\App\Http\Controllers\CartController::class,'deleteAll'])->name('delete_cart_All');
Route::get('/cart',[\App\Http\Controllers\CartController::class,'Cart'])->name('cart');


Route::get('/checkout',[\App\Http\Controllers\PaymentController::class,'checkout'])->name('checkout')->middleware('auth');

Route::post('/checkout',[\App\Http\Controllers\PaymentController::class,'checkout_post'])->name('checkout_post')->middleware('auth');