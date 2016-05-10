@extends('layouts.app')

@section('content')
<div class="container container-content bg-white">
    <div class="row">
        <div class="col-sm-8" style="margin-top: 20px;">
            @if($banners->count())
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($banners as $index => $banner)
                            <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox" style="max-height:320px;">
                        @foreach($banners as $index => $banner)
                            <div class="item {{$index == 0 ? 'active' : ''}}">
                                <img src="{{ $banner->image }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif
            <div class="row">
                @foreach($categories as $category)
                    @if($category->contents->count())
                    <div class="col-sm-6" style="padding-bottom: 30px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="text-uppercase">{{$category->name}}</h3>
                                <img src="{{ $category->contents->first()->image }}" class="img-responsive">
                                <p class="article">{{ $category->contents->first()->name }}</p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="{{route('content', $category->contents->first()->link)}}">
                                    <span class="btn btn-default read-more">READ MORE</span>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-8 share-bar">
                                <i class="fa fa-comment-o"></i> <span>{{$category->comments->count()}}</span>
                                <i class="fa fa-heart-o"></i> <span>{{$category->likes->count()}}</span>
                                <i class="fb-share-button" data-href="{{route('content', $category->contents->first()->link)}}" data-layout="button"></i>
                                <i class="g-plus" data-action="share" data-annotation="none" data-height="20"></i>
                                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                            </div>
                            <div class="col-xs-12">
                                <a href="{{route('category', $category->name)}}">
                                <span class="btn btn-primary more-stories" style="margin-top: 10px; padding:6px 15px; border: none;">
                                    <small>MORE STORIES</small>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-sm-4" style="border-left: 1px solid #eee;">
            @include('rightmenu')
        </div>
    </div>
</div>




@endsection
