<?php

namespace Prince\Http\Controllers;

class StudyController extends Controller
{
	public function abroad()
	{
		return view('services.usa');
	}
	public function service()
	{
		return view('services.service');
	}
}