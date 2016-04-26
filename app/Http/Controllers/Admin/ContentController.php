<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use Carbon\Carbon;
use Auth;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = (object) array();
        $search->from     = $request->input('searchFrom') ? $request->input('searchFrom') : Carbon::today()->subMonth()->format('Y-m-d');
        $search->to       = $request->input('searchTo') ? $request->input('searchTo') : Carbon::today()->addMonth()->format('Y-m-d');
        if($request->input('searchName') && $request->input('searchName') != '') $search->name = $request->input('searchName');
        if($request->input('searchCategory')  && $request->input('searchCategory') != '') $search->category = $request->input('searchCategory');
        if($request->input('searchStatus')  && $request->input('searchStatus') != '') $search->status = $request->input('searchStatus');

        $contents = Content::orderBy('created_at');
        if(Auth::user()->types === 'author') $contents->where('user_id', Auth::user()->id);
        if(isset($search->name))             $contents->where('name', 'like', '%' . spaceToLike($search->name) . '%');
        if(isset($search->category))         $contents->where('category_id', $search->category);
        if(isset($search->status))           $contents->where('status', $search->status);
        if(isset($search->from) && isset($search->to)){
            $contents->where('created_at', '>=', $search->from);
            $contents->where('created_at', '<=', $search->to);
        }
        $contents = $contents->paginate(config('app.admin.content.per_page'))
                        ->appends([
                            'searchName' => $request->input('searchName'),
                            'searchCategory' => $request->input('searchCategory'),
                            'searchStatus' => $request->input('searchStatus'),
                            'searchFrom' => $request->input('searchFrom'),
                            'searchTo' => $request->input('searchTo')
                        ]);

        return view('admin/content', [
            'search'     => $search,
            'contents'   => $contents,
            'categories' => Category::all()->sortBy('order')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/content/insertupdate', [
            'categories' => Category::all()
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
            'link_url'    => 'string|url|required_with_all:https://www.youtube.com/watch?v=',
            'short_desc'  => 'required|string|not_in:<script>',
            'status'      => 'required|string|not_in:<script>',
            'category_id' => 'required|integer',
            'content'     => 'required|string|not_in:<script>',
            'image'       => 'required|image|mimes:' . config('app.admin.upload.image.mimes') . '|max:' . config('app.admin.upload.image.storage')
        ]);

        $content = new Content;
        $content->create($request->all());

        return redirect()->action('Admin\ContentController@index');
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
        return view('admin/content/insertupdate', [
            'content' => Content::find($id),
            'categories' => Category::all()
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
            'link_url'    => 'string|url|required_with:https://www.youtube.com/watch?v=',
            'short_desc'  => 'required|string|not_in:<script>',
            'status'      => 'required|string|not_in:<script>',
            'category_id' => 'required|integer',
            'content'     => 'required|string|not_in:<script>'
        ]);
        $content = Content::find($id);
        $content->update($request->all());

        return redirect()->action('Admin\ContentController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        if ($content) $content->delete();
        return redirect()->action('Admin\ContentController@index');
    }

    public function changeStatus($id, Request $request)
    {
        if(Auth::user()->types === 'admin'){
            $content = Content::find($id);
            if ($content) $content->update($request->all());
            return redirect()->action('Admin\ContentController@index');
        }else{
            return redirect()->route('home');
        }
    }
}
