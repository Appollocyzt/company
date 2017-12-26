<?php

namespace Prince\Http\Controllers;

class MessageController extends Controller
{
	public function message()
	{
		return view('message.ceo');
	}
}