<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@showHome');

Route::get('/adminlogin','AdminLoginController@showloginpage');

Route::post('/adminloginsubmit','AdminLoginController@loginsubmitfunc')->name('adminloginsubmit');

Route::get('/adminlogout','AdminLoginController@adminlogoutfunc');


Route::get('/addcourseshow',function(){

	return view('Admin.mainpages.addcourse');
});


Route::post('/addcoursesubmit','AdminHomeController@coursedetailssubmit')->name('addcoursesubmit');

Route::get('/courseview',function(){

    $course_details = App\coursemasters::get();
   // print_r($course_details);
    return view('Admin.mainpages.courseslist',['course_data'=>$course_details]);

});

Route::get('/editcourse/{id}','AdminHomeController@getcoursedetailsbyid');

Route::post('/editcoursesubmit','AdminHomeController@updatecoursedetails')->name('editcoursesubmit');


Route::get('/addfacultyshow',function(){

	return view('Admin.mainpages.addfaculty');
});

Route::post('/addfacultysubmit','FacultyHomeController@facultydetailssubmit')->name('addfacultysubmit');

Route::get('/facultyview',function(){

    $faculty_details = App\facultymasters::get();
   // print_r($course_details);
    return view('Admin.mainpages.facultylist',['faculty_data'=>$faculty_details]);

});


Route::get('/editfaculty/{id}','FacultyHomeController@getfacultydetailsbyid');
Route::post('/editfacultysubmit','FacultyHomeController@updatefacultydetails')->name('editfacultysubmit');