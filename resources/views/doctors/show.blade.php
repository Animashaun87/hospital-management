@extends('layouts.master')

@section('title')
Doctor Profile
@endsection

@section('content')
<section class="content profile-page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 p-l-0 p-r-0">
                <section class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="{{url($doctor->picture)}}" alt=""> </div>
                            <h4 class="mb-0"><strong>{{$doctor->title}}{{$doctor->name}}</strong></h4>
                            <span class="text-muted col-white">{{$doctor->speciality}}</span>
                            <div class="mt-10">
                                <button class="btn btn-raised btn-default bg-blush btn-sm">Follow</button>
                                <button class="btn btn-raised btn-default bg-green btn-sm">Message</button>
                            </div>
                            <p class="social-icon">
                                <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                <a title="Dribbble" href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a>
                                <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                                <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                                <a title="Pinterest" href="javascript:void(0);"><i class="zmdi zmdi-pinterest "></i></a>
                            </p>
                        </div>
                    </div>
                
                </section>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card mt-10">
                    <div class="header">
                        <h2>About Me</h2>
                    </div>
                    <div class="body">
                        <p class="text-default">{{$doctor->description}}.</p>
                        <blockquote>
                            <p>{{$doctor->description}}</p>
                            <small>Designer <cite title="Source Title">Source Title</cite></small> </blockquote>
                    </div>
                </div>

                <!-- <div class="card"> -->
                   
                <!-- </div> -->

            </div>

            <!-- <div class="col-lg-8 col-md-12"> -->
                            <!-- </div> -->

        </div>
    </div>
</section>
@endsection