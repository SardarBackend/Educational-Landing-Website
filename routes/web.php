<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PodcastController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/blogs', [HomeController::class,'blogs'])->name('blogs');
Route::get('/blog-{id}', [HomeController::class,'single_blog'])->name('blog');
Route::get('/books', [HomeController::class,'books'])->name('books');
Route::get('/book-{id}', [HomeController::class,'single_book'])->name('single_book');
Route::get('/faq' , [HomeController::class, 'faq'])->name('faq');


Route::get('/login',[AuthController::class , 'login'])->name('login');
Route::post('/login',[AuthController::class , 'login_post'])->name('login_post');


Route::get('episode-list',[PodcastController::class , 'episode_list']);
Route::get('episode-single',[PodcastController::class , 'episode_single']);
Route::get('about-us',[HomeController::class, 'about']);


Route::get('course-list',[HomeController::class, 'course_list']);
Route::get('Achievements',[HomeController::class, 'Achievements']);
Route::get('way',[HomeController::class, 'way']);