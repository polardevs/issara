@extends('layouts.admin')
@section('content')

<script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        menubar: false,
        height: 300,
        plugins: [
            'link image',

        ]
    });
</script>

<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 630px;">
    <div class="row border-bottom">
	    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
	        <ul class="nav navbar-top-links navbar-right">
	            <li>
	                <span class="m-r-sm text-muted welcome-message">Welcome to Issara Admin</span>
	            </li>
	            <li>
	                <a href="login.html">
	                    <i class="fa fa-sign-out"></i> Log out
	                </a>
	            </li>
	        </ul>
	    </nav>
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Banner</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
                <li>
                    <a href="{{ url('/admin/banner') }}">Banner</a>
                </li>
	            <li class="active">
	                <strong>Insert</strong>
	            </li>
	        </ol>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Banner</h5>    
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <img src="{{ url('/image/slide4.jpg') }}" class="center-block banner-insert img-responsive">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-8 col-sm-offset-2 form-horizontal">
                        <div class="form-group">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Order Index</label>
                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                        </div>

                        <textarea id="myTextarea" name="content"></textarea>
                    </div>
                    <div class="col-sm-12 text-right" style="padding-top:20px;">
                        <button class="btn btn-white" type="submit">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')     
</div>
@endsection

