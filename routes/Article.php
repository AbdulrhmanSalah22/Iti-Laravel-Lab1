<?php

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

Route::group(['middleware' => 'auth' , 'prefix' => 'art'], function () {
    Route::get('/add', [ArticleController::class, 'create'])->middleware(['isAdmin']);
    Route::post('/store', [ArticleController::class, 'store'])->name('StoreArticle');
    Route::get('/show', [ArticleController::class, 'show'])->name('ShowArticle')->middleware(['isAdmin','verifyAge']);
    Route::delete('/delete/{id}', [ArticleController::class, 'delete'])->name('deleteArticle');
    Route::get('/edit/{id}', [ArticleController::class, 'edit']);
    Route::post('/update/{id}', [ArticleController::class, 'update'])->name('UpdateArticle');
});
