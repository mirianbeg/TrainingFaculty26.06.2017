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
Route::resource('faculties', 'FacultyController', ['except' =>['destroy']]);
Route::resource('programs', 'ProgramController', ['except' =>['destroy']]);
Route::resource('courses', 'CourseController', ['except' =>['destroy']]);
Route::resource('programs.courses', 'ProgramCourseController', ['except' => ['edit', 'update']]);

Route::resource('users', 'UserController');
Route::resource('students', 'StudentController');
Route::resource('teachers', 'TeacherController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {})->middleware('isAdmin');
