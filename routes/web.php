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

Route::get('/', 'PageController@home');
Route::get('/doctor-schedule', 'PageController@doc_schedule');
Route::get('/book-appointment', 'PageController@appoint');
Route::get('/all-doctor', 'PageController@all_doctor');
Route::get('/add-doctor', 'PageController@add_doctor');
Route::get('profile', 'PageController@doc_profile');
Route::get('all-patient', 'PageController@patient');
Route::get('add-patient', 'PageController@add_patient');
Route::get('patient-profile', 'PageController@patient_profile');
Route::get('patient-invoice', 'PageController@patient_invoice');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
