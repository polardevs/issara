<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('order');
        $banners = $banners->paginate(config('app.admin.content.per_page'));

        return view('admin.banner.index', [
            'banners'   => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.insertupdate');
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
            'content'     => 'required|string|not_in:<script>',
            'image'       => 'required|image|mimes:' . config('app.admin.upload.image.mimes') . '|max:' . config('app.admin.upload.image.storage')
        ]);

        $banner = new Banner;
        $banner->create($request->all());

        return redirect()->action('Admin\BannerController@index');
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
        return view('admin.banner.insertupdate', [
            'banner' => Banner::find($id)
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
            'content'     => 'required|string|not_in:<script>',
            'order'       => 'required|integer',
        ]);

        $banner = Banner::find($id);
        $orderOld = $banner->order;
        $orderNew = $request->input('order');
        $orderGap = $orderOld - $orderNew;
        $orderGen = 0;

        $banner->update($request->all());

        if($orderGap < 0)
        {
            $orderGen = -1;
            $banners = Banner::whereBetween('order', [$orderOld, $orderNew])->where('id', '!=', $banner->id)->get();
            foreach($banners as $thisBanner)
            {
                $thisBanner->update(['order' => ($thisBanner->order + $orderGen)]);
            }
        }
        elseif($orderGap > 0)
        {
            $orderGen = 1;
            $banners = Banner::whereBetween('order', [$orderNew, $orderOld])->where('id', '!=', $banner->id)->get();
            foreach($banners as $thisBanner)
            {
                $thisBanner->update(['order' => ($thisBanner->order + $orderGen)]);
            }
        }

        return redirect()->action('Admin\BannerController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if ($banner) $banner->delete();
        return redirect()->action('Admin\BannerController@index');
    }

    public function changeStatus($id, Request $request)
    {
        if(Auth::user()->types === 'admin'){
            $banner = Banner::find($id);
            if ($banner)
                $banner->update($request->all());

            return redirect()->action('Admin\BannerController@index');
        }else{
            return redirect()->route('home');
        }
    }
}
