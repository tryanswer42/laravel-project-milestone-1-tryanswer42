<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
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
Route::get('/user', [UsersController::class, 'show'])->name('user.show');

//User Edit
Route::get('/user/edit', [UsersController::class, 'edit'])->name('user.edit');

//User Update
Route::put('/user', [UsersController::class, 'update'])->name('user.update');





//agenda Page
Route::get('/agenda', 'AgendasController@show');

//contact Page
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);


//FAQ
Route::get('/faq', 'FaqsController@show');

//about
Route::get('/about',[AboutController::class, 'show']);



//Admin board
Route::get('/admin', 'AdminsController@show');

//Admin board after search
Route::get('/admin/search', 'AdminsController@show');




//Articles all
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');

//Article Store
Route::post('/articles', [ArticlesController::class, 'store']);

//Article create
Route::get('/articles/create', [ArticlesController::class, 'create']);

//Article Show
Route::get('/articles/{articleId}', [ArticlesController::class, 'show'])->name('articles.show');

//Article Edit
Route::get('/articles/{articleId}/edit', [ArticlesController::class, 'edit']);

//Article Update
Route::put('articles/{articleId}', [ArticlesController::class, 'update']);

