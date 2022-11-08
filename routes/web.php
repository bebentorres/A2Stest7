<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\EmployerProfile;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Jobseeker
Route::get('/jobseeker' ,'App\Http\Controllers\JobseekerProfileController@index');
Route::get('/jobseeker/editprofile' ,'App\Http\Controllers\JobseekerProfileController@edit');
Route::post('/jobseeker/editprofile/store' ,'App\Http\Controllers\JobseekerProfileController@editprofile')->name('jobseeker.store');

Route::get('/jobseeker/editprofile/update', 'App\Http\Controllers\JobseekerProfileController@up' );
Route::post('/jobseeker/editprofile/update' ,'App\Http\Controllers\JobseekerProfileController@update')->name('jobseeker.update');



// Employer
Route::get('/employer' ,'App\Http\Controllers\EmployerProfileController@index');
Route::get('/employer/editprofile' ,'App\Http\Controllers\EmployerProfileController@edit');
Route::post('/employer/editprofile/store' ,'App\Http\Controllers\EmployerProfileController@editprofile')->name('employer.store');

Route::get('/employer/editprofile/update', 'App\Http\Controllers\EmployerProfileController@up' );
Route::post('/employer/editprofile/update' ,'App\Http\Controllers\EmployerProfileController@update')->name('employer.update');


//Route::post('/employer/editprofile/store' ,'App\Http\Controllers\EmployerProfileController@store');


// Post
Route::view('/employer/createpost', 'users.employer.createjob')->name('employer.create');



// Search page
Route::view('/search', 'search');


Route::resource('jobPosts', 'App\Http\Controllers\JobPostController');

// Search page
Route::view('/search', 'search');

