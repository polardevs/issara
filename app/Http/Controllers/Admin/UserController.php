<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = (object) array();
        $users = User::orderBy('created_at');
        if($request->input('searchName') && $request->input('searchName') != '')
            $users->where('name', 'like', '%' . spaceToLike($request->input('searchName')) . '%');
            $search->name = $request->input('searchName');

        if($request->input('searchEmail') && $request->input('searchEmail') != '')
            $users->where('email', 'like', '%' . spaceToLike($request->input('searchEmail')) . '%');
            $search->email = $request->input('searchEmail');

        if($request->input('searchStatus') && $request->input('searchStatus') != '')
            $users->where('status', $request->input('searchStatus'));
            $search->sattus = $request->input('searchStatus');

        if($request->input('searchRole') && $request->input('searchRole') != '')
            $users->where('types', $request->input('searchRole'));
            $search->role = $request->input('searchRole');

        $users = $users->paginate(config('app.admin.content.per_page'))
                    ->appends([
                        'searchName' => $request->input('searchName'),
                        'searchEmail' => $request->input('searchEmail'),
                        'searchStatus' => $request->input('searchStatus'),
                        'searchRole' => $request->input('searchRole')
                    ]);

        return view('admin.member.index',[
            'search' => $search,
            'users'  => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.insertupdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'avatar'   => 'string|url',
            'status'   => 'required',
            'types'    => 'required',
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users'
        ]);

        $user = new User;
        $user->create($request->all());

        return redirect()->action('Admin\UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/member/insertupdate', [
            'user' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $emailUnique = $user->email == $request->input('email') ? '' : '|unique:users';
        $this->validate($request, [
            'avatar'   => 'string|url',
            'status'   => 'required',
            'types'    => 'required',
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255' . $emailUnique
        ]);

        $user->update($request->all());

        return redirect()->action('Admin\UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) $user->delete();
        return redirect()->action('Admin\UserController@index');
    }

    public function changeStatus($id, Request $request)
    {
        if(Auth::user()->types === 'admin'){
            $user = User::find($id);
            if ($user) $user->update($request->all());
            return redirect()->action('Admin\UserController@index');
        }else{
            return redirect()->route('home');
        }
    }
}
