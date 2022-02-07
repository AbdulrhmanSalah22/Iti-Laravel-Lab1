<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homeController;
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

//Route::get('home',[ homeController::class ,'list']);

//Route::get('productDetails/{id}',[homeController::class,'details']);

// ------ Category CRUD ------------- \\
//Route::get('cat/add',[CategoryController::class , 'create']);
//Route::post('cat/store',[CategoryController::class , 'store'])->name('StoreCategory');
//Route::get('cat/show' , [CategoryController::class,'show'])->name('ShowCategories');
//Route::delete('cat/delete/{id}',[CategoryController::class , 'delete'])->name('deleteCategory');
//Route::get('cat/edit/{id}',[CategoryController::class , 'edit']);
//Route::post('cat/update/{id}',[CategoryController::class , 'update'])->name('UpdateCategory');
//Route::get('cat/art/{id}',[CategoryController::class , 'showArticle'])->name('ShowArticle');

// -------- Article CRUD ----------- \\
//
//Route::get('art/add',[ArticleController::class , 'create']);
//Route::post('art/store',[ArticleController::class , 'store'])->name('StoreArticle');
//Route::get('art/show' , [ArticleController::class ,  'show'])->name('ShowArticle');
//Route::delete('art/delete/{id}',[ArticleController::class , 'delete'])->name('deleteArticle');
//Route::get('art/edit/{id}',[ArticleController::class , 'edit']);
//Route::post('art/update/{id}',[ArticleController::class , 'update'])->name('UpdateArticle');









