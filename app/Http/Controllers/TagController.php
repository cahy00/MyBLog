<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;

class TagController extends Controller
{
    public function index()
		{
			// $post = Post::with('category')->orderBy('created_at', 'ASC');
			// $category = Category::all();
			// return view('try.coba', compact('post', 'category'));
		}

		public function showData()
		{
			$sc = Category::all();
			return view('try.index', compact('sc'));
		}

		public function store(Request $request)
		{
			return $request->all();
		}



}
