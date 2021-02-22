<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

// Route::get('/', function () {
// 		$post = DB::table('posts')->simplePaginate(2);
// 		return view('try.index', ['post' => $post]);
// });

Route::get('/test', [PostController::class, 'test']);
Route::post('/show-test', [PostController::class, 'testShow']);
Route::get('/test-twitter', function(){
	// $misi[];
	$hari = 0;
	$point = 0.3;
	for ($i=0; $i<=40 ; $i++) { 
		$hari[$i] += $point;
		if($point == 10){
			$hari[$i] = 0;
		}

		return $hari[$i];
	}

	
});
	
Route::get('/post', [PostController::class, 'index']);
Route::get('/input-post', [PostController::class, 'create']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::put('/update-post', [PostController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('post.show');
