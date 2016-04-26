@extends('layouts.app')

@section('content')

<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
        	<img src="{{ asset('image/detail1.jpg') }}" class="img-responsive center-block" style="max-width: 120px; padding-top:25px;">
        	<ul class="nav nav-tabs">
  				<li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
 				<li><a data-toggle="tab" href="#menu1">My topic</a></li>
 				<li><a href="{{ url('/admin') }}">Admin Page</a></li>
			</ul>

			<div class="tab-content">
  				<div id="home" class="tab-pane fade in active row">
  					<div class="form-group row">
  						<div class="col-xs-4 text-right">
  							Name :
  						</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<input type="text" name="Name" class="form-control" value="{{ $user->name }}">
	  					</div>
	  				</div>

	  				<!-- <div class="form-group row">
	  					<div class="col-xs-4 text-right">
	  						Surname :
	  					</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<input type="text" name="Name" class="form-control">
	  					</div>
	  				</div>

	  				<div class="form-group row">
	  					<div class="col-xs-4 text-right">
	  						Username :
	  					</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<input type="text" name="Name" class="form-control">
	  					</div>
	  				</div>

	  				<div class="form-group row">
	  					<div class="col-xs-4 text-right">
	  						Password :
	  					</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<input type="text" name="Name" class="form-control">
	  					</div>
	  				</div> -->

	  				<div class="form-group row">
	  					<div class="col-xs-4 text-right">
	  						E-mail :
	  					</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<input type="text" name="Name" class="form-control" value="{{ $user->email }}">
	  					</div>
	  				</div>

	  				<!-- <div class="form-group row">
	  					<div class="col-xs-4 text-right">
	  						Tel :
	  					</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<input type="text" name="Name" class="form-control">
	  					</div>
	  				</div>

	  				<div class="form-group row">
	  					<div class="col-xs-4 text-right">
	  						Address :
	  					</div>
	  					<div class="col-xs-6 col-sm-5">
	  						<textarea row="5" name="Name" class="form-control"></textarea>
	  					</div>
	  				</div>
	  				<div class="row">
	  					<div class="col-sm-12 text-center">
	  						<button class="btn btn-success">บันทึก</button>
							<button class="btn btn-danger"><a href="{{ url('') }}">ยกเลิก</a></button>
	  					</div>
	  				</div> -->

  				</div>
  				<div id="menu1" class="tab-pane fade table-responsive">
				    <table class="table table-bordered">
					    <thead>
					    	<tr>
						        <th>หัวข้อ</th>
						        <th>วันที่สร้าง</th>
						        <th>Lastest</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($user->topics as $topic)
					    		<tr>
							    	<td><a href="{{route('read_topic', $topic->id)}}">{{$topic->name}}</td>
							        <td>{{$topic->created_at->format('Y-m-d')}}</td>
							        <td>Nihaoman, 18-01-2016</td>
							    </tr>
					    	@endforeach
					    </tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=708835312562084";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@endsection
