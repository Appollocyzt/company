<?php

namespace Prince\Http\Controllers;
use Prince\Posts;
class WelcomeController extends Controller
{
	public function index()
	{
		$posts = Posts::all();
		return view('welcome')->with('posts',$posts);
	}
}