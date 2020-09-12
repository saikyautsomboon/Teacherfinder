<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::get('report','BackendController@reportfun')->name('reportpage');

Route::get('teacher','PageController@teacherfun')->name('teacherpage');
Route::get('profolio','PageController@profoliofun')->name('profoliopage');