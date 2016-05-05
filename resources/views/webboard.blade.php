@extends('layouts.app')

@section('content')

<div class="container container-content bg-white">
	<h3 class="inline-block">{{ $latestTopic or $channels->find($selected_channel)->name }}</h3>
	<div class="btn btn-success inline-block pull-right margin-t20"><a href="{{ route('new_topic') }}">สร้างกระทู้ใหม่</a></div>
	<hr>
    <div class="row">
        @if($topics->count() > 0)
            @foreach($topics as $topic)
                <div class="col-sm-12 b-topic">
                    <a href="{{route('read_topic', ['topic_id' => $topic->id])}}">
                        <div class="h-topic">{{$topic->name}}</div>
                        <div class="c-topic">
                            {!! $topic->content !!}
                        </div>
                    </a>
                    <div class="f-topic">
                        <i class="fa fa-thumbs-o-up"></i> 52 <i class="fa fa-comment-o"></i> 5
                    </div>
                    <div class="f-topic pull-right">
                        {{$topic->createTime}} By {{$topic->user->name}}
                    </div>
                    <hr>
                </div>
            @endforeach
        @else
            <div class="col-sm-12 b-topic">
                <h3 class="text-center">don't have topic</h3>
            </div>
        @endif
    </div>
    <nav class="pull-right">
        {!! $topics->links() !!}
	  	<!-- <ul class="pagination pull-right">
		    <li>
		      	<a href="#" aria-label="Previous">
		        	<span aria-hidden="true">&laquo;</span>
		      	</a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
			    <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			    </a>
		    </li>
	  	</ul> -->
	</nav>
</div>

@endsection
