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
Route::get('news',[ArticleController::class,'articlesList'])->name('articles.list');
Route::get('/admin',[ArticleController::class,'createArticle'])->name('articles.create');
Route::post('/admin',[ArticleController::class,'storeArticle'])->name('articles.store');
