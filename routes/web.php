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
    return view('index');
});
Route::view('index','index');
Route::view('about','about');
Route::view('contact','contact');
Route::view('signinemployer','signinemployer');
Route::view('signinemploye','signinemploye');
Route::view('loginemp','login');
Route::post('loginemploye','LoginController@LoginEmploye');
Route::view('loginemployerr','loginemployer');
Route::post('loginemployer','LoginController@LoginEmployer');
Route::post('createemploye','SignInController@EmployeSignin');
Route::post('createemployer','SignInController@EmployerSignin');
Route::post('createjob/{id}','LoginController@createjob');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
