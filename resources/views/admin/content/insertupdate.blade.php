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
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 330px;">
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
	                <a href="{{ action('Admin\BackOfficeController@index') }}">Home</a>
	            </li>
	            <li class="active">
	                <a href="{{ action('Admin\ContentController@index') }}">Content</a>

	            </li>
	            <li class="active">
	                <strong>{{ @$content? 'Edit' : 'Create'}}</strong>
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
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="{{ (@$content)? action('Admin\ContentController@update', $content->id) : action('Admin\ContentController@store') }}" enctype="multipart/form-data">
                    @if(@$content) {!! method_field('put') !!} @endif
                    {!! csrf_field() !!}
                	<div class="ibox float-e-margins">
    	                <div class="ibox-title">
    	                    <h5>Title</h5>
    	                </div>
    	                <div class="ibox-content">
    	                	<div class="row">
    		                	<div class="col-sm-8">
    		                		<div class="form-group">
    		                			<div class="row">
    									    <label class="col-sm-2">Title</label>
    									    <div class="col-sm-10">
    									    	<input type="text" class="form-control" name="name" value="{{$content->name or old('name')}}">
    									    </div>
    									</div>
    							  	</div>

    							  	<div class="form-group">
    		                			<div class="row">
    									    <label class="col-sm-2">Image</label>
    									    <div class="col-sm-10">
                                                {{$content->image or ''}}
                                                <input type="file" class="form-control" name="image">
    									    </div>
    									</div>
    							  	</div>

    							  	<div class="form-group">
    		                			<div class="row">
    									    <label class="col-sm-2">Video</label>
    									    <div class="col-sm-10">
    									    	<input type="text" class="form-control" name="video_url" value="{{$content->video_url or old('video_url')}}">
    									    </div>
    									</div>
    							  	</div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2">Short Description</label>
                                            <div class="col-sm-10">
                                                <textarea rows="4" cols="84" name="short_desc">{{$content->short_desc or old('short_desc')}}</textarea>
                                            </div>
                                        </div>
                                    </div>

    		                	</div>
    		                	<div class="col-sm-4" style="border-left: 1px solid #e7eaec;">
    		                		<div class="form-group">
    		                			<div class="row">
    									    <label class="col-sm-3">Status</label>
    									    <div class="col-sm-9">
                                                <select class="form-control" name="status">
                                                    <?php $listStatus = ['approve', 'waiting', 'reject']; ?>
                                                    @foreach($listStatus as $index => $status)
                                                        @if(isset($content))
                                                            <option value="{{$status}}" @if($content->status == $status) selected @endif>{{$status}}</option>
                                                        @else
                                                            <option value="{{$status}}" @if($index == 1) selected @endif>{{$status}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
    									    </div>
    									</div>
    							  	</div>

    							  	<div class="form-group">
    		                			<div class="row">
    									    <label class="col-sm-3">Category</label>
    									    <div class="col-sm-9">
    									    	<select class="form-control" name="category_id">
    									    		@foreach($categories as $category)
                                                        <option value="{{$category->id}}" {{(@$content->category_id === $category->id || old('category_id') == $category->id)? 'selected' : ''}}>
                                                            {{$category->name}}
                                                        </option>
                                                    @endforeach
    									    	</select>
    									    </div>
    									</div>
    							  	</div>

                                    {{--
    							  	<div class="form-group">
    		                			<div class="row">
    									    <label class="col-sm-3">Tag</label>
    									    <div class="col-sm-9	">
    									    	<input type="text" class="form-control">
    									    </div>
    									</div>
    							  	</div>
                                    --}}
    		                	</div>

    		                </div>
    		            </div>

                	</div>

                	<div class="ibox float-e-margins">
    	                <div class="ibox-title">
    	                    <h5>Detail</h5>
    	                </div>
    	                <div class="ibox-content">
    	                	<div class="row">
    		                	<div class="col-sm-12">
    								<textarea id="myTextarea" name="content">{{$content->content or old('content')}}</textarea>
    		                	</div>
    		                	<div class="col-sm-12 text-right" style="padding-top:20px;">
    		                		<button class="btn btn-primary" type="submit">ยืนยัน</button>
    								<button class="btn btn-white"><a href="{{ action('Admin\ContentController@index') }}">ยกเลิก</a></button>
    		                	</div>
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
