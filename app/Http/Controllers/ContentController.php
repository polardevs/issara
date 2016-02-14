<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use Carbon\Carbon;

class ContentController extends Controller
{
    public function index($content_id)
    {
        $categories = Category::all();
        $content = Content::find($content_id);
        $carbon = new Carbon;
        // $carbon = Carbon::now('Asia/Bangkok');
        return view('detail', [
            'category_menus' => $categories,
            'content' => $content,
            'date' => $carbon
        ]);
    }
}
