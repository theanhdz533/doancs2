<?php

namespace App\Http\Controllers\Home;

use App\Models\bill;
use App\Models\cart;
use App\Models\post;
use App\Models\product;
use App\Models\User;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = cart::all();
        $product = product::all();
        $post = post::all();
        return view(
            'home.cart.index',
            [
                'cart' => $cart,
                'product' => $product,
                'post' => $post,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->input('totalmoney') == null) {
        //     echo "<script>";
        //     echo "history.back();";
        //     echo "alert('Vui lòng chọn số lượng sản phẩm bạn muốn mua!')";
        //     echo "</script>";
        // } else {
        //     $bill = bill::create([
        //         'username' => $request->username,
        //         'totalmoney' => $request->totalmoney,
        //         'date' => time(),
        //     ]);
        // }


        // dd($request->input('totalmoney'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c = cart::find($id);
        $p = post::find($c->product_id);
        $product = product::where('id_post', $c->product_id)->get();
        $customer = user::where('username',$c->user)->get();
        $seller = user::where('username',$p->email)->first();
        return view('home.cart.show',
            [
                'customer' => $customer,
                'c' => $c,
                'p' => $p,
                'product' =>$product,
                'seller'=> $seller,
            ]
        );
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
        // dd($request->count);
        // get time
        $format = "d/m/Y";
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = strtotime($request->date);
        $time1 = date($format, $time);
        $c = cart::find($id);
        $count = post::find($c->product_id);
        $amount = $count->count - $request->input('count');
        $p = post::find($c->product_id);
        $product = product::where('id_post', $c->product_id)->get();
       
        $seller = user::where('username',$p->email)->first();
       
         $customer = user::where('username',$c->user)->get();
        if ($time == null) {
            echo "<script>";
            echo "confirm('Vui lòng chọn ngày hẹn!');";
            // echo "window.location.reload();";
            echo "history.back()";
            // echo "document.getElementById('count').reset();";
            echo "</script>";
        } else {
            $cart = cart::where('id', $id)->update([

                'date' => $time1,
                'total' => $request->input('totalmoney'),

            ]);
            $id_cart = $id;
        
            return view('home.bill.edit',
            [
                'customer' => $customer,
                'c' => $c,
                'p' => $p,
                'product' =>$product,
                'seller'=> $seller,
                'id_cart' =>$id,
            ]
        );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = cart::find($id)->delete();
        
        return back();
    }
}
