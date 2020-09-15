<?php

namespace App\Http\Controllers;

use App\Subject_Teacher;
use Illuminate\Http\Request;

class SubjectTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject_teachers = Subject_Teacher::all();
        // dd($subject_teachers);
        return view('Backend.subject_teachers.index',compact('subject_teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Backend.subject_teachers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        "subject_id" => 'required',
        "teacher_id" => 'required',
        "description" => 'required',
        "price" => 'required',
        "pdf" => 'required',
        "video" => 'required',
        
    ]);
     $subject_Teacher= new Subject_Teacher;
    // col name from database
    $subject_Teacher->subject_id = $request->subject_id;
    $subject_Teacher->teacher_id = $request->teacher_id;
    $subject_Teacher->description = $request->description;
    $subject_Teacher->price = $request->price;
    $subject_Teacher->pdf = $request->pdf;
    $subject_Teacher->video = $request->video;
    
    $subject_Teacher->save();

    // redirect
    return redirect()->route('subject_teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject_Teacher  $subject_Teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Subject_Teacher $subject_Teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject_Teacher  $subject_Teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject_Teacher $subject_Teacher)
    {
        return view('Backend.subject_teachers.edit',compact('subject_Teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject_Teacher  $subject_Teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject_Teacher $subject_Teacher)
    {
         $request->validate([
        "subject_id" => 'required',
        "teacher_id" => 'required',
        "description" => 'required',
        "price" => 'required',
        "pdf" => 'required',
        "video" => 'required',
        
    ]);
     $subject_Teacher= new Subject_Teacher;
    // col name from database
    $subject_Teacher->subject_id = $request->subject_id;
    $subject_Teacher->teacher_id = $request->teacher_id;
    $subject_Teacher->description = $request->description;
    $subject_Teacher->price = $request->price;
    $subject_Teacher->pdf = $request->pdf;
    $subject_Teacher->video = $request->video;
    
    $subject_Teacher->save();

    // redirect
    return redirect()->route('subject_teachers.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject_Teacher  $subject_Teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject_Teacher $subject_Teacher)
    {
        $subject_Teacher->delete();
        return redirect()->route('subject_teachers.index');
    }
}
