<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/lang', 'LangController@index')->name('front.lang');

Route::get('/', 'HomeController@index')->name('front.home');
Route::get('/terms', 'HomeController@terms')->name('front.home.terms');
Route::get('/privacyPolicy', 'HomeController@terms')->name('front.home.privacypolicy');
Route::get('/clinic-location', 'HomeController@clinicLocation')->name('front.clinicLocation');

Route::get('/about', 'AboutController@index')->name('front.about');
// Route::get('/courses', 'CourseController@index')->name('front.course');
Route::get('/courses/show/{id}', 'CourseController@show')->name('front.course.show');

Route::get('/contact', 'ContactController@index')->name('front.contact');

Route::get('/course', 'CourseController@index')->name('front.courses');
Route::get('/course/show/{id}', 'CourseController@show')->name('front.courses.show');
Route::get('/course/quiz/{id}', 'CourseController@quiz')->name('front.courses.quiz');

// request of the course 
Route::post('/course', 'CourseController@UserRequest')->name('front.courses.request');

