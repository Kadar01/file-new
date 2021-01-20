<?php

namespace App\Http\Controllers;

class samsudinController extends Controller
{
    public function one()
    {
        return view("sam-1");
    }

    public function two()
    {
        return view("sam-2");
    }

    public function three()
    {
        return view("sam-3");
    }

    public function index()
    {
        return view("test-tema"); // view dengan template
    }
}