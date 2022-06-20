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

Route::get('/', function () {
    return view('index');
});

Route::get('/page-login', function () {
    return view('pages.page-login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin-changepass', function () {
    return view('pages.admin-changepass');
});
Route::get('/admin-createacc', function () {
    return view('pages.admin-createacc');
});
Route::get('/admin-lock-attendance', function () {
    return view('pages.admin-lock-attendance');
});
Route::get('/index-admin', function () {
    return view('pages.index-admin');
});
Route::get('/index-student', function () {
    return view('pages.index-student');
});
Route::get('/index-teacher', function () {
    return view('pages.index-teacher');
});
Route::get('/student-changepass', function () {
    return view('pages.student-changepass');
});
Route::get('/student-otp', function () {
    return view('pages.student-otp');
});
Route::get('/teacher-add-classsched', function () {
    return view('pages.teacher-add-classsched');
});
Route::get('/teacher-changepass', function () {
    return view('pages.teacher-changepass');
});
Route::get('/teacher-view-attendance', function () {
    return view('pages.teacher-view-attendance');
});
Route::get('/teacher-view-classsched', function () {
    return view('pages.teacher-view-classsched');
});
Route::get('/student-myprofile', function () {
    return view('pages.student-myprofile');
});
Route::get('/teacher-myprofile', function () {
    return view('pages.teacher-myprofile');
});
