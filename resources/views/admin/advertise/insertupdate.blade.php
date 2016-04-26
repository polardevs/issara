@extends('layouts.admin')
@section('content')

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
	        <h2>Advertise</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
                <li>
                    <a href="{{ url('/admin/advertise') }}">Advertise</a>
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
                <h5>Advertise</h5>
            </div>
            <div class="ibox-content">
                <form method="POST" action="{{ (@$advertise)? action('Admin\AdvertiseController@update', $advertise->id) : action('Admin\AdvertiseController@store') }}" enctype="multipart/form-data">
                    @if(@$advertise) {!! method_field('put') !!} @endif
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-sm-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{$advertise->name or ''}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="category_id">
                                        @foreach($adsCategories as $adsCatg)
                                            <option value="{{$adsCatg->id}}" @if('' == $adsCatg->id) selected @endif>{{$adsCatg->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="link_url" value="{{$advertise->link_url or ''}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        <?php $listStatus = ['approve', 'reject']; ?>
                                        @foreach($listStatus as $index => $status)
                                            @if(isset($advertise))
                                                <option value="{{$status}}" @if($advertise->status == $status) selected @endif>{{$status}}</option>
                                            @else
                                                <option value="{{$status}}" @if($index == 1) selected @endif>{{$status}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <img id="previewImage" src="{{ $advertise->image or '' }}" class="center-block banner-insert img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="form-group text-right">
                                <input type="file" class="form-control" name="image" onchange="readURL(this, 'previewImage')">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group text-right">
                                <button class="btn btn-white"><a href="{{ action('Admin\AdvertiseController@index') }}">Cancel</a></button>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
@endsection

