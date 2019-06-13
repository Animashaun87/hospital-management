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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@home');
Route::get('/book-appointment', 'PageController@appoint');
Route::get('/all-doctor', 'PageController@all_doctor');
Route::get('/add-doctor', 'PageController@add_doctor');
Route::get('profile', 'PageController@doc_profile');
Route::get('all-patient', 'PageController@patient');
Route::get('add-patient', 'PageController@add_patient');
Route::get('patient-profile', 'PageController@patient_profile');
Route::get('patient-invoice', 'PageController@patient_invoice');

//doctor route
Route::get('doctors/create', 'DoctorController@create');
Route::post('doctors/create', 'DoctorController@store');
Route::get('doctor/{url}', 'DoctorController@show');
Route::get('doctors/edit/{id}', 'DoctorController@edit');
Route::post('doctors/edit/{id}', 'DoctorController@update');
Route::get('doctors/delete/{id}', 'DoctorController@delete');
Route::post('doctors/delete/{id}', 'DoctorController@destroy');

//patients route
Route::get('patients/create', 'PatientController@create');
Route::post('patients/create', 'PatientController@store');
Route::get('patient/{url}', 'PatientController@show');
Route::get('patients/files/{url}', 'PatientController@file_create');






Auth::routes();

Route::get('/home', 'PageController@home')->name('home');
Route::get('logout', 'Auth\loginController@logout');
