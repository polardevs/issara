@extends('layouts.app')

@section('content')

<div class="container container-content bg-white">
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
                @if(!$user)
                    <div class="col-sm-12" style="padding-bottom: 20px;">
                        <h3>Comments</h3>
                        <div class="row">
                            @foreach($content->comments as $comment)
                                <div class="col-sm-12 col-xs-12">
                                    <div class="commented">
                                        <div class="row arrow-up">
                                            <div class="col-sm-2 col-xs-4">
                                                <img src="{{ asset('image/user.jpeg') }}" class="img-responsive" style="border: 2px solid; border-radius: 6px;">
                                            </div>
                                            <div class="col-sm-10 col-xs-12">
                                                <h4>{{$comment->user->name}}</h4>
                                                <p id="{{'comment-' . $comment->id}}">{!! $comment->detail !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-sm-12" style="padding-bottom: 20px;">
                        <h3>Comments</h3>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{action('ContentController@store')}}" method="POST">
                                    {!! csrf_field() !!}
                                    <input name="user_id" value="{{$user->id}}" hidden />
                                    <input name="content_id" value="{{$content->id}}" hidden />
                                    <input name="category_id" value="{{$content->category->id}}" hidden />
                                    <textarea class="form-control" id="comment" name="detail" rows="3"></textarea>
                                    <input type="submit" id="addComment" class="btn btn-success btn-comment" value="comment" disabled>
                                </form>
                            </div>
                            @foreach($content->comments as $comment)
                                <div class="col-sm-12 col-xs-12">
                                    <div class="commented">
                                        <div class="row arrow-up">
                                            <div class="col-sm-2 col-xs-4">
                                                <img src="{{ asset('image/user.jpeg') }}" class="img-responsive" style="border: 2px solid; border-radius: 6px;">
                                            </div>
                                            <div class="col-xs-8 visible-xs">
                                                @if(Auth::user()->types === 'author' || Auth::user()->types === 'admin')
                                                    <i class="fa fa-ban text-danger pull-right" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                                        DELETE
                                                        <form action="{{action('Admin\CommentController@disableComment', $comment->id)}}" method="POST" hidden>
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </i>
                                                @endif

                                            </div>
                                            <div class="col-sm-10 col-xs-12">
                                                @if(Auth::user()->types === 'author' || Auth::user()->types === 'admin')
                                                    <i class="fa fa-ban text-danger pull-right hidden-xs" style="cursor:pointer;" onclick="$(this).find('form').submit();">
                                                        DELETE
                                                        <form action="{{action('Admin\CommentController@disableComment', $comment->id)}}" method="POST" hidden>
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </form>
                                                    </i>
                                                @endif
                                                <h4>{{$comment->user->name}}</h4>
                                                <p id="{{'comment-' . $comment->id}}">{!! $comment->detail !!}</p>
                                                <form action="{{action('ContentController@update', $comment->id)}}" method="POST" id="{{'form-editComment-' . $comment->id}}" hidden>
                                                    {!! method_field('put') !!}
                                                    {!! csrf_field() !!}
                                                    <input name="user_id" value="{{$user->id}}" hidden />
                                                    <input name="content_id" value="{{$comment->content_id}}" hidden />
                                                    <input name="category_id" value="{{$comment->category_id}}" hidden />
                                                    <textarea class="form-control" id="{{'editComment-' . $comment->id}}" commentID="{{$comment->id}}" name="detail" rows="3">{!! $comment->detail !!}</textarea>
                                                    <input type="button" class="btn btn-danger btn-comment" value="cancel" onclick="closeEdit({{$comment->id}})" style="margin-left: 15px;">
                                                    <input type="submit" id="{{'edit-' . $comment->id}}" class="btn btn-success btn-comment" value="submit" disabled>
                                                </form>
                                                @if(Auth::user()->id == $comment->user->id)
                                                    <button class="btn btn-default pull-right" id="editBtn-{{$comment->id}}" onclick="editComment({{$comment->id}})">
                                                        Edit
                                                    </button>
                                                @endif
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
    function commentNull(btnID)
    {
        return ($('#' + btnID).val())? false : true;
    }

    function editComment(commentID)
    {
        $('#comment-' + commentID).hide();
        $('#editBtn-' + commentID).hide();
        $('#form-editComment-' + commentID).show();
    }

    function closeEdit(commentID)
    {
        $('#comment-' + commentID).show();
        $('#editBtn-' + commentID).show();
        $('#form-editComment-' + commentID).hide();
    }

    $('#comment').keyup(function () {
        if(commentNull('comment')){
            $('#addComment').prop( "disabled", true );
        }else{
            $('#addComment').prop( "disabled", false );
        }
    });

    $('[id^=editComment-]').keyup(function () {
        if(commentNull('editComment-' + $(this).attr('commentID'))){
            $('#edit-' + $(this).attr('commentID')).prop( "disabled", true );
        }else{
            $('#edit-' + $(this).attr('commentID')).prop( "disabled", false );
        }
    })
</script>

@endsection
