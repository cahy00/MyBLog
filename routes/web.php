<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/layouts', function () {
    return view('layouts.index');
});


// Route::group(['prefix' => 'post'], function () {
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/input-post', [PostController::class, 'create']);
	Route::post('/store-post', [PostController::class, 'store']);
	Route::put('/update-post', [PostController::class, 'update']);
	Route::get('/show-post', [PostController::class, 'show']);

// });
