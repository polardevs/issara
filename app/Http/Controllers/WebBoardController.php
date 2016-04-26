<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TopicRequest;
use App\Http\Controllers\Controller;

use App\Channel;
use App\Topic;
use Auth;

class WebBoardController extends Controller
{
    public function index($channelNameID)
    {
        $channel_id = id_from_name($channelNameID);
        return view('webboard', [
            'selected_channel' => $channel_id,
            'channels' => Channel::all(),
            'user' => Auth::user(),
            'topics' => Topic::where('category_id', id_from_name($channel_id))->paginate(config('app.frontEnd.topic.per_page'))
        ]);
    }

    public function newTopic()
    {
        return view('newtopic', [
            'channels' => Channel::all(),
            'user' => Auth::user()
        ]);
    }

    public function store(TopicRequest $request)
    {
        $topic = new Topic;
        $topic->create($request->all());

        return redirect()->action('WebBoardController@allChannel');
    }

    public function detail($topic_id)
    {
        $topic = Topic::find($topic_id);
        if(!$topic) return redirect()->guest('');
        return view('webboarddetail', [
            'topic' => $topic,
            'channels' => Channel::all(),
            'user' => Auth::user()
        ]);
    }

    public function allChannel()
    {
        return view('webboard',[
            'latestTopic' => 'latest topic',
            'topics' => Topic::orderBy('created_at')->paginate(config('app.frontEnd.topic.per_page')),
            'channels' => Channel::all(),
            'user' => Auth::user()
        ]);
    }
}
