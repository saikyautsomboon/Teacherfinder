<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;
use App\Subject;
use Auth;
class TeacherRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teacher=Teacher::all();

        //return view('Frontend.main')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects=Subject::all();
        //dd($subjects);
        return view('Frontend.teacherregister',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        
        $request->validate([
                "dob"=>'required',
                "cv"=>'required|mimes:docx,pdf',
                "subject_id"=>'required',
                "porfolio"=>'',
                
            ]);

            $cv=time().'.'.$request->cv->extension();
            


            $request->cv->move(public_path('cv/'),$cv);//file upload

            $path= 'teachercv/'.$cv;

        // if include file,upload file
        //datainsert

            $porfolio='http://'.$request->porfolio.'/';
            $teachers=new Teacher;
            $teachers->user_id=Auth::id();
          
            $teachers->dob=$request->dob;
            $teachers->cv=$path;
            $teachers->porfolio=$porfolio;
            $teachers->subject_id=$request->subject_id;
            $teachers->status=1;
            $teachers->save();
        //redirect
        return view('Frontend.main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
