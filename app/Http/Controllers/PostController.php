<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				//$post = Post::orderBy('created_at', 'DESC')->paginate(10)->category();
				// $category = Category::all();
				$post = Post::with('category')->orderBy('created_at', 'ASC')->paginate(1);
        return view('post.index', compact('post'));
				
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				//! $path = $request->file('image')->store('');
				//! $path = Storage::putFile('public/img', $request->file('image')); 
				//! $path = $request->file('image')->storeAs('public', 'gambar');
				//! $path = $request->file('image')->storeAs('public/img', $newName);
				
				$file = $request->file('image');
				$name_file = time();
				$ext_file = $file->getClientOriginalExtension();
				$newName = $name_file . "." . $ext_file;
				// $path = Storage::putFileAs('public/img', $request->file('image'), $newName);

				//* input data
        // $post = Post::create([
				// 	'title' => $request->title,
				// 	'category_id' => 1,
				// 	'body'  => $request->body,
				// 	'image' => $path,
				// ]);

				$post = New Post;
				$post->title = $request->title;
				$post->category_id = 1;
				$post->body = $request->body;
				if($request->hasFile('image')){
					$request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
					$post->image = $request->file('image')->getClientOriginalName();
					$post->save();
				}
				
				return 'berhasil bosku';
				// dd($request->file('image'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
