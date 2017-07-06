<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', 'AuthController@signupView')->name('signup_view');
Route::get('/login', 'AuthController@loginView')->name('login_view');

Route::post('/login', 'AuthController@login_post')->name('login_post');

Route::post('/register', 'AuthController@register')->name('register');

Route::get('/logout', 'AuthController@logout')->name('logout');

//Job Routes

Route::get('/qoute-step1', 'JobController@qoute_step1_view')->name('qoute-step1');
Route::post('/qoutestep1', 'JobController@qoute_step1_post')->name('qoute-step1_post');

Route::get('/qoute-step2', 'JobController@qoute_step2_view')->name('qoute-step2');


Route::get('/resume', 'JobController@resume_view')->name('resume');

//Profile Routes
Route::get('/profile', 'ProfileController@index')->name('garage_profile');
Route::get('/edit_garage_profile/', 'ProfileController@editProfile_index')->name('edit_garage_profile');

Route::post('/edit-garage-profile', 'ProfileController@editProfile_post')->name('editProfile_post');
//Route::post('/auth/signup', 'AuthController@register')->name('signup');

//Static pages Controller

Route::get('/aboutus', 'StaticController@about_view')->name('about_us');
Route::get('/concept', 'StaticController@concept_view')->name('concept');
Route::get('/confidential', 'StaticController@confidential_view')->name('confidential');
Route::get('/terms&Condition', 'StaticController@termsCondition_view')->name('termscondition');
Route::get('/faq', 'StaticController@faq_view')->name('faq');
