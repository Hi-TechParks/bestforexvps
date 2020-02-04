<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pricing;
use App\Review;
use Carbon\Carbon;
use Session;
use Toastr;
use Auth;

class PricingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Pricing';
        $this->url = 'pricing';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Pricing::orderBy('id', 'desc')->get();
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
            'package' => 'required',
            'order' => 'required',
        ]);

        // Insert Data
        $data = new Pricing;
        $data->provider_id = $request->provider_id;
        $data->package = $request->package;
        $data->pri_price = $request->pri_price;
        $data->disc_price = $request->disc_price;
        $data->cpu = $request->cpu;
        $data->storage = $request->storage;
        $data->ram = $request->ram;
        $data->bandwidth = $request->bandwidth;
        $data->ip_address = $request->ip_address;
        $data->transfer = $request->transfer;
        $data->domain = $request->domain;
        $data->email = $request->email;
        $data->ssl = $request->ssl;
        $data->order = $request->order;
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
            'package' => 'required',
            'order' => 'required',
        ]);

        // Update Data
        $data = Pricing::find($id);
        $data->provider_id = $request->provider_id;
        $data->package = $request->package;
        $data->pri_price = $request->pri_price;
        $data->disc_price = $request->disc_price;
        $data->cpu = $request->cpu;
        $data->storage = $request->storage;
        $data->ram = $request->ram;
        $data->bandwidth = $request->bandwidth;
        $data->ip_address = $request->ip_address;
        $data->transfer = $request->transfer;
        $data->domain = $request->domain;
        $data->email = $request->email;
        $data->ssl = $request->ssl;
        $data->order = $request->order;
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
        $data = Pricing::find($id);
        $data->delete();

        Toastr::success($this->title.' Deleted Successfully!', 'success');

        return redirect()->back();
    }
}
