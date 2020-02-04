<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ArticleCategory;
use Carbon\Carbon;
use Session;
use Toastr;
use Image;
use File;
use Auth;
use DB;

class ArticleCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Article Page';
        $this->url = 'article-category';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = ArticleCategory::orderBy('id', 'desc')->get();

        $title = $this->title;
        $url = $this->url;

        return view('admin.'.$url.'.index', compact('rows', 'title', 'url'));
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
        // Field Validation
        $request->validate([
            'title' => 'required|max:150|unique:reviews,title',
        ]);

        // Insert Data
        $data = new ArticleCategory;
        $data->title = $request->title;
        $data->slug = str_slug($request->title, '-');
        $data->description = $request->details;
        $data->order = $request->order;
        $data->meta_keyword = $request->meta_keyword;
        $data->meta_desc = $request->meta_desc;
        $data->status = 1;
        $data->created_by = Auth::user()->id;
        $data->save();


        Toastr::success($this->title.' Created Successfully!', 'success');

        return redirect()->back();
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
        // Field Validation
        $request->validate([
            'title' => 'required|max:150|unique:reviews,title,'.$id,
        ]);

        // Update Data
        $data = ArticleCategory::find($id);
        $data->title = $request->title;
        $data->slug = str_slug($request->title, '-');
        $data->description = $request->details;
        $data->order = $request->order;
        $data->meta_keyword = $request->meta_keyword;
        $data->meta_desc = $request->meta_desc;
        $data->status = $request->status;
        $data->updated_by = Auth::user()->id;
        $data->save();


        Toastr::success($this->title.' Updated Successfully!', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Data
        $data = ArticleCategory::find($id);
        $data->delete();

        Toastr::success($this->title.' Deleted Successfully!', 'success');

        return redirect()->back();
    }
}
