@extends('layouts.app')

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-8" style="margin-top: 20px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox" style="max-height:320px;">
                    <div class="item active">
                        <img src="{{ asset('image/slide1.jpg') }}" alt="Chania" >
                    </div>

                      <div class="item">
                        <img src="{{ asset('image/slide2.jpg') }}" alt="Chania" >
                      </div>

                      <div class="item">
                        <img src="{{ asset('image/slide3.jpg') }}" alt="Flower" >
                      </div>

                      <div class="item">
                        <img src="{{ asset('image/slide4.jpg') }}" alt="Flower" >
                      </div>
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
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-sm-6" style="padding-bottom: 30px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="text-uppercase">{{$category->name}}</h3>
                                <img src="{{ $category->contents->first()->image }}" class="img-responsive">
                                <p style="padding-top: 10px;">{{ $category->contents->first()->content }}</p>
                            </div>
                            <div class="col-xs-4">
                                <a href="{{route('content', $category->contents->first()->id)}}"><span class="btn btn-default read-more">READ MORE</span></a>
                            </div>
                            <div class="col-xs-8 share-bar">
                                <small>
                                    <i class="fa fa-comment-o"></i> 50
                                    <i class="fa fa-heart-o"></i> 50
                                    <i class="fa fa-share-alt"></i>
                                </small>
                            </div>
                            <div class="col-xs-12">
                                <span class="btn btn-primary" style="margin-top: 10px; padding:6px 15px; border: none;"><small>MORE STORIES</small></span>
                            </div>
                        </div>
                    </div>
                @endforeach
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




@endsection
