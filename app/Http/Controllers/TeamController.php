<?php

namespace Prince\Http\Controllers;

class TeamController extends Controller
{
	public function team()
	{
		return view('about.team');
	}
	public function about()
	{
		return view('about.intro');
	}

	public function test()
	{
		return view('about.testinominal');
	}
}