<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home()
    {
    	return view('welcome');
    }
    function appoint()
    {
    	return view('pages.appoint');
    }
    function doc_schedule()
    {
    	return view('pages.doc_schedule');
    }
    function all_doctor()
    {
    	return view('pages.all_doctor');
    }
     function add_doctor()
    {
    	return view('pages.add_doctor');
    }
    function doc_profile()
    {
    	return view('pages.doc_profile');
    }
    function patient()
    {
    	return view('pages.patient');
    }
    function add_patient()
    {
    	return view('pages.add_patient');
    }
    function patient_profile()
    {
    	return view('pages.patient_profile');
    }
    function patient_invoice()
    {
    	return view('pages.patient_invoice');
    }
}
