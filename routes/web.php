<?php
Route::view('/', 'welcome');
Route::view('/cal', 'cal');


Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/faculty', 'Auth\LoginController@showFacultyLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/faculty', 'Auth\RegisterController@showFacultyRegisterForm')->name('register.faculty')->middleware('auth:admin');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/faculty', 'Auth\LoginController@facultyLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/faculty', 'Auth\RegisterController@createFaculty');

Route::view('/admin', 'admin')->middleware('auth:admin');
Route::view('/faculty', 'faculty')->middleware('auth:faculty');

Route::get('/home', 'CounselingController@redirect')->middleware('auth');

Route::post('/createcounseling', 'CounselingController@createCounseling')->name('create.counseling')->middleware('auth');