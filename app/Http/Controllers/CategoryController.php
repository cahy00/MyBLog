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
}
