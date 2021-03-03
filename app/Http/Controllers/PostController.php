<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
				if($request->has('search')){
					$search_post = Post::where('title', 'LIKE', '%' . $request->search . '%')->paginate(3);
				}else{
					$category = Category::with(['posts'])->orderBy('created_at', 'ASC');
					// $category = DB::table('categories')->distinct()->get('category_name');
					$post = Post::orderBy('created_at', 'DESC')->paginate(3);
					return view('post.index', compact('post', 'category'));
					
				}
				
    }

		public function getCategory($id)
		{
			$post = Post::find($id)->categories()->first();
			$category = Category::with('posts')->find($id);
			// dd($post->categories);
			return view('category.show', compact('post', 'category'));

		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$tag = DB::table('tags')->distinct()->get(['tag_name']);
				$category = DB::table('categories')->get();
        return view('post.create', \compact('category', 'tag'));
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
				// $request->validate([
				// 	'title'       => 'required|max:30',
				// 	'body'        => 'required|max:300',
				// 	'category_id' => 'required',
				// 	'tag_id'      => 'required',
				// 	'image'       => 'required|image|mimes:jpeg,png,jpg',
				// ]);

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
					'category_id' => 1,
					'body'        => $request->body,
					'image'       => 'storage/img/' . $newName,
					'slug'				=> Str::slug($request->title)
				]);

				$post->tags()->create([
					'tag_name' => $request->tag,
					'slug'  	 => Str::slug($request->tag)
				]);

				// $post->categories()->create([
				// 	'category_name' => $request->category_name
				// ]);

				

				// $post = New Post;
				// $post->title = $request->title;
				// $post->body = $request->body;
				// $post->category_id = $request->category_id;
				// $post->image = 'storage/img/' . $newName;
				// $post->save();
				
				// $category = New Category; $category->posts()->create([
				// 	'category_name' => $request->category_name
				// ]);
				// $category->save();

				// if($request->hasFile('image')){
				// 	$request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
				// 	$post->image = $request->file('image')->getClientOriginalName();
				// 	$post->save();
				// }

				return \redirect('input-post')->with('success', 'Tulisan Berhasil di Posting');

				
				//return \redirect('/input-post')->with('toast_success', 'Task Created Successfully!');

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
			$post = Post::with('tags')->findOrFail($id);
			// $tag = DB::table('tag')->where('id', $id);
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

		public function searchData(Request $request)
		{
			// if($request->has('search')){
			// 	$post = Post::where('title','LIKE','%' . $request->search . '%')->get();
			// }else{
			// 	$post = Post::with('category')->orderBy('created_at', 'DESC')->paginate(3);
			// }
			dd($request->all());
		}

		
}
