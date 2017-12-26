<?php
namespace Prince\Http\Controllers;

use Illuminate\Http\Request;
use Prince\Posts;

class HomeController extends Controller
{

    public function __construct()
    {
        session_start();
        $this->middleware('auth');
        session_destroy();
    }

    public function index()
    {
        return view('home');
    }
    public function postIndex(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            ]);
         $post = new Posts;
        $post->title = $request->name;
        $post->image =$request->image;

         if ($request->has('image'))
        {  
            $image =$request->file('image');
            $filename = $image->getClientOriginalName();
            $fileType = $image->getClientOriginalExtension();
             if ($fileType!="jpg")
             { 
                return redirect()->route('home')->with('info','Please upload only jpg file');
             }
            $tmpath =$image->getRealPath();
            $location = public_path('images/' .$filename);
             move_uploaded_file($tmpath,$location);

            $post->image =$filename;
        }
        $post->save();
        return redirect()->route('home')->with('info','File sucessfully upload');
    }
}
