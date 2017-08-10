<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	 return view('index');
    }

    public function services()
    {
    	 return view('services');
    }

    public function about()
    {
    	 return view('about');
    }

    public function contact()
    {
    	 return view('contact');
    }

    public function blog()
    {
    	 return view('blog');
    }
}
