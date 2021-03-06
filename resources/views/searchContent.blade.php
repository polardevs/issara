@extends('layouts.app')

@section('content')
<div id="fb-root"></div>
<div class="container container-content  bg-white">
    <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-12">
              <h3 class="text-uppercase">Search: {{$keyword}}</h3>
            </div>
                @foreach($contents as $content)
                    <div class="col-sm-6 content-cate">
                        <a href="{{route('content', $content->link)}}"><img src="{{ $content->image }}" class="img-responsive"></a>
                        <small>{{ $content->createTime }}</small>
                        <a href="{{route('content', $content->link)}}">
                            <h4>{{$content->name}}</h4>
                        </a>
                        <div class="desc-content">{!!$content->short_desc!!}</div>
                        <div class="share-bar">
                            <i class="fa fa-comment-o"></i> <span>{{$content->comments->count()}}</span>
                            <i class="fa fa-heart-o"></i> <span>{{$content->likes->count()}}</span>
                            <i class="fb-share-button" data-href="{{route('content', $content->link)}}" data-layout="button"></i>
                            <i class="g-plus" data-action="share" data-annotation="none" data-height="20"></i>
                            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        </div>
                    </div>
                @endforeach

            <div class="col-sm-12">
              <nav class="text-center" style="padding-top: 50px;">
                        {{ $contents->links() }}
          </nav>
            </div>



          </div>

        </div>
        <div class="col-sm-4" style="border-left: 1px solid #eee;">
          @include('rightmenu')
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
