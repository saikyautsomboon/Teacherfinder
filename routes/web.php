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


Route::get('/','PageController@mainfun')->name('mainpage');
Route::get('blog','PageController@blogfun')->name('blogpage');
Route::get('blogdetail','PageController@blogdetailfun')->name('blogdetailpage');
Route::get('contact','PageController@contactfun')->name('contactpage');

Route::get('loginpage','PageController@loginfun')->name('loginpage');
Route::get('teacherregister','PageController@teacherregisterfun')->name('teacherregisterpage');
Route::get('freecourse','PageController@freecoursefun')->name('freecoursepage');

Route::resource('tregister','TeacherRegisterController');

Route::get('report','BackendController@reportfun')->name('reportpage');

Route::middleware('role:Admin')->group(function ()
{
	Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
<<<<<<< HEAD
=======
	Route::resource('subject_teachers','SubjectTeacherController');
<<<<<<< HEAD
=======
>>>>>>> 64118ded50e0789be92bc28082b674de8b47001f

>>>>>>> d1ebcffffb9ef18722e88b2b263d61815fb667a7
	Route::get('accept/{id}','BackendController@accept')->name('accept');
	Route::get('teacherreq','BackendController@teacherreqfun')->name('teacherreq');
<<<<<<< HEAD
	Route::get('teacherlist','BackendController@teacherlistfun')->name('teacherlist');
=======
<<<<<<< HEAD

=======
>>>>>>> 64118ded50e0789be92bc28082b674de8b47001f


>>>>>>> d1ebcffffb9ef18722e88b2b263d61815fb667a7
	Route::resource('subjects','SubjectController');
	Route::resource('students','StudentController');
	Route::resource('teach','TeacherController');
	Route::resource('teacher','TeacherController');
	

});


Route::middleware('role:Teacher')->group(function ()
{   
	Route::get('teacherdetail','BackendController@teacherlistfun')->name('teacherdetail');

});


Route::get('about','PageController@aboutfun')->name('aboutpage');
Route::get('courses','PageController@coursesfun')->name('coursespage');
Route::get('coursedetails','PageController@coursedetailsfun')->name('coursedetailspage');
Route::get('elements','PageController@elementsfun')->name('elementspage');



Route::get('teachers','PageController@teachersfun')->name('teacherpage');
Route::get('profolio','PageController@profoliofun')->name('profoliopage');

Auth::routes();

Route::get('registerpage','PageController@registerfun')->name('registerpage');
Route::get('/home', 'HomeController@index')->name('home');
