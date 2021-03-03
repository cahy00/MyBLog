<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
		{
			$cate = Category::orderBy('creaeted_at', 'DESC');
			return view('post.index', compact('cate'));
		}

		public function show($id)
		{
			return $id;
		}

		public function store(Request $request)
		{
			$category = New Category;
			$category->category_name = $request->category_name;
			$category->save();
			return redirect('/input-post')->with('success','Category berhasil ditambah');
		}
}
