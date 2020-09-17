<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Subject;

use App\Teacher;

use Auth;

class PageController extends Controller
{

    public function teachersfun()
    {   
    	$id=Auth::user()->id;
    	$user=User::find($id);
    	//dd($users);
    	return view('Frontend.teachers.teacher',compact('user'));
    }
     public function teacherfun($value='')
    {
    	return view('Backend.teacher');
    }
    public function profoliofun($value='')
    {
    	return view('Frontend.teachers.profolio');
    }

    public function mainfun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.main',compact('subjects'));
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
    $subjects = Subject::all();

		return view('Frontend.contact',compact('subjects'));
	}

	public function registerfun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.register',compact('subjects'));
	}


	public function loginfun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.login',compact('subjects'));
	}

	

	public function freecoursefun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.freecourse',compact('subjects'));
	}

	public function aboutfun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.about',compact('subjects'));
	}
	public function coursesfun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.courses',compact('subjects'));
	}
	public function coursedetailsfun($value='')
	{
    $subjects = Subject::all();

		return view('Frontend.coursedetails',compact('subjects'));
	}
	public function elementsfun($value='')
	{
    $subjects = Subject::all();
		
		return view('Frontend.elements',compact('subjects'));
	}

}
