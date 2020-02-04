<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use Carbon\Carbon;
use Session;
use Toastr;
use Image;
use File;
use Auth;

class ReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Page Data
        $this->title = 'Review';
        $this->url = 'review';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Review::orderBy('id', 'desc')->get();

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
            'details' => 'required',
            'logo_path' => 'nullable|file',
            'thumb_path' => 'nullable|file',
            'rating' => 'nullable|numeric',
            'ref_link' => 'nullable',
            'order' => 'nullable|numeric',
        ]);


        // file upload, fit and store inside public folder 
        if($request->hasFile('logo_path')){
            //Upload New Image
            $filenameWithExt = $request->file('logo_path')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('logo_path')->getClientOriginalExtension();
            $logoNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // Move File inside public/uploads/ folder
            $file = $request->file('logo_path')->move($path, $logoNameToStore);
        }
        else{
            $logoNameToStore = NULL;
        }


        // file upload, fit and store inside public folder 
        if($request->hasFile('thumb_path')){
            //Upload New Image
            $filenameWithExt = $request->file('thumb_path')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('thumb_path')->getClientOriginalExtension();
            $thumbNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // Move File inside public/uploads/ folder
            $file = $request->file('thumb_path')->move($path, $thumbNameToStore);
        }
        else{
            $thumbNameToStore = NULL;
        }


        // Get content with media file
        $content=$request->input('details');
        
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->encoding = 'utf-8';
        $dom->loadHtml(utf8_decode($content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
       // foreach <img> in the submited content
        foreach($images as $img){
            $src = $img->getAttribute('src');
            
            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){                
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];                
                // Generating a random filename
                $filename = uniqid().'_'.time();

                //Crete Folder Location
                $path = public_path('uploads/media/');
                if (! File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                $filepath = "/uploads/media/$filename.$mimetype";    
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  //->resize(500, null) 
                  ->resize(500, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));                
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-


        // Insert Data
        $data = new Review;
        $data->title = $request->title;
        $data->slug = str_slug($request->title, '-');
        $data->sub_title = $request->sub_title;
        $data->short_desc = $request->short_desc;
        $data->description = $dom->saveHTML();
        $data->logo_path = $logoNameToStore;
        $data->thumb_path = $thumbNameToStore;
        $data->rating = $request->rating;
        $data->ref_link = $request->ref_link;
        $data->pros = $request->pros;
        $data->cons = $request->cons;
        $data->key_features = $request->key_features;
        $data->order = $request->order;
        $data->meta_keyword = $request->meta_keyword;
        $data->meta_desc = $request->meta_desc;
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
        $rows = Review::orderBy('id', 'desc')->get();

        $data = Review::find($id);

        $title = $this->title;
        $url = $this->url;

        return view('admin.'.$url.'.index', compact('rows', 'data', 'title', 'url'));
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
            'details' => 'required',
            'logo_path' => 'nullable|file',
            'thumb_path' => 'nullable|file',
            'rating' => 'nullable|numeric',
            'ref_link' => 'nullable',
            'order' => 'nullable|numeric',
        ]);


        // file upload, fit and store inside public folder 
        if($request->hasFile('logo_path')){

            //Delete Old Image
            $old_file = Review::find($id);

            $file_path = public_path('uploads/'.$this->url.'/'.$old_file->logo_path);
            if(File::isFile($file_path)){
                File::delete($file_path);
            }

            //Upload New Image
            $filenameWithExt = $request->file('logo_path')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('logo_path')->getClientOriginalExtension();
            $logoNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // Move File inside public/uploads/ folder
            $file = $request->file('logo_path')->move($path, $logoNameToStore);
        }
        else{

            $old_file = Review::find($id);

            $logoNameToStore = $old_file->logo_path; 
        }



        // file upload, fit and store inside public folder 
        if($request->hasFile('thumb_path')){

            //Delete Old Image
            $old_file = Review::find($id);

            $file_path = public_path('uploads/'.$this->url.'/'.$old_file->thumb_path);
            if(File::isFile($file_path)){
                File::delete($file_path);
            }

            //Upload New Image
            $filenameWithExt = $request->file('thumb_path')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('thumb_path')->getClientOriginalExtension();
            $thumbNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->url.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            // Move File inside public/uploads/ folder
            $file = $request->file('thumb_path')->move($path, $thumbNameToStore);
        }
        else{

            $old_file = Review::find($id);

            $thumbNameToStore = $old_file->thumb_path; 
        }



        // Get content with media file
        $content=$request->input('details');
        
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->encoding = 'utf-8';
        $dom->loadHtml(utf8_decode($content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
       // foreach <img> in the submited content
        foreach($images as $img){
            $src = $img->getAttribute('src');
            
            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){                
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];                
                // Generating a random filename
                $filename = uniqid().'_'.time();

                //Crete Folder Location
                $path = public_path('uploads/media/');
                if (! File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                $filepath = "/uploads/media/$filename.$mimetype";    
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  //->resize(500, null) 
                  ->resize(500, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));                
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-


        // Update Data
        $data = Review::find($id);
        $data->title = $request->title;
        $data->slug = str_slug($request->title, '-');
        $data->sub_title = $request->sub_title;
        $data->short_desc = $request->short_desc;
        $data->description = $dom->saveHTML();
        $data->logo_path = $logoNameToStore;
        $data->thumb_path = $thumbNameToStore;
        $data->rating = $request->rating;
        $data->ref_link = $request->ref_link;
        $data->pros = $request->pros;
        $data->cons = $request->cons;
        $data->key_features = $request->key_features;
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
        $data = Review::find($id);

        $logo_path = public_path('uploads/'.$this->url.'/'.$data->logo_path);
        if(File::isFile($logo_path)){
            File::delete($logo_path);
        }

        $thumb_path = public_path('uploads/'.$this->url.'/'.$data->thumb_path);
        if(File::isFile($thumb_path)){
            File::delete($thumb_path);
        }

        $data->delete();

        Toastr::success($this->title.' Deleted Successfully!', 'success');

        return redirect()->back();
    }
}
