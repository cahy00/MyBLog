<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

/**
 * ?Route Tag
 */
Route::get('/tag', function(){
	$tag = Tag::with(['posts'])->first();
	$post = Post::with(['tags'])->get();
	return view('tag.index', compact('tag', 'post'));
});

/**
 *? Route Post
 */
Route::get('/post', [PostController::class, 'index']);
Route::get('/input-post', [PostController::class, 'create']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::put('/update-post', [PostController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');
