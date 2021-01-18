<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
use Illuminate\Contracts\View\View;
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

Route::get('/', [ArticlesController::class, 'show3']);


//
Auth::routes();
/*// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');*/

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'logged'])->name('home');


//User Show
Route::get('/user', [UsersController::class, 'show'])->name('user.show');

//User Edit
Route::get('/user/edit', [UsersController::class, 'edit'])->name('user.edit');

//User Update
Route::put('/user', [UsersController::class, 'update'])->name('user.update');





//agenda Page
//Route::get('/agenda', 'AgendasController@show');
Route::resource('activities',ActivitiesController::class)->middleware('auth');


//contact Page
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store']);


//FAQ
Route::resource('faqs', \App\Http\Controllers\FaqController::class);

//about
Route::get('/about',[AboutController::class, 'show']);



//Admin board
Route::get('/admin', [\App\Http\Controllers\AdminContoller::class ,'board'] )->middleware('auth')->name('admin.board');

Route::get('/admin/users', [\App\Http\Controllers\AdminContoller::class ,'user'] )->middleware('auth');
Route::get('/admin/articles', [\App\Http\Controllers\AdminContoller::class ,'user'] )->middleware('auth');


//Articles all
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index')->middleware('auth');

//Article Store
Route::post('/articles', [ArticlesController::class, 'store']);

//Article create
Route::get('/articles/create', [ArticlesController::class, 'create'])->middleware('auth');

//Article Show
Route::get('/articles/{articleId}', [ArticlesController::class, 'show'])->name('articles.show')->middleware('auth');

//Article Edit
Route::get('/articles/{articleId}/edit', [ArticlesController::class, 'edit'])->middleware('auth');

//Article Update
Route::put('articles/{articleId}', [ArticlesController::class, 'update']);

//Article Destroy
Route::delete('articles/{articleId}', [ArticlesController::class, 'destroy'])->name('articles.destroy');

Route::get('donate', function(){
    return view('donate');
});
