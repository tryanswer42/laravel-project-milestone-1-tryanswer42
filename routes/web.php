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
Route::get('/home', 'HomesController@show');

//register page
Route::get('/register', 'RegistersController@show');

//Register validation
Route::get('/register/ok','RegistersController@show');

//login page
Route::get('/login', 'LoginsContoller@show');

//loggedin user page
Route::get('/users/{id}', 'UsersController@show');

//contact Page
Route::get('/contact', 'ContactsController@show');

//FAQ
Route::get('/faq', 'FaqsController@show');

//about
Route::get('/about', 'AboutsController@show');

//Admin board
Route::get('/admin', 'AdminsController@show');

//Admin board after search
Route::get('/admin/search', 'AdminsController@show');


//Articles
Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'show']);
