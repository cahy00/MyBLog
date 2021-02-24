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
			$tag = Tag::with(['posts'])->get();
			// $post = Post::with(['tags'])->get();
			$post = Post::findOrFail(1)->tags;
			return view('tag.index', compact('tag', 'post'));
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
