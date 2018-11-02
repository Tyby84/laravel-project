<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\PostsCreateRequest;
use App\Post;
use App\User;
use App\Photo;
use App\Category;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$posts = Post::all();
		return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$category = Category::lists('name','id')->all();
		
		return view('admin.posts.create', compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        //
		$input = $request->all();
		
		$user=Auth::user();
		
		if($file = $request->file('photo_id')) {	
			
			$name = time() . $file->getClientOriginalName();
			
			$file->move('image',$name);
			
			$photo= Photo::create(['file'=>$name]);//in photos table create a file field the given name
			
			$input['photo_id']=$photo->id;//it creates automaticly so I assign to the input's id;
		}
		
		$user->posts()->create($input);
		
		return redirect('admin/posts');
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
		$post = Post::findOrFail($id);
		
		$category = Category::lists('name','id')->all();
		
		return view('admin.posts.edit', compact('post', 'category'));
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
			$input = $request->all();
			
			$post = Post::findOrFail($id);
		
			if($file=$request->file('photo_id')){
			
			$name = time() . $file->getClientOriginalName();
			
			$file->move('images', $name);
			
			$photo = Photo::create(['file'=> $name]);
			
			$input['photo_id'] = $photo->id;
			}
		
			$post->update($input);
		// alternate solution:
		// Auth::user()->post()->whereId($id)->first()->update($input);
			
			return redirect('admin/posts');

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
		$post = Post::findOrFail($id);
		$post->delete();
		return redirect('admin/posts');
		
    }
}
