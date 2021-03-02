<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
class TagController extends Controller
{
    public function index()
		{
			// $post = Post::create([
			// 	'title' => 'ini title baru',
			// 	'body'  => 'ini text baru broku',
			// 	'image' => 'image.jpg',
			// 	'category_id' => 1,
			// 	'slug'  => 'ini-title-baru',
			// 	'created_at' => now(),
			// 	'updated_at' => now()
			// ]);
			$post = Post::find(1);

			$post->tags()->create([
				'tag_name' => 'creative post',
				'slug'     => 'creative-post',
				'created_at' => now(),
				'updated_at' => now(),
			]);

			return 'berhasil';
		}

		public function showData()
		{
			$sc = Category::all();
			return view('try.index', compact('sc'));
		}

		public function store(Request $request)
		{
			$post = Post::insert([
				'title' => $request->title,
				'body'  => $request->body,
				'category_id' => 1,
				'slug'  => Str::slug($request->title),
				'image' => 'storage/img/ss-pembohong.png'
			]);
			return 'berhasil';
			// return $request->all();
		}

		


}
