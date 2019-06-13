@extends('layouts.master')

@section('title')
All Doctors
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Doctors</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            @foreach($doctors as $doctor)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">                            
                            <div class="thumb-xl member-thumb">
                                <img src="{{url($doctor->picture)}}" class="img-thumbnail rounded-circle" alt="profile-image">                               
                            </div>

                            <div class="">
                                <h5 class="m-b-5 m-t-20">{{$doctor->title}}{{$doctor->name}}</h5>
                                <p class="text-muted">{{$doctor->speciality}}<span class="text-pink">{{$doctor->gender}}</span></p>
                            </div>

                            <p class="text-muted">{{$doctor->phone}}</p>                           
                            <a href="{{url('doctor/'.$doctor->url)}}"  class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                               <a href="{{url('doctors/edit/'.$doctor->id)}}" class="btn btn-primary btn-sm">Edit</a>
                               <a href="{{url('doctors/delete/'.$doctor->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
           
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 text-center">
                <a href="{{url('doctors/create')}}" class="btn btn-raised g-bg-cyan">Add Doctor</a>
            </div>
        </div>
    </div>
</section>
@endsection