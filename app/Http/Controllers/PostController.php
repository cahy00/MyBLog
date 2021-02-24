<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
				$category = Category::all();
				$post = Post::with('category')->orderBy('created_at', 'ASC')->paginate(4);
        return view('post.index', compact('post', 'category'));
				
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				// $category = Category::all();
				$category = DB::table('categories')->get();
        return view('post.create', \compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				
			try {

				//! $path = $request->file('image')->store('');
				//! $path = Storage::putFile('public/img', $request->file('image')); 
				//! $path = $request->file('image')->storeAs('public', 'gambar');
				//! $path = $request->file('image')->storeAs('public/img', $newName);
				
				$file      = $request->file('image');
				$name_file = time();
				$ext_file  = $file->getClientOriginalExtension();
				$newName   = $name_file . "." . $ext_file;
				$path      = Storage::putFileAs('public/img', $request->file('image'), $newName);

				
				/**
				 *! input data
				 *! post photo using storage
				 */
        $post = Post::create([
					'title'       => $request->title,
					'category_id' => $request->category_id,
					'body'        => $request->body,
					'image'       => 'storage/img/' . $newName,
					'slug'				=> Str::slug($request->title)
				]);

				// $post = New Post;
				// $post->title = $request->title;
				// $post->category_id = 1;
				// $post->body = $request->body;
				// if($request->hasFile('image')){
				// 	$request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
				// 	$post->image = $request->file('image')->getClientOriginalName();
				// 	$post->save();
				// }

				
				return 'berhasil bosku';


			} catch (\Exception $e) {
					return $e->getMessage();
			}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
			$post = Post::find($id);
			// $post = Post::all();
			return view('post.show', \compact('post'));

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

		public function indexCategory()
		{
			return 'ini index category';
		}

		public function test()
		{
			$category = Post::all();
			return view('try.index', \compact('category'));
		}

		public function testShow(Request $request)
		{
			return $request->name;
		}
}
