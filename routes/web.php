<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('frontend.home.index');
});

Route::get('/about', function () {
    return view('frontend.about.index');
});

Route::get('/author/post', function () {
    return view('frontend.author.author_post');
});

Route::get('/blog/detail', function () {
    return view('frontend.blog.detail');
});

Route::get('/blog/write', function () {
    return view('frontend.blog.write');
});

Route::get('/category', function () {
    return view('frontend.category.index');
});

Route::get('/contact', function () {
    return view('frontend.contact.index');
});

Route::get('/faq', function () {
    return view('frontend.faq.index');
});

Route::get('/login', function () {
    return view('frontend.authentication.login');
});

Route::get('/register', function () {
    return view('frontend.authentication.register');
});

