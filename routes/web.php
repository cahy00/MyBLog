<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
		$post = DB::table('posts')->simplePaginate(2);
		return view('try.index', ['post' => $post]);
});

Route::get('/post/?');
	
Route::get('/post', [PostController::class, 'index']);
Route::get('/input-post', [PostController::class, 'create']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::put('/update-post', [PostController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');
