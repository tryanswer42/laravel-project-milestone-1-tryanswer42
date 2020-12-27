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

Auth::routes();

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//User Show
Route::get('/user', [\App\Http\Controllers\UsersController::class, 'show'])->name('user.show');

//User Edit
Route::get('/user/edit', [\App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');

//User Update
Route::put('/user', [\App\Http\Controllers\UsersController::class, 'update']);





//agenda Page
Route::get('/agenda', 'AgendasController@show');

//contact Page
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store']);


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

