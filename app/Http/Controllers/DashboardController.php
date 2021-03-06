<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
		{
			return view('dashboard.index');
		}

		public function create()
		{
			return view('admin.createpost');
		}

		public function store(Request $request)
		{
			$request->validate([
				'title' 	 => 'required|min:10|max:30',
				'category' => 'required|max:15',
				'tag[]' 	 => 'required|array',
				'image' 	 => 'required|mimes:jpg,jpeg,png',
				'body'		 => 'required'
			]);
			return $request->all();
		}
}
