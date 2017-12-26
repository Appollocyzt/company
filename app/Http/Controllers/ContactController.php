<?php

namespace Prince\Http\Controllers;
use Illuminate\Http\Request;
use Prince\Message;

class ContactController extends Controller
{
	 public function map()
   {
   	return view('contact.map');
   }
	public function getContact()
	{
		return view('contact.contact');
	}
	public function postContact(Request $request)
	{
		$this->validate($request,[
             'name'=>'required',
             'email'=>'required',
             'phone'=>'required|min:10',
             'subject'=>'required',
             'message'=>'required',
             ]);
		$reply = new Message;
		$reply->name = $request->name;
		$reply->email = $request->email;
		$reply->number = $request->phone;
		$reply->subject = $request->subject;
		$reply->body =$request->message;
		$reply->save();
		return redirect()->route('map')->with('info','Your message has been successfuly send');
	}
}