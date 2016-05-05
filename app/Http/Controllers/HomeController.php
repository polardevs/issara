<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\AdsCatg;
use App\Banner;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('index', [
            'banners' => Banner::orderBy('order')->get(),
            'adsCategories' => AdsCatg::all(),
            'category_menus' => $categories,
            'categories' => $categories,
            'user' => Auth::user()
        ]);
    }

    public function profile()
    {
        $user = Auth::user();
        if(!$user) return redirect()->guest('login');
        return view('profile', [
            'category_menus' => Category::all(),
            'user' => $user
        ]);
    }
}
