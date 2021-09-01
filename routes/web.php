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

/**
 * Route front-end
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/index', function () {
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

Route::get('/post/detail', function () {
    return view('frontend.post.detail');
});

Route::get('/post/write', function () {
    return view('frontend.post.write');
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

