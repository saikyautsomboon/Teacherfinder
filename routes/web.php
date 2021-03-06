<?php
//use Illuminate;
use Illuminate\Support\Facades\Route;
use App\Subject;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;

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
Route::get('main2','PageController@main2page');
//Route::get('teacherregister','PageController@teacherregisterfun')->name('teacherregisterpage');
Route::get('freecourse','PageController@freecoursefun')->name('freecoursepage');

Route::resource('tregister','TeacherRegisterController');

Route::get('report','BackendController@reportfun')->name('reportpage');


Route::middleware('role:Admin')->group(function ()
{
	Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
	Route::get('accept/{id}','BackendController@accept')->name('accept');
	Route::get('teacherreq','BackendController@teacherreqfun')->name('teacherreq');
	Route::get('teacherlist','BackendController@teacherlistfun')->name('teacherlist');
	Route::get('teacherdetail/{id}','BackendController@teacherdetailfun')->name('teacherdetail');
	Route::resource('subject_teachers','SubjectTeacherController');
	
	Route::get('teacherreq','BackendController@teacherreqfun')->name('teacherreq');	
	
	Route::resource('subjects','SubjectController');
	Route::resource('students','StudentController');
	Route::resource('teach','TeacherController');
	Route::resource('teacher','TeacherController');
});

Route::middleware('role:Teacher')->group(function ()
{   

	/*Route::get('teacherdetail','BackendController@teacherdetailfun')->name('teacherdetail');*/
	Route::get('teachers/{id}','PageController@teachersfun')->name('teacherpage');
	//Route::get('teacherreqest/{id}','PageController@teachersfun')->name('teacherrequestpage');

	Route::get('stdrequestlist/{id}','PageController@stdrequestlistfun')->name('studentrequestlistpage');
	Route::get('studentlist/{id}','PageController@studentlistfun')->name('studentlistpage');
	Route::resource('subject_teachers','SubjectTeacherController');
	Route::get('acceptstd/{id}','PageController@acceptstd')->name('acceptstd');
	Route::resource('subjectjoins','SubjectjoinController');

});

Route::get('about','PageController@aboutfun')->name('aboutpage');
Route::get('subjectjoin/{id1}/{id2}','PageController@subjectjoin')->name('subjectjoin');

Route::get('courses','PageController@coursesfun')->name('coursespage');
Route::get('coursedetails/{id}','PageController@coursedetailsfun')->name('coursedetailspage');
Route::get('elements','PageController@elementsfun')->name('elementspage');

Route::get('profolio','PageController@profoliofun')->name('profoliopage');

Auth::routes();

Route::get('search','PageController@searchfun')->name('searchpage');
Route::get('registerpage','PageController@registerfun')->name('registerpage');
Route::get('/home', 'HomeController@index')->name('home');

