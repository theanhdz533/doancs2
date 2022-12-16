<?php

namespace App\Http\Controllers\Home;

use App\Mail\ReasonMail;
use App\Models\cart;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class hidden extends Controller
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
    //     cart::where('id',$id)->update([
    //         'status' => 2,
    //     ]);
    //    return redirect('HomePost');
    }
    public function enter_reason(Request $request){
        $id = $request->id;
        $username = $request->username;
        
        return view('email.enter_reason',
        [
            'id' => $id,
            'username'=> $username,
        ]
    );
    }
    public function sendReason(Request $request){
        $cart = Cart::find($request->id);
        $infor = post::where('id',$cart->product_id)->first();
        $reason = $request->reason;
        
        $mailData = $request->username;
                Mail::to($mailData)->send(new ReasonMail($cart,$infor,$reason));
        cart::where('id',$request->id)->update([
            'status' => 2,
        ]);
        return redirect('/HomePost');
    }
}
