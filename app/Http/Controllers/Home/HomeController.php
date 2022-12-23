<?php

namespace App\Http\Controllers\Home;


use App\Models\banner;
use App\Models\cookie;
use App\Models\post;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use NumberFormatter;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post = post::all();
        $top1 = 1;
        foreach($post as $data){
               if ($data->id > $top1 && $data->status==1) {
                $top1 = $data->id;
               }
        }
        
        $top2 =0;
        foreach($post as $data){
            if ( $data->status==1 && $data->id == $top1 ) {
                continue;
            }
            else {
                $top2 = $data->id;
            }
        }

        $top3 =0;
        foreach($post as $data){
            if ( $data->status==1 && $data->id == $top1 ||  $data->id == $top2 ) {
                continue;
            }
            else {
                $top3 = $data->id;
            }
        }
        $list_cookie = cookie::all();
        $cookie_name = $request->cookie();
        // dem so luot truy cap
        if ($cookie_name!=null){
            $name = $cookie_name["XSRF-TOKEN"];
            $dem=0;
            foreach ($list_cookie as $data){
                if ($name== $data->name_cookie){
                    $dem++;
                }
            }
            if ($dem==0){
                $new_cookie = cookie::create([
                    'name_cookie' => $name,
                ]);
            }
        }
      
       
        
        
       
        // san pham moi nhat
        $data1 = post::find($top1);
        $data2 = post::find($top2);
        $data3 = post::find($top3);
        $img1 = product::where('id_post', $top1)->first();
        $img2 = product::where('id_post', $top2)->first();
        $img3 = product::where('id_post', $top3)->first();

        // banner 
        $banner1 = banner::where('id', 1)->first();
        $banner2 = banner::where('id', 2)->first();
        $banner3 = banner::where('id', 3)->first();
        return view('home.index',[
            'data1' =>$data1,
            'data2' =>$data2,
            'data3' =>$data3,
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'banner1' => $banner1,
            'banner2' => $banner2,
            'banner3' => $banner3,

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
        //
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
