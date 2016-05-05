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
	        <h2>Member</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
                <li>
                    <a href="{{ action('Admin\UserController@index') }}">Member</a>
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
                <h5>Member</h5>
            </div>
            <div class="ibox-content">
                <form method="POST" action="{{ (@$user)? action('Admin\UserController@update', $user->id) : action('Admin\UserController@store') }}" enctype="multipart/form-data">
                @if(@$user) {!! method_field('put') !!} @endif
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-sm-6 form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="name" value="{{$user->name or old('name')}}"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="email" value="{{$user->email or old('email')}}"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="types">
                                    <option value="">--select role--</option>
                                    @foreach(config('app.frontEnd.userTypes') as $role)
                                        <option value="{{$role}}" @if(@$user->types == $role) selected @endif>{{$role}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Avatar</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="avatar" value="{{$user->avatar or old('avatar')}}"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="status">
                                    <option value="">--select status--</option>
                                    @foreach(config('app.frontEnd.userStatus') as $status)
                                        <option value="{{$status}}" @if(@$user->status == $status) selected @endif>{{$status}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group text-right">
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

