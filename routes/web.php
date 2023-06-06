<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleController;
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
    Route::get('create',[ArticleController::class,'createArticle'])->name('articles.create');
    Route::post('create',[ArticleController::class,'storeArticle'])->name('articles.store');
    Route::get('{articleId}/edit',[ArticleController::class,'editArticle'])->name('articles.edit');
    Route::put('{articleId}/edit',[ArticleController::class,'updateArticle'])->name('articles.edit');
    Route::delete('{articleId}',[ArticleController::class,'deleteArticle'])->name('articles.delete');
    Route::get('{articleSlug}',[ArticleController::class,'show'])->name('articles.show');

});

