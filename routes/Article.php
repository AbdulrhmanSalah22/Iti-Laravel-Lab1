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


Route::get('art/add',[ArticleController::class , 'create']);
Route::post('art/store',[ArticleController::class , 'store'])->name('StoreArticle');
Route::get('art/show' , [ArticleController::class ,  'show'])->name('ShowArticle');
Route::delete('art/delete/{id}',[ArticleController::class , 'delete'])->name('deleteArticle');
Route::get('art/edit/{id}',[ArticleController::class , 'edit']);
Route::post('art/update/{id}',[ArticleController::class , 'update'])->name('UpdateArticle');
