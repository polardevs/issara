<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index($category_name)
    {
        $categories = Category::all();
        $carbon = new Carbon;
        // $carbon = Carbon::now('Asia/Bangkok');
        return view('category', [
            'category_menus' => $categories,
            'category' => $categories->where('name', $category_name)->first(),
            'date' => $carbon
        ]);
    }
}
