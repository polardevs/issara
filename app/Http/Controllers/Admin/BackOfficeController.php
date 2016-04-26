<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class BackOfficeController extends Controller
{
    public function profile()
    {
        return view('admin.profile.index', [
            'user' => Auth::user()
        ]);
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
