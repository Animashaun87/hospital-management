<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Doctor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home()
    {
        $patients = Patient::all();
    	return view('welcome', compact('patients'));
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
        $doctors = Doctor::all();
    	return view('pages.all_doctor', compact('doctors'));
    }
    function doc_profile()
    {
        $doctors = Doctor::all();
    	return view('pages.doc_profile', compact('doctors'));
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
