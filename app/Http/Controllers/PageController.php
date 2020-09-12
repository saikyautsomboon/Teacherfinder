<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainfun($value='')
	{
		return view('Frontend.main');
	}
	public function aboutfun($value='')
	{
		return view('Frontend.about');
	}
	public function coursesfun($value='')
	{
		return view('Frontend.courses');
	}
	public function coursedetailsfun($value='')
	{
		return view('Frontend.coursedetails');
	}
	public function elementsfun($value='')
	{
		return view('Frontend.elements');
	}
}
