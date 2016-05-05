@extends('layouts.app')

@section('content')
<script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        menubar: false,
        plugins: [
            'link image',

        ]
    });
</script>

<div class="container container-content bg-white">
    <div class="cate-topic">
        <p><a href="{{ route('webboard', $topic->channel->id) }}">{{$topic->channel->name}}</a></p>
        <hr>
    </div>
    <h3>{{$topic->name}}</h3>
    <div class="row">
        <div class="col-sm-12 b-topic">
            {!! $topic->content !!}
            <div class="profile">
                <img src="http://f.ptcdn.info/284/040/000/o2w2kthx5j5TUo5Z3ji-o.jpg" height="50px;">
                <small>
                    18-01-2016 By Kyushu <i class="fa fa-thumbs-o-up like"></i>
                </small>
                <span class="label label-default"><i class="fa fa-trash"></i> แจ้งลบ</span>

            </div>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-sm-12">
            @foreach($topic->comments as $index => $comment)
                <div class="co-topic" id="comment{{$index+1}}">
                    <h4>ความคิดเห็นที่ {{$index+1}}</h4>
                    <p>{!! $comment->detail !!}</p>
                    <div class=" profile">
                        <img src="http://f.ptcdn.info/284/040/000/o2w2kthx5j5TUo5Z3ji-o.jpg" height="50px;">
                        <small>{{$comment->createTime}} By {{$comment->user->name}}</small>
                        <span class="label label-default"><i class="fa fa-trash"></i> แจ้งลบ</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
    <h3>Comment</h3>
    <div class="row">
        <form action="{{route('webboard-comment')}}" method="POST">
            {!! csrf_field() !!}
            <input name="user_id" value="{{$user->id}}" hidden />
            <input name="content_id" value="{{$topic->id}}" hidden />
            <input name="category_id" value="{{$topic->channel->id}}" hidden />
            <div class="col-sm-12">
                <textarea id="myTextarea" name="detail"></textarea>
            </div>
            <div class="col-sm-12 text-right" style="padding: 20px; 0">
                <input type="submit" id="addComment" class="btn btn-success btn-comment" value="comment">
            </div>
        </form>
    </div>

</div>

@endsection
