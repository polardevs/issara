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
                    <a href="{{ action('Admin\BannerController@index') }}">Banner</a>
                </li>
	            <li class="active">
	                <strong>Insert</strong>
	            </li>
	        </ol>
	    </div>

	</div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Banner</h5>
            </div>
            <div class="ibox-content">
                <form method="POST" action="{{ (@$banner)? action('Admin\BannerController@update', $banner->id) : action('Admin\BannerController@store') }}" enctype="multipart/form-data">
                    @if(@$banner) {!! method_field('put') !!} @endif
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <img id="previewImage" src="{{ $banner->image or '' }}" class="center-block banner-insert img-responsive">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-8 col-sm-offset-2 form-horizontal">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" onchange="readURL(this, 'previewImage')">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    @if(@$banner)
                                        <label class="col-sm-2 control-label">Order Index</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="order" value="{{$banner->order or ''}}">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <textarea id="myTextarea" name="content">{!! $banner->content or '' !!}</textarea>
                        </div>
                        <div class="col-sm-12 text-right" style="padding-top:20px;">
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
@endsection

