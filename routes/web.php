<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

/**
 * Test
 */
Route::get('/', function(){
	Alert::success('Success Title', 'Success Message');

});


/**
 * ?Route Tag
 */
Route::get('/tag', [TagController::class, 'index']);
Route::post('/store-tag', [TagController::class, 'store']);

/**
 *? Route Post
 */
Route::get('/post', [PostController::class, 'index']);
Route::get('/input-post', [PostController::class, 'create']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::put('/update-post', [PostController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');
