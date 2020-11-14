<?php

namespace App\Http\Controllers;

class NewPyController extends Controller
{
	public function tarik()
	{
		return view("fast");
	}

	public function sist()
	{
		return view("rk");
	}

	public function semongko()
	{
		return view("hello");
	}

	public function index()
	{
		return view("test-tema");
	}

}

