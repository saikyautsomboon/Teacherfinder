<?php

namespace App\Http\Controllers;

use App\Subjectjoin;
use Illuminate\Http\Request;

class SubjectjoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subjectjoin  $subjectjoin
     * @return \Illuminate\Http\Response
     */
    public function show(Subjectjoin $subjectjoin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subjectjoin  $subjectjoin
     * @return \Illuminate\Http\Response
     */
    public function edit(Subjectjoin $subjectjoin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subjectjoin  $subjectjoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjectjoin $subjectjoin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subjectjoin  $subjectjoin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjectjoin $subjectjoin)
    {
        $subjectjoin->delete();
        return back();
    }
}
