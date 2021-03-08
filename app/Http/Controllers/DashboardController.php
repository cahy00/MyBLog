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
			try{
				$request->validate([
					'title' 	 => 'required|min:10|max:30',
					'category' => 'required|max:15',
					// 'tag[]' 	 => 'required',
					'image' 	 => 'required|mimes:jpg,jpeg,png',
					// 'body'		 => 'required'
				]);

				$file = $request->file('image');
				$name = time();
				$extFile = $file->getOriginalFileExtension();
				$newName = $name . "." . $extFile;


				$post = Post::create([
					'title' => $request->title,
					'body'  => $request->body,
					'image' => 'storage/img/' . $newName,
					'slug'	=> Str::slug($request->title),
					
					
				]);
				return $request->all();
			}catch(\Exception $e){
				return $e->getMessage();
			}

			
		}
}
