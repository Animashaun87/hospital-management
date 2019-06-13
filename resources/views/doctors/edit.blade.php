@extends('layouts.master')

@section('title')
Edit Doctor
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Doctor</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<form method="post" action="{{url('doctors/edit/'.$doctor->id)}}" enctype="multipart/form-data">
					@csrf
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="title" title="name" class="form-control" placeholder="Title" required="" value="{{$doctor->title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required="" value="{{$doctor->name}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                           <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="dexcription" class="datepicker form-control" placeholder="Description..." required="" value="{{$doctor->description}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="gender" required="">
                                        <option value="">-- Gender --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="speciality" class="form-control" placeholder="Speciality" required="" value="{{$doctor->speciality}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" required="" value="{{$doctor->phone}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                     @if($doctor->picture)
                                     <img src="{{url($doctor->picture)}}" height="100px" width="100px">
                                     @endif
                                    </div>
                                </div>
                            </div>                           
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Update</button>
                                <button type="submit" class="btn btn-raised">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
				</div>
			</div>
		</div>
        
         </div>
</section>

@stop
