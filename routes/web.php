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

Route::get('/','PageController@mainfun')->name('mainpage');
Route::get('blog','PageController@blogfun')->name('blogpage');
Route::get('blogdetail','PageController@blogdetailfun')->name('blogdetailpage');
Route::get('contact','PageController@contactfun')->name('contactpage');



Route::get('report','BackendController@reportfun')->name('reportpage');


Route::get('/','PageController@mainfun')->name('mainpage');
Route::get('about','PageController@aboutfun')->name('aboutpage');
Route::get('courses','PageController@coursesfun')->name('coursespage');
Route::get('coursedetails','PageController@coursedetailsfun')->name('coursedetailspage');
Route::get('elements','PageController@elementsfun')->name('elementspage');



Route::get('teacher','PageController@teacherfun')->name('teacherpage');
Route::get('profolio','PageController@profoliofun')->name('profoliopage');

