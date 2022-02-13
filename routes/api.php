<?php

use App\Http\Controllers\api\articleControll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'art'], function () {
    Route::post('/store', [articleControll::class, 'store']);
    Route::get('/show', [articleControll::class, 'show']);
    Route::delete('/delete/{id}', [articleControll::class, 'delete']);
    Route::post('/update/{id}', [articleControll::class, 'update']);
});
