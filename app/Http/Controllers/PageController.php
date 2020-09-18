<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Subject;

use App\Teacher;

use App\Subjectjoin;
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

    public function stdrequestlistfun($id)
    {   
    	/*$id=Auth::user()->id;
    	$user=User::find($id);*/
    	//dd($id);
    	$subjectjoins=Subjectjoin::where('teacher_id',$id)->get();
    	//dd($subjectjoin);
    	return view('Frontend.teachers.stdrequest',compact('subjectjoins'));
    }

    public function studentlistfun()
    {   
    	/*$id=Auth::user()->id;
    	$user=User::find($id);*/
    	//dd($users);
    	return view('Frontend.teachers.studentlist'/*,compact('user')*/);
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
    $teacherlists=Teacher::where('status',0)->get();

		return view('Frontend.main',compact('subjects','teacherlists'));
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

	public function subjectjoin($id1,$id2){
		$user_id=Auth::user()->id;
		
        $subject_join=new Subjectjoin;
        $subject_join->subject_jd=$id2;
        $subject_join->teacher_id=$id1;
        $subject_join->user_id=$user_id;
        $subject_join->save();
        return back();
	}

}
