<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Jobseeker
Route::get('/jobseeker' ,'App\Http\Controllers\JobseekerProfileController@index');
Route::get('/jobseeker/editprofile' ,'App\Http\Controllers\JobseekerProfileController@edit');
Route::post('/jobseeker/editprofile/store' ,'App\Http\Controllers\JobseekerProfileController@editprofile')->name('jobseeker.store');
Route::post('/jobseeker/editprofile/update' ,'App\Http\Controllers\JobseekerProfileController@update')->name('jobseeker.update');


// Employer
Route::get('/employer' ,'App\Http\Controllers\EmployerProfileController@index');
Route::get('/employer/editprofile' ,'App\Http\Controllers\EmployerProfileController@edit');
Route::post('/employer/editprofile/store' ,'App\Http\Controllers\EmployerProfileController@editprofile')->name('employer.store');