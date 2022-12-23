<?php

namespace App\Http\Controllers\Admin;


use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = banner::all();
        return view('admin.banner.index',
        ['image' => $image,
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
        //
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
        $banner = banner::find($id);
        return view('admin.banner.edit',compact('banner'));
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
        $check = $request->file('ImageUpload');
        $banner = banner::find($id);
        $img= $banner['image'];
        
        if (is_file($check)){
            $nameImg = time() . '_' . $request->file('ImageUpload')->getClientOriginalName();
            $request->ImageUpload->move(public_path('admin/csdl/banner'), $nameImg);
        }
        else {
            $nameImg = $img;
        }

        $data_img = banner::where('id',$id)->update([
            'img'=> $nameImg,
           ]);
    
           return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
