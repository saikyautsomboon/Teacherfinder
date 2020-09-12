<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainfun($value='')
	{
		return view('Frontend.main');
	}

	 public function blogfun($value='')
	{
		return view('Frontend.blog');
	}

	 public function blogdetailfun($value='')
	{
		return view('Frontend.blogdetail');
	}

	public function contactfun($value='')
	{
		return view('Frontend.contact');
	}


}
