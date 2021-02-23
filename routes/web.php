<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
// 		$post = DB::table('posts')->simplePaginate(2);
// 		return view('try.index', ['post' => $post]);
// });

Route::get('/test', [PostController::class, 'test']);
Route::post('/show-test', [PostController::class, 'testShow']);
	

Route::get('/tag', [TagController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/input-post', [PostController::class, 'create']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::put('/update-post', [PostController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');
