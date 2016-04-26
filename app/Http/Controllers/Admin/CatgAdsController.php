<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdsCatg;

class CatgAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword')? $request->input('keyword') : '';
        $adsCatgs = [];
        if($request->input('keyword'))
        {
            $adsCatgs = AdsCatg::where('name', 'LIKE', '%' . spaceToLike($request->input('keyword')) . '%')->orderBy('order')->get();
        }
        else
        {
            $adsCatgs = AdsCatg::orderBy('order')->get();
        }

        return view('admin.category.advertise', [
            'adsCatgs' => $adsCatgs,
            'keyword' => $keyword
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        ]);

        AdsCatg::create($request->all());
        return redirect()->action('Admin\CatgAdsController@index');
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
        //
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
            'order' => 'required|integer',
        ]);

        $category = AdsCatg::find($id);
        $orderOld = $category->order;
        $orderNew = $request->input('order');
        $orderGap = $orderOld - $orderNew;
        $orderGen = 0;

        if($request->input('name') && $category) $category->update($request->all());

        if($orderGap < 0)
        {
            $orderGen = -1;
            $categories = AdsCatg::whereBetween('order', [$orderOld, $orderNew])->where('id', '!=', $category->id)->get();
            foreach($categories as $catg)
            {
                $catg->update(['order' => ($catg->order + $orderGen)]);
            }
        }
        elseif($orderGap > 0)
        {
            $orderGen = 1;
            $categories = AdsCatg::whereBetween('order', [$orderNew, $orderOld])->where('id', '!=', $category->id)->get();
            foreach($categories as $catg)
            {
                $catg->update(['order' => ($catg->order + $orderGen)]);
            }
        }

        return redirect()->action('Admin\CatgAdsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catg = AdsCatg::find($id);
        if ($catg) $catg->delete();
        return redirect()->action('Admin\CatgAdsController@index');
    }
}
