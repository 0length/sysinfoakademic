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
    return view('home');
});
Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard/admin/addstudent', function () {
    return view('admin.add-student');
});

Route::get('/dashboard/admin/addsubject', function () {
    return view('admin.add-subject');
});
