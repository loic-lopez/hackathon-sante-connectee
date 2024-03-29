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

//Route::group("/login", function () {
//   Route::get('/', 'LoginController@showLoginForm');
//});

Auth::routes();

Route::get('/blog', 'Blog\BlogController@index');
Route::get('/blog/1', 'Blog\BlogController@blog');

Route::get('/diet', 'Diet\DietController@index');

Route::get('/profile', 'Profiles\ProfilesController@index');

Route::get('/doctor_section', 'Doctor\DoctorSectionController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/update/doctor', 'Profiles\ProfilesController@updateDoctor');

Route::get('/patient/{id}', 'Profiles\ProfilesController@profileForDoctor');