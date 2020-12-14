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

//home page
Route::get('/home', function () {
    return view('home');
});

//register page
Route::get('/register', function () {
    return view('register');
});

//Register validation
Route::get('/register/ok', function () {
    return view('welcome');
});

//login page
Route::get('/login', function () {
    return view('login');
});

//loggedin user page
Route::get('/users/{id}', 'UsersController@show');

//contact Page
Route::get('contact', function () {
    return view('contact');
});

//FAQ
Route::get('/faq', function () {
    return view('faq');
});

//about
Route::get('/about', function () {
    return view('about');
});

//Admin board
Route::get('/admin', function () {
    return view('admin');
});

//Admin board after search
Route::get('/admin/search', function () {
    return view('admin');
});


//Articles
Route::get('/article', function () {
    return view('article');
});
