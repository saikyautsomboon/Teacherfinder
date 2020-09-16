<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teachers = Teacher::all();
        $teacherlists=Teacher::where('status',0)->get();
        
        //dd($teachers);
<<<<<<< HEAD

        return view('Backend.teacher',compact('teachers','teacherlists'));
=======
        return view('Backend.teacher',compact('teachers','teacherlists'));

        

        // return view('Backend.teacher',compact('teachers'));

        // return view('Backend.teacher');
>>>>>>> c1a37d4e266925f06b9fcff9065a2eb244c8379b
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
                "dob"=>'required',
                "cv"=>'required|mimes:docx,pdf',
                "porfolio"=>'',
                
            ]);

            $cv=time().'.'.$request->cv->extension();

            $request->cv->move(public_path('teachercv'),$cv);//file upload

            $path= 'teachercv/'.$cv;

        // if include file,upload file
        //datainsert

            $teachers=new Teacher;
            $teachers->user_id=Auth::id();
          
            $teachers->dob=$request->dob;
            $teachers->cv=$path;
            $teachers->porfolio=$request->porfolio;
            $teachers->status=0;
            $teachers->save();
        //redirect
        return view('Backend.teacher');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $teachers=Teacher::all();
       /*dd($itemdetails);*/
        return view('Backend.teacher',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
       $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
