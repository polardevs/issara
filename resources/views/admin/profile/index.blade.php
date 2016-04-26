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
	        <h2>Profile</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('/admin') }}">Home</a>
	            </li>
	            <li class="active">
	                <strong>Profile</strong>
	            </li>
	        </ol>
	    </div>

	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Profile</h5>
            </div>
            <div class="ibox-content">
            	<div class="row">
            		<div class="col-sm-12">
            			<img class="profile-img center-block" src="{{ url('/image/user.jpeg') }}" alt="">
            		</div>

                    <div class="col-sm-8 col-sm-offset-2 form-horizontal profile-file">
	                    <div class="input-group">
	                		<input type="text" class="form-control" readonly="">
			                <span class="input-group-btn">
			                    <span class="btn btn-primary btn-file">
			                        Browse… <input type="file" multiple="">
			                    </span>
			                </span>
	            		</div>
	            	</div>


            	</div>
            	<div class="row">
            		<div class="col-sm-12 form-horizontal">
            			<div class="form-group">
            				<label class="col-sm-2 control-label">Name</label>
							<div class="col-sm-8"><input type="text" class="form-control" value="{{ $user->name }}"></div>
                        </div>
                        <div class="form-group">
            				<label class="col-sm-2 control-label">E-mail</label>
							<div class="col-sm-8"><input type="text" class="form-control" value="{{ $user->email }}"></div>
                        </div>
                        {{--
                        <div class="form-group">
            				<label class="col-sm-2 control-label">Password</label>
							<div class="col-sm-8"><input type="Password" class="form-control" value="{{ $user->password }}"></div>
                        </div>
                        --}}
                        <div class="form-group text-right">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
<script>
	$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
});
</script>
@endsection

