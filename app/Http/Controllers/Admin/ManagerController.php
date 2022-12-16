<?php

namespace App\Http\Controllers\Admin;


use App\Models\cart;
use App\Models\cookie;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $total_customer = 0;
        $total_customer = User::count();

        $total_product = 0;
        $total_product = DB::table('post')->sum('count');

        $total_cart = 0;
        $total_cart = cart::count();

        $total_product_Out = 0;
        $total_product_Out = post::where('count', 0)->count();

        $total_view = 0;
        $total_view = cookie::count();

        $total_post_acc = 0;
        $total_post_acc = post::where('status',1)->count();
        $total_post_hidden = 0;
        $total_post_hidden = post::where('status', 0)->count();
        
        // danh sach don hang
        $cart = cart::paginate(5);
        $user = user::all();
        $product = post::all();
        
        $product = post::paginate(5);

        
        // san pham het hang
        
        return view('admin.index',
        [
            'total_customer' => $total_customer,
            'total_product'  => $total_product,
            'total_cart'  => $total_cart,
            'total_product_Out'  => $total_product_Out,
            'total_view'  => $total_view,
            'cart' => $cart,
            'user'=>$user,
            'product'=>$product,
            'total_post_acc'=>$total_post_acc,
            'total_post_hidden'=>$total_post_hidden,
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
