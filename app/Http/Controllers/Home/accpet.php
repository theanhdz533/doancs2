<?php

namespace App\Http\Controllers\Home;

use App\Mail\SendMail;
use App\Models\cart;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class accpet extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function destroy(Request $request, $id)
    {
        $cart = Cart::find($request->id);
        $infor = post::where('id', $cart->product_id)->first();
        $mailData = $request->username;
        $date = date($cart->date);

        $id_cart = $id;
        return view(
            'home.post.address',
            [

                'id_cart' => $id_cart,
                'mailData' => $mailData,
                'date' => $date,
            ]

        );
    }
    public function address(Request $request)
    {
        $id = $request->id;
        $mailData = $request->mailData;
        $cart = Cart::find($id);
        // date

        if ($request->date) {
            $format = "d/m/Y";
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = strtotime($request->date);
            $date = date($format, $time);
        } else {
            $date = $request->date_old;
        }
       

        cart::where('id', $id)->update([
            'status' => 3,
            'address' => $request->address,
            'time' => $request->time,
            'date' => $date,
        ]);

        $phone = $request->phone;
        $addrees = $request->address;
        $time = $request->time;
        $infor = post::where('id', $cart->product_id)->first();

        Mail::to($mailData)->send(new SendMail($cart, $infor, $phone, $addrees, $time, $date));

        return redirect('/HomePost');
    }
}
