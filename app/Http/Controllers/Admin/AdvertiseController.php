<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdsCatg;
use App\Advertise;
use Auth;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertises = Advertise::orderBy('created_at');
        $advertises = $advertises->paginate(config('app.admin.content.per_page'));

        return view('admin.advertise.index', [
            'advertises'   => $advertises,
            'adsCategories' => AdsCatg::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertise.insertupdate', [
            'adsCategories' => AdsCatg::all(),
        ]);
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
            'name'        => 'required|string|not_in:<script>|max:255',
            'link_url'    => 'string|url|required_with:https://',
            'status'      => 'required|string|not_in:<script>',
            'category_id' => 'required|integer',
            'image'       => 'required|image|mimes:' . config('app.admin.upload.image.mimes') . '|max:' . config('app.admin.upload.image.storage')
        ]);

        $advertise = new Advertise;
        $advertise->create($request->all());

        return redirect()->action('Admin\AdvertiseController@index');
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
        return view('admin.advertise.insertupdate', [
            'advertise' => Advertise::find($id),
            'adsCategories' => AdsCatg::all(),
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
        $this->validate($request, [
            'name'        => 'required|string|not_in:<script>|max:255',
            'link_url'    => 'string|url|required_with:https://',
            'status'      => 'required|string|not_in:<script>',
            'category_id' => 'required|integer',
        ]);
        $advertise = Advertise::find($id);
        $advertise->update($request->all());

        return redirect()->action('Admin\AdvertiseController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertise = Advertise::find($id);
        if ($advertise) $advertise->delete();
        return redirect()->action('Admin\AdvertiseController@index');
    }

    public function changeStatus($id, Request $request)
    {
        if(Auth::user()->types === 'admin'){
            $advertise = Advertise::find($id);
            if ($advertise)
                $advertise->update($request->all());

            return redirect()->action('Admin\AdvertiseController@index');
        }else{
            return redirect()->route('home');
        }
    }
}
