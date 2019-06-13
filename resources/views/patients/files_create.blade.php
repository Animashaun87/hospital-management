@extends('layouts.master')

@section('title')
Patient File
@stop

@section('content')
<div class="container-fluid">
<h3>Upload Patient Document- {{$patient->first_name}}</h3>
</div>

<section class="content">
<div class="container-fluid">
<div class="row clearfix">
           <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div> 
        </div>
    </div>
</section>
@stop