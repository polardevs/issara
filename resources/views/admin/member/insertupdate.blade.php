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
                    <a href="{{ url('/admin/member') }}">Member</a>
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
                <h5>Member</h5>    
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="account">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Permission</label>

                            <div class="col-sm-10">
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Category</label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Content</label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Advertise</label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Advertise Manager</label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Webboard</label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Member</label>
                                </div>
                                <div class="checkbox checkbox-info checkbox-circle">
                                    <input id="checkbox8" type="checkbox" >
                                    <label for="checkbox8">Comment</label>
                                </div>

                            </div>
                        </div>

                        
                    </div>
                    <div class="col-sm-6 form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Surname</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <i data-toggle="tooltip" title="Status Public"class="fa fa-check text-primary"></i>
                                <i data-toggle="tooltip" title="Status Private"class="fa fa-times text-muted"></i>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group text-right">
                            <button class="btn btn-white" type="submit">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')      
</div>
@endsection

