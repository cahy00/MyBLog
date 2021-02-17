<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('post.show');
});


// Route::group(['prefix' => 'post'], function () {
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/input-post', [PostController::class, 'create']);
	Route::post('/store-post', [PostController::class, 'store']);
	Route::put('/update-post', [PostController::class, 'update']);
	Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');

// });
