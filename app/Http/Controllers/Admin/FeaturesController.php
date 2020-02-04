<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Features;
use App\Review;
use Carbon\Carbon;
use Session;
use Toastr;
use Auth;

class FeaturesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Features';
        $this->url = 'features';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Features::orderBy('id', 'desc')->get();
        $providers = Review::where('status', '1')->get();

        $title = $this->title;
        $url = $this->url;

        return view('admin.'.$url.'.index', compact('rows', 'providers', 'title', 'url'));
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
            'provider_id' => 'required',
        ]);

        // Insert Data
        $data = new Features;
        $data->provider_id = $request->provider_id;
        $data->uptime = $request->uptime;
        $data->speed = $request->speed;
        $data->support = $request->support;
        $data->data_center = $request->data_center;
        $data->cpanel = $request->cpanel;
        $data->database = $request->database;
        $data->backup = $request->backup;
        $data->migration = $request->migration;
        $data->site_transfer = $request->site_transfer;
        $data->security = $request->security;
        $data->guarantee = $request->guarantee;
        $data->pay_method = $request->pay_method;
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
            'provider_id' => 'required',
        ]);

        // Update Data
        $data = Features::find($id);
        $data->provider_id = $request->provider_id;
        $data->uptime = $request->uptime;
        $data->speed = $request->speed;
        $data->support = $request->support;
        $data->data_center = $request->data_center;
        $data->cpanel = $request->cpanel;
        $data->database = $request->database;
        $data->backup = $request->backup;
        $data->migration = $request->migration;
        $data->site_transfer = $request->site_transfer;
        $data->security = $request->security;
        $data->guarantee = $request->guarantee;
        $data->pay_method = $request->pay_method;
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
        $data = Features::find($id);
        $data->delete();

        Toastr::success($this->title.' Deleted Successfully!', 'success');

        return redirect()->back();
    }
}
