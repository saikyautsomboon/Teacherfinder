<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
	public function dashboardfun($value='')
	{
		return view('Backend.dashboard');
	}
	public function reportfun($value='')
	{
		return view('Backend.report');
	}
}
