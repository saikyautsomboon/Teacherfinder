<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\Subject;

class BackendController extends Controller
{
	public function dashboardfun($value='')
	{
		$teacherlists=Teacher::where('status',0)->get();
		$teachers=Teacher::where('status',1)->get();
		$required='Want to be Teacher';
		return view('Backend.dashboard',compact('teachers','required','teacherlists'));
	}
	public function reportfun($value='')
	{
		return view('Backend.report');
	}
	public function teacherreqfun(){
		$teachers=Teacher::where('status',1)->get();
         $subjects = Subject::all();

		
		return view('Backend.teacher',compact('teachers',compact('subjects')));
	}
	public function teacherlistfun(){
		$teacherlists=Teacher::where('status',0)->get();
		// dd($teacherlists);
		return view('Backend.teacherlist',compact('teacherlists'));
	}
	public function teacherdetailfun($id){
		
		$teacherdetail=Teacher::find($id);
		return view('Backend.teacherdetail',compact('teacherdetail'));
	}
	public function accept(Request $Request,$id)
	{
		$teacher=Teacher::find($id);
		$teacher->status=0;
		$userid=$teacher->user_id;
		$user=User::find($userid);
		$teacher->save();
		$user->assignRole('Teacher');
		$role=$user->getRoleNames();
	
		return redirect()->route('teacherreq');
		//dd($user);
	}

	
}
