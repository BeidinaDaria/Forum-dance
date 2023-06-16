<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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

Route::get('/',[AppController::class,"mainPage"])->name("app.main");

//Articles
Route::prefix('articles')->group(function(){
    Route::get('/',[ArticleController::class,'index'])->name('articles.list');
    Route::middleware(['auth','is_admin'])->group(function(){
        Route::get('create',[ArticleController::class,'createArticle'])->middleware(['auth','is_admin'])->name('articles.create');
        Route::post('create',[ArticleController::class,'storeArticle'])->middleware(['auth','is_admin'])->name('articles.store');
        Route::get('{articleId}/edit',[ArticleController::class,'editArticle'])->middleware(['auth','is_admin'])->name('articles.edit');
        Route::put('{articleId}/edit',[ArticleController::class,'updateArticle'])->middleware(['auth','is_admin'])->name('articles.edit');
        Route::delete('{articleId}',[ArticleController::class,'deleteArticle'])->middleware(['auth','is_admin'])->name('articles.delete');
        Route::get('{articleSlug}',[ArticleController::class,'show'])->middleware(['auth','is_admin'])->name('articles.show');
        Route::get('{articleId}/remove-image',[ArticleController::class,'removeImage'])->middleware(['auth','is_admin'])->name("articles.remove-image");
    });
    Route::post('logout',[AuthControler::class,'logout'])->middleware('guest')->name('auth.logout');
});

Route::middleware(['guest'])->group(function(){
    Route::get('register',[AuthControler::class,'registerPage'])->name('auth.register');
    Route::post('register',[AuthControler::class,'storeUser'])->name('auth.storeUser');
    Route::get('login',[AuthControler::class,'loginPage'])->name('auth.login-page');
    Route::post('login',[AuthControler::class,'login'])->name('auth.login');
});
