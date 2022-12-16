<?php

namespace App\Http\Controllers\Home;


use App\Models\cart;
use App\Models\post;
use App\Models\product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BillController extends Controller
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
            'home.bill.index',
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
        $user= User::where('user_id',$id)->get();
        $mail = "abc";
        foreach($user as $data){
            $mail = $data['username'];
        }
        $customer = User::where('user_id',$id)->update([
            'name' => $request->input('name'),
            'username' => $mail,
            'phone'=> $request->input('phone'),
            'birthday'=> $request->input('birthday'),
            'gender'=> $request->input('gender'),
            'address'=> $request->input('address'),
           ]);
           return redirect('/');
           
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
    public function unOrder(Request $request){
        $cart = cart::where('id', $request->id)->update([
            'status' => 0,
        ]);
        return back();
    }
}
