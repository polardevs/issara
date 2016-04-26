<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use App\AdsCatg;
use Auth;

class CategoryController extends Controller
{
    public function index($category_name)
    {
        $category_id = Category::where('name', $category_name)->first()->id;
        $contents = Content::where('category_id', $category_id)
                        ->where('status', 'approve')
                        ->paginate(config('app.frontEnd.content.per_page'));
        return view('category', [
            'adsCategories' => AdsCatg::all(),
            'category_menus' => Category::all(),
            'contents' => $contents,
            'user' => Auth::user(),
        ]);
    }
}
