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
<<<<<<< HEAD
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
=======

>>>>>>> 785b0d28918c01240ddbac3faeecf5db5d11645c
}
