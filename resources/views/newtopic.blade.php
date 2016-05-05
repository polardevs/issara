@extends('layouts.app')

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

<div class="container container-content bg-white">
	<h3>สร้างกระทู้ใหม่</h3>
	<hr>
	<form class="form-horizontal" method="POST" action="{{ route('create_topic') }}">
		{!! csrf_field() !!}

		<div class="form-group row">
			<div class="col-xs-2 text-right">
				ห้องสนทนา :
			</div>
			<div class="col-xs-8">
				<select name="category_id" class="form-control">
					@foreach(@$channels as $channel)
						<option value="{{$channel->id}}" @if(old('category_id') == $channel->id) {{'selected'}} @endif>{{$channel->name}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-xs-2 text-right">
				ชื่อห้วข้อ :
			</div>
			<div class="col-xs-8">
					<input type="text" name="name" class="form-control" value="{{old('name')}}">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-xs-2 text-right">
				เนื้อหา :
			</div>
			<div class="col-xs-8">
	    		<textarea id="myTextarea" name="content"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center" style="padding-bottom:20px;">
				<button class="btn btn-success">ตั้งกระทู้</button>
				<button class="btn btn-danger"><a href="{{ url('/webboard') }}">ยกเลิก</a></button>
			</div>
		</div>
	</form>
</div>


@endsection
