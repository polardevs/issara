@extends('layouts.app')

@section('content')

<div class="container bg-white">
    <div class="row">
        <div class="col-sm-8">
        	<div class="row">
                <div class="col-sm-12" style="padding-top: 15px;">
                    <h3>{{$content->category->name}}</h3>
                    <hr>
                </div>

                <div class="col-sm-12">
                    <img src="{{ $content->image }}" class="img-responsive" style="padding-bottom: 20px;">
                    <h3>{{ $content->name }}</h3>
                    {!! $content->content !!}
                </div>

                <div class="col-sm-12">
                    <i class="fb-share-button" data-href="{{route('content', $content->link)}}" data-layout="button"></i>
                    <i class="g-plus" data-action="share" data-annotation="none" data-height="20"></i>
                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                </div>
                <div class="col-sm-12">
                    <h3>Recommend</h3>
                    <div class="row">
                        @foreach($recomend_contents as $reccomend)
                            <a href="{{route('content', $reccomend->link)}}">
                                <div class="col-sm-4">
                                    <img src="{{ $reccomend->image }}" class="img-responsive" style="padding-bottom: 20px;">
                                    <p>{{$reccomend->name}}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <hr>
                </div>
                @if($user)
                    <div class="col-sm-12" style="padding-bottom: 20px;">
                        <h3>Comments</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{route('content-comment')}}" method="POST">
                                    {!! csrf_field() !!}
                                    <input name="user_id" value="{{$user->id}}" hidden />
                                    <input name="content_id" value="{{$content->id}}" hidden />
                                    <input name="category_id" value="{{$content->category->id}}" hidden />
                                    <textarea class="form-control" id="comment" name="detail" rows="3"></textarea>
                                    <input type="submit" id="addComment" class="btn btn-success btn-comment" value="comment" disabled>
                                </form>
                            </div>
                            @foreach($content->comments as $comment)
                                <div class="col-sm-12">
                                    <div class="commented">
                                        <div class="row arrow-up">
                                            <div class="col-sm-2">
                                                <img src="{{ asset('image/user.jpeg') }}" class="img-responsive" style="border: 2px solid; border-radius: 6px;">
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>{{$comment->user->name}}</h4>
                                                <p>{!! $comment->detail !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-4" style="border-left: 1px solid #eee;">
            @include('rightmenu')
        </div>
    </div>
</div>



<script type="text/javascript">
    function commentNull()
    {
        return ($('#comment').val())? false : true;
    }

    $('#comment').keyup(function () {
        if(commentNull()){
            $('#addComment').prop( "disabled", true );
        }else{
            $('#addComment').prop( "disabled", false );
        }
    });
</script>

@endsection
