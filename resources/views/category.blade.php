@extends('layouts.app')

@section('content')

<div class="container bg-white">
    <div class="row">
        <div class="col-sm-8">
        	<div class="row">
        		<div class="col-sm-12">
        			<h3 class="text-uppercase">{{$category->name}}</h3>
        		</div>
                @foreach($category->contents as $content)
                    <div class="col-sm-6 content-cate">
                        <a href="{{route('content', $content->id)}}"><img src="{{ $content->image }}" class="img-responsive"></a>
                        <small>{{ $content->createTime }}</small>
                        <h4>{{$content->name}}</h4>
                            <p>{{$content->content}}</p>
                        <button class="btn btn-info"><small><i class="fa fa-facebook"></i> Facebook <span class="badge">23</span></small></button>
                        <button class="btn btn-info"><small><i class="fa fa-google-plus"></i> Google</small></button>
                        <button class="btn btn-info"><small><i class="fa fa-envelope"></i> Email</small></button>
                    </div>
                @endforeach

        		<div class="col-sm-12">
        			<nav class="text-center" style="padding-top: 50px;">
					  	<ul class="pagination">
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
						</ul>
					</nav>
        		</div>



        	</div>

        </div>
        <div class="col-sm-4" style="border-left: 1px solid #eee;">
        	<h3>FOLLOW US FACEBOOK</h3>
            <div class="fb-page"
            data-href="https://www.facebook.com/imdb"
            data-width="340"
            data-hide-cover="false"
            data-show-facepile="true"></div>

            <h3>ISSARA FASTIVAL</h3>
            <p>สงกรานต์</p>
            <p>สงกรานต์</p>
            <p>สงกรานต์</p>
            <p>สงกรานต์</p>
            <h3>OTHER LINk</h3>
            <p>link 1</p>
            <p>link 2</p>
            <p>link 3</p>
            <p>link 4</p>
            <p>link 5</p>
            <h3>SPONSERS</h3>
            <img src="{{ asset('image/slide4.jpg') }}" class="img-responsive" style="padding-bottom: 15px;">
            <img src="{{ asset('image/slide4.jpg') }}" class="img-responsive" style="padding-bottom: 15px;">
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
