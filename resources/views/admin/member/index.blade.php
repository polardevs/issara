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
                    <a href="{{ url('admin/member/insert') }}" class="collapse-link">
                        <span class="label label-primary"><i class="fa fa-plus"></i></span>
                    </a>
                </div>                
            </div>
            <div class="ibox-content">
            	<div class="row">
                    <div class="col-sm-12 form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Name</label>
                            <div class="col-sm-3"><input type="text" class="form-control"></div>
                            <label class="col-sm-1 control-label">Email</label>
                            <div class="col-sm-3"><input type="text" class="form-control"></div>
                            <label class="col-sm-1 control-label">Status</label>
                            <div class="col-sm-3"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Role</label>
                            <div class="col-sm-3">
                                <select class="form-control m-b" name="account">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                            <div class="col-sm-3 pull-right">
                                <span data-toggle="modal" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</span>
                            </div>
                        </div>
                    </div>

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
                                
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>email@mail.com</td>
                                    <td>name lastname</td>
                                    <td>member</td>
                                    <td>
                                        <i data-toggle="tooltip" title="Status Public"class="fa fa-check text-primary"></i>
                                        <i data-toggle="tooltip" title="Status Private"class="fa fa-times text-muted"></i>
                                         |
                                        <i data-toggle="tooltip" title="Edit"class="fa fa-pencil-square-o text-success"></i>
                                        <i data-toggle="tooltip" title="Delete"class="fa fa-trash text-danger"></i>
                                    </td>
                                  </tr>
                                
                            </tbody>
                        </table>
            		</div>
            	</div>
            </div>
        </div>
    </div>
    @include('admin.footer')      
</div>
@endsection

