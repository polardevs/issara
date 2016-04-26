<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use App\AdsCatg;
use Auth;

class ListContentController extends Controller
{
    public function searchContent(Request $request)
    {
        $contents = Content::where('name', 'like', '%' . spaceToLike($request->input('key_word')) . '%')
                        ->paginate(config('app.frontEnd.content.per_page'));

        return view('searchContent', [
            'adsCategories' => AdsCatg::all(),
            'category_menus' => Category::all(),
            'contents' => $contents,
            'keyword' => $request->input('key_word'),
            'user' => Auth::user(),
        ]);
    }
}
