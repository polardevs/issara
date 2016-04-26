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
	        <h2>Content</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
	            <li class="active">
	                <strong>Content</strong>
	            </li>
	        </ol>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">

        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Content</h5>
                <div class="ibox-tools">
                    <a href="{{ action('Admin\ContentController@create') }}" class="collapse-link">
                    	<span class="label label-primary"><i class="fa fa-plus"></i></span>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <form action="{{action('Admin\ContentController@index')}}" method="get">
                        <div class="col-sm-12 form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Name</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="searchName" value="{{$search->name or old('searchName')}}">
                                </div>
                                <label class="col-sm-1 control-label">Category</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="searchCategory">
                                        <option value="">-- all category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if(@$search->category == $category->id) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-sm-1 control-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="searchStatus">
                                        <option value="">-- all status --</option>
                                        <?php $listStatus = ['approve', 'waiting', 'reject']; ?>
                                        @foreach($listStatus as $status)
                                            <option value="{{$status}}" @if(@$search->status == $status) selected @endif>{{$status}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">From</label>
                                <div class="col-sm-3">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" class="form-control" name="searchFrom" value="{{$search->from or old('searchFrom')}}">
                                    </div>
                                </div>
                                <label class="col-sm-1 control-label">To</label>
                                <div class="col-sm-3">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" class="form-control" name="searchTo" value="{{$search->to or old('searchTo')}}">
                                    </div>
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <input type="submit" class="btn btn-primary btn-block" value="Search">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-bordered">
				    <thead>
				    	<tr>
				    		<th width="20px">No</th>
					        <th>หัวข้อ</th>
					        <th width="150px">Category</th>
					        <th width="100px">User</th>
					        <th width="90px">Update</th>
					        <th width="100px"></th>
				      	</tr>
				    </thead>
				    <tbody>
                        @foreach($contents as $index => $content)
                          <tr>
                            <td class="text-center">{{ $contents->perPage()*($contents->currentPage()-1) + $index+1}}</td>
                            <td>{{ $content->name }}</td>
                            <td>{{ $content->category->name }}</td>
                            <td>{{ $content->user->name }}</td>
                            <td>{{ $content->created_at->format('Y-m-d') }}</td>
                            <td>
                                @if($content->status != 'approve')
                                    <i data-toggle="tooltip" title="Approve" class="fa fa-check text-primary text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                        <form action="{{action('Admin\ContentController@changeStatus', $content->id)}}" method="POST" hidden>
                                            <input name="status" value="approve" hidden>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </i>
                                @else
                                    <i data-toggle="tooltip" title="Approve" class="fa fa-check text-primary"></i>
                                @endif

                                @if($content->status != 'waiting')
                                    <i data-toggle="tooltip" title="Waiting For Approval" class="fa fa-clock-o text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                        <form action="{{action('Admin\ContentController@changeStatus', $content->id)}}" method="POST" hidden>
                                            <input name="status" value="waiting" hidden>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </i>
                                @else
                                    <i data-toggle="tooltip" title="Waiting For Approval" class="fa fa-clock-o"></i>
                                @endif

                                @if($content->status != 'reject')
                                    <i data-toggle="tooltip" title="Rejected" class="fa fa-repeat text-muted" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                        <form action="{{action('Admin\ContentController@changeStatus', $content->id)}}" method="POST" hidden>
                                            <input name="status" value="reject" hidden>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </form>
                                    </i> |
                                @else
                                    <i data-toggle="tooltip" title="Rejected" class="fa fa-repeat"></i> |
                                @endif
                                <a data-toggle="tooltip" title="Edit" href="{{ action('Admin\ContentController@edit', $content->id) }}" class="fa fa-pencil-square-o text-success">
                                </a>
                                <i data-toggle="tooltip" title="Delete" class="fa fa-trash text-danger" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                    <form action="{{action('Admin\ContentController@destroy', $content->id)}}" method="POST" hidden>
                                       <input type="hidden" name="_method" value="delete">
                                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </form>
                                </i>
                            </td>
                          </tr>
                        @endforeach
				    </tbody>
				</table>
                {!! $contents->links() !!}
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
@endsection

