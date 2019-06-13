<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->title = $request->title;
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->gender = $request->gender;
        $doctor->speciality = $request->speciality;
        $doctor->url = str_slug($request->name);
        $doctor->phone = $request->phone;
        if ($request->hasFile('picture')) {
            $picName= "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/',$picName);
            $doctor->picture='uploads/'.$picName;
        }
        $doctor->save();
        return redirect('all-doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $doctor = Doctor::where('url',$url)->first();
        if (!$doctor) {
            abort(404);
        }
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }

     public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.delete', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->title = $request->title;
        $doctor->name = $request->name;
        $doctor->description = $request->description;
        $doctor->gender = $request->gender;
        $doctor->speciality = $request->speciality;
        $doctor->phone = $request->phone;
        if ($request->hasFile('picture')) {
            $picName= "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/',$picName);
            $doctor->picture='uploads/'.$picName;
        }
        $doctor->save();
        return redirect('all-doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect('all-doctor');
    }
}
