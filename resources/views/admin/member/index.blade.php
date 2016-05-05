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
	            <li class="active">
	                <strong>Member</strong>
	            </li>
	        </ol>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Member</h5>
                <div class="ibox-tools">
                    <a href="{{ action('Admin\UserController@create') }}" class="collapse-link">
                        <span class="label label-primary"><i class="fa fa-plus"></i></span>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
            	<div class="row">
                    <form action="{{action('Admin\UserController@index')}}" method="get">
                        <div class="col-sm-12 form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Name</label>
                                <div class="col-sm-3"><input type="text" class="form-control" name="searchName" value="{{$search->name or ''}}"></div>
                                <label class="col-sm-1 control-label">Email</label>
                                <div class="col-sm-3"><input type="text" class="form-control" name="searchEmail" value="{{$search->email or ''}}"></div>
                                <label class="col-sm-1 control-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-control m-b" name="searchStatus">
                                        <option value="">--select status--</option>
                                        @foreach(config('app.frontEnd.userStatus') as $status)
                                            <option value="{{$status}}" @if(@$search->status == $status) selected @endif>{{$status}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Role</label>
                                <div class="col-sm-3">
                                    <select class="form-control m-b" name="searchRole">
                                        <option value="">--select role--</option>
                                        @foreach(config('app.frontEnd.userTypes') as $role)
                                            <option value="{{$role}}" @if(@$search->role == $role) selected @endif>{{$role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>

            		<div class="col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px">No</th>
                                    <th width="200px">Email</th>
                                    <th>Name</th>
                                    <th width="100px">Role</th>
                                    <th width="90px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $index => $user)
                                    <tr>
                                        <td class="text-center">{{ $users->perPage()*($users->currentPage()-1) + $index+1}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->types}}</td>
                                        <td>
                                            @if($user->status != 'active')
                                                <i data-toggle="tooltip" title="Approve" class="fa fa-check text-primary text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                                    <form action="{{action('Admin\UserController@changeStatus', $user->id)}}" method="POST" hidden>
                                                        <input name="status" value="active" hidden>
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                                </i>
                                            @else
                                                <i data-toggle="tooltip" title="Approve" class="fa fa-check text-primary"></i>
                                            @endif

                                            @if($user->status != 'banned')
                                                <i data-toggle="tooltip" title="Rejected" class="fa fa-repeat text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                                    <form action="{{action('Admin\UserController@changeStatus', $user->id)}}" method="POST" hidden>
                                                        <input name="status" value="banned" hidden>
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    </form>
                                                </i>
                                            @else
                                                <i data-toggle="tooltip" title="Rejected" class="fa fa-repeat"></i>
                                            @endif
                                             |
                                            <a data-toggle="tooltip" title="Edit" href="{{ action('Admin\UserController@edit', $user->id) }}" class="fa fa-pencil-square-o text-success">
                                            </a>
                                            <i data-toggle="tooltip" title="Delete" class="fa fa-trash text-danger" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                                <form action="{{action('Admin\UserController@destroy', $user->id)}}" method="POST" hidden>
                                                   <input type="hidden" name="_method" value="delete">
                                                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                </form>
                                            </i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}
            		</div>
            	</div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
@endsection

