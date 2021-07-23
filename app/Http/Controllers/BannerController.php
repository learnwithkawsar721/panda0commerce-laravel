<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Banner.index',[
            'banner_items'=>Banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $banner = Banner::create($request->except('_token','image'));
        if($request->hasFile('image')){

            $photo_name = 'banner-'.Str::random(10).'-'.time().'.'.$request->file('image')->getClientOriginalExtension();

            $path ='asset/admin/banner/';
            $path_name = public_path().DIRECTORY_SEPARATOR.$path;

            if(!File::isDirectory($path_name)){

              File::makeDirectory($path_name,0777,true,true);

            }

            Image::make($request->file('image'))->save($path_name.DIRECTORY_SEPARATOR.$photo_name,40);
            Banner::where('id',$banner->id)->update([
                'image'=>$path.'/'.$photo_name,
            ]);

        }
        return redirect(route('banner.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
