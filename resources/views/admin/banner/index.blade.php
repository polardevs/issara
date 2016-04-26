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
	        <h2>Banner</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
	            <li class="active">
	                <strong>Banner</strong>
	            </li>
	        </ol>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Banner</h5>    
                <div class="ibox-tools">
                    <a href="{{ url('admin/banner/insert') }}" class="collapse-link">
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
                            <label class="col-sm-1 control-label">Content</label>
                            <div class="col-sm-3"><input type="text" class="form-control"></div>
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
                                    <th width="250px">Image</th>
                                    <th>Content</th>
                                    <th width="50px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>img</td>
                                    <td>content</td>
                                    <td>
                                        <i class="fa fa-check hidden"></i>
                                        <i class="fa fa-times hidden"></i>
                                         
                                        <i data-toggle="tooltip" title="Edit" class="fa fa-pencil-square-o text-success"></i>
                                        <i data-toggle="tooltip" title="Delete Public" class="fa fa-trash text-danger"></i>
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

