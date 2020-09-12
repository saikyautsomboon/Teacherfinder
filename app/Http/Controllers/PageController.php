<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function teacherfun($value='')
    {
    	return view('Frontend.teachers.teacher');
    }
    public function profoliofun($value='')
    {
    	return view('Frontend.teachers.profolio');
    }

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
