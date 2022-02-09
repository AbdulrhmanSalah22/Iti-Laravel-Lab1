<?php

use App\Http\Controllers\CategoryController;
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
Route::group(['middleware' => 'auth' , 'prefix' => 'cat'], function (){
    Route::get('/add',[CategoryController::class , 'create'])->middleware(['isAdmin']);
    Route::post('/store',[CategoryController::class , 'store'])->name('StoreCategory');
    Route::get('/show' , [CategoryController::class,'show'])->name('ShowCategories')->middleware(['verifyAge']);
    Route::delete('/delete/{id}',[CategoryController::class , 'delete'])->name('deleteCategory');
    Route::get('/edit/{id}',[CategoryController::class , 'edit']);
    Route::post('/update/{id}',[CategoryController::class , 'update'])->name('UpdateCategory');
    Route::get('/art/{id}',[CategoryController::class , 'showArticle'])->name('ShowArticle');
});

