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
Route::get('/agenda', 'AgendasController@show');

//contact Page
Route::get('/contact', 'ContactsController@show');

//FAQ
Route::get('/faq', 'FaqsController@show');

//about
Route::get('/about',[\App\Http\Controllers\AboutController::class, 'show']);

//Admin board
Route::get('/admin', 'AdminsController@show');

//Admin board after search
Route::get('/admin/search', 'AdminsController@show');


//Articles all
Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');

//Article Store
Route::post('/articles', [\App\Http\Controllers\ArticlesController::class, 'store']);

//Article create
Route::get('/articles/create', [\App\Http\Controllers\ArticlesController::class, 'create']);

//Article Show
Route::get('/articles/{articleId}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');

//Article Edit
Route::get('/articles/{articleId}/edit', [\App\Http\Controllers\ArticlesController::class, 'edit']);

//Article Update
Route::put('articles/{articleId}', [\App\Http\Controllers\ArticlesController::class, 'update']);
