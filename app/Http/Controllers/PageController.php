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
    	$subjectacc=Subjectjoin::where('teacher_id',$id)
    							 ->where('status',0)->get();
    	//dd($users);
    	return view('Frontend.teachers.teacher',compact('user','subjectacc'));
    }

    public function stdrequestlistfun($id)
    {  
    	$subjectjoins=Subjectjoin::where('teacher_id',$id)
    							 ->where('status',0)->get();
    	
    	return view('Frontend.teachers.stdrequest',compact('subjectjoins'));
    }

    public function studentlistfun($id)
    {   
    	//$id=Auth::user()->id;
    	/*$user=User::find($id);*/
    	//dd($users);
    	$subjectacc=Subjectjoin::where('teacher_id',$id)
    							 ->where('status',1)->get();

    	
    	return view('Frontend.teachers.studentlist',compact('subjectacc'));
    }
    public function sturequest($id)
    {   
    	$subjectacc=Subjectjoin::where('teacher_id',$id)
    							 ->where('status',1)->get();
    	return view('Frontend.teachers.teacher',compact('subjectacc'));
    }


    public function acceptstd(Request $Request,$id)
	{
		$teacher=Subjectjoin::find($id);
		$teacher->status=1;
		$teacher->save();
		
		return back();
		//dd($user);
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
    //$subjects = Subject::all();
    $teacher=Teacher::where('status',0)->get();

	return view('Frontend.main',compact('teacher'));
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

	public function registerfun($value='')
	{
		return view('Frontend.register');
	}


	public function loginfun($value='')
	{
		return view('Frontend.login');
	}

	

	public function freecoursefun($value='')
	{
		return view('Frontend.freecourse');
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

	public function subjectjoin($id1,$id2){
		$user_id=Auth::user()->id;
		
        $subject_join=new Subjectjoin;
        $subject_join->subject_jd=$id2;
        $subject_join->teacher_id=$id1;
        $subject_join->user_id=$user_id;
        $subject_join->save();
        return back();
	}
	public function searchfun(Request $request,$value='')
	{

		$search_text=$request->searchbox;
		//dd($search_text);
		$teacher=User::Where('name','LIKE','%'.$search_text.'%')->get();
		//dd($teacher);	
     	 $userList=array();
      	foreach($teacher as $user){
       	 	if ($user->hasRole('Teacher')){
            	$teacherlist[] = $user;
        	}
      	}
		return view('Frontend.main2',compact('teacherlist'));
	}
	
}
