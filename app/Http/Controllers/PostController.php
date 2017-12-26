<?php

namespace Prince\Http\Controllers;
use Prince\Posts;

class PostController extends Controller
{
	 public function __construct()
    {
    	session_start();
        $this->middleware('auth');
        session_destroy();
    }
	public function show()
	{
		$posts = Posts::all();
		return view('post.show')->with('posts',$posts);
	}
	public function getDestroy($id)
	{
		$post = Posts::find($id);
		$path =public_path('images/'.$post->image);
		if (file_exists($path)? unlink($path) : '');
		$post->delete();
		return redirect()->route('posts')->with('info','Post sucessfully deleted');
	}
}