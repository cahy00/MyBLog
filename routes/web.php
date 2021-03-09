<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/check', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout']);

/**
 * ?Route Group Middleware
 */
Route::group(['middleware' => 'auth'], function(){
	
	Route::get('/dashboard', [DashboardController::class, 'index']);
	Route::get('/input-post', [PostController::class, 'create']);


	/**
	 * ?Route Admin
	 */
	Route::get('/datauser', function(){
		return view('admin.datauser');
	});
	Route::view('/admin', 'layouts.app');

});



/**
 * ?Route Tag
 */
Route::get('/tag', [PostController::class, 'create']);
Route::post('/store-tag', [TagController::class, 'store']);

/**
 * ?Route Dashboard
 */


/**
 *? Route Post
 */
Route::get('/', [PostController::class, 'index']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::put('/update-post', [PostController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/search', [PostController::class, 'searchData']);

Route::post('/store-category', [CategoryController::class, 'store']);
Route::get('/get-category/{id}', [PostController::class, 'getCategory']);

Route::get('/multiple', function(){
	return view('multiple');
});

Route::get('/test', [TestController::class, 'index']);