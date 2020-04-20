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
    return view('welcome');
});

Route::get('/G&A', function () {
    return view('Admin.Departments.G&A');
});

Route::get('/G&A-Exp', function () {
    return view('Admin.Departments.G&A-Exp');
});

Route::get('/DepartmentLanding', function () {
    return view('Admin.Departments.DepartmentLanding');
});

Route::get('/Login', function () {
    return view('Admin.LoginReg.Login');
});

Route::post('/account/login','LoginController@login')->name('account.login');

Route::get('/u/home','HomeController@home');
