@extends('layouts.master')

@section('title')
Add Patient
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Patient</h2>
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

<form method="post" action="{{url('patients/create')}}" enctype="multipart/form-data">
@csrf
<div class="body">
    <div class="row clearfix">
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="phone" class="form-control" placeholder="Phone No." required="">
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">                            
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="date" name="dob" class="datepicker form-control" placeholder="Date of Birth" required="">
                </div>
            </div>
        </div>

         <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="disease" class="form-control" placeholder="Disease">
                </div>
            </div>
        </div> 

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="form-group drop-custum">
                <select class="form-control show-tick" name="gender" required="">
                    <option value="">-- Gender --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>                            
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="">
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">  
     <div class="col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="address" placeholder="Address" class="form-control" required="">
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" name="occupation" placeholder="Occupation" class="form-control" required="">
                </div>
            </div>
        </div>

          <div class="col-sm-12">
            <div class="form-group">
                <div class="form-line">
                    <input type="file" name="picture" class="form-control" required="">
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
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

@endsection