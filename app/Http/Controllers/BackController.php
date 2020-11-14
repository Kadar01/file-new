<?php

namespace App\Http\Controllers;

class PyController extends Controller
{
	public function satu()
	{
		return view("one");
	}

	public function dua()
	{
		return view("one2");
	}

	public function tiga()
	{
		return view("one3");
	}
}