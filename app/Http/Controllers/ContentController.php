<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use App\Topic;
use App\Comment;
use App\AdsCatg;
use Carbon\Carbon;
use Auth;

class ContentController extends Controller
{
    public function index($content_name)
    {
        $content = Content::find(id_from_name($content_name));
        $recommends = Content::where('id', '!=', $content->id)
                        ->where('recommend', 1)
                        ->take(config('app.frontEnd.content.recommend_show'))
                        ->get();
        if(count($recommends) === 0)
        {
            $recommends = Content::where('id', '!=', $content->id)
                            ->orderByRaw("RAND()")
                            ->take(config('app.frontEnd.content.recommend_show'))
                            ->get();
        }

        return view('detail', [
            'adsCategories' => AdsCatg::all(),
            'category_menus' => Category::all(),
            'content' => $content,
            'date' => new Carbon,
            'recomend_contents' => $recommends,
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['detail'] = delFontInline( delScriptTag($input['detail']) );

        $comment = Comment::create($input);
        $content = Content::find($comment->content_id);
        $topic = Topic::find($comment->content_id);

        if($content){
            return redirect( route('content', $content->link) );
        }elseif($topic){
            return redirect( route('read_topic', $topic->id) );
        }
    }
}
