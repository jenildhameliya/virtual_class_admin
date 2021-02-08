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

Auth::routes();

//Admin Routs
Route::group(['prefix' => 'admin'], function () {
	Route::namespace('admin')->group(function () {
		Route::get('/home', 'HomeController@index')->name('home');

		//Admin
		Route::get('/index', 'IndexController@index')->name('index');

		//Student
		Route::get('/student_detail', 'StudentController@index')->name('studentdetail');
		Route::get('/student_create', 'StudentController@create')->name('studentcreate');
		Route::get('/student_edit', 'StudentController@edit')->name('studentedit');
		Route::get('/student_attendance', 'StudentController@attendance')->name('attendance');

		//Academic
		Route::get('/class_timetable', 'AcademicController@class_tt')->name('class_timetable');
		Route::get('/teacher_timetable', 'AcademicController@teacher_tt')->name('teacher_timetable');
		Route::get('/assign_teacher', 'AcademicController@assign_teacher')->name('assign_teacher');
		Route::get('/subject', 'AcademicController@subject')->name('subject');
		Route::get('/subject_create', 'AcademicController@subject_create')->name('subject_create');
		Route::get('/class', 'AcademicController@class')->name('class');
		Route::get('/class_create', 'AcademicController@class_create')->name('class_create');
		Route::get('/subject_group', 'AcademicController@subject_group')->name('subject_group');

		//Human Resource
		Route::get('/staff_details', 'HumanResourceController@staff_detail')->name('staff_details');
		Route::get('/staff_create', 'HumanResourceController@staff_create')->name('staff_create');
		Route::get('/staff_attendance', 'HumanResourceController@attendance')->name('staff_attendance');

		//Meeting
		Route::get('/meeting', 'MeetingController@meeting')->name('meeting');

		//download
		Route::get('/doc_download', 'DownloadController@doc_download')->name('doc_download');


		//System Setting
		Route::get('/general_setting', 'SystemSettingController@general')->name('general');
		Route::get('/notification_setting', 'SystemSettingController@notification')->name('notification');
		Route::get('/email_setting', 'SystemSettingController@email')->name('email');
		Route::get('/language', 'SystemSettingController@language')->name('language');
		Route::get('/custom_fields', 'SystemSettingController@custom_fields')->name('custom_fields');
		Route::get('/system_fields', 'SystemSettingController@system_fields')->name('system_fields');
	});
});

// Teacher Routs
Route::group(['prefix' => 'teacher'], function () {
	Route::namespace('teacher')->group(function () {
		Route::get('/home', 'HomeController@index')->name('home');

		//Teacher
		Route::get('/index', 'IndexController@index')->name('teacher_index');

		//Student
		Route::get('/student_detail', 'StudentController@index')->name('stu_detail');
		Route::get('/student_create', 'StudentController@create')->name('stu_create');
		Route::get('/student_attendance', 'StudentController@attendance')->name('stu_attendance');

		//Meeting
		Route::get('/meeting', 'MeetingController@meeting')->name('stu_meeting');
	});
});




