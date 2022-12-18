<?php

namespace App\Http\Controllers\Home;

use App\Models\cart;
use App\Models\post;
use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $search = $request->search;
        $post = post::all();
        $product = product::all();
        $post = post::query()
            ->where('title', 'like', '%' . $search . '%')->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('color', 'like', '%' . $search . '%')->orWhere('type_car', 'like', '%' . $search . '%')
            ->orWhere('year_of_manufacture', 'like', '%' . $search . '%')->orWhere('seat_count', 'like', '%' . $search . '%')
            ->orWhere('fuel', 'like', '%' . $search . '%')->orWhere('content', 'like', '%' . $search . '%')
            ->orWhere('engine_size', 'like', '%' . $search . '%')->orWhere('power', 'like', '%' . $search . '%')
            ->orWhere('mileage', 'like', '%' . $search . '%')->orWhere('the_firm', 'like', '%' . $search . '%')
            ->orWhere('seat_count', 'like', '%' . $search . '%')
            ->paginate(9);
        $post->appends(['search' => $search]);

        $page = post::paginate(9);
         
        return view('Home.product.index', [
            'post' => $post,
            'search' => $search,
            'product' => $product,
            'page' =>$page,
        ]);
        // 
        
        // return view(
        //     'home.product.index',
        //     [
        //         'post' => $post,
        //         'product' => $product,
        //     ]
        // );
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
    // ----------------------------------------------
    // Hiển thị sản phẩm ra trang sản phẩm
    public function show($id)
    {
        $post = post::find($id);
        $cart = cart::where('product_id', $id)->get();
        $rate = 0;
        if (Auth::user()) {
            foreach ($cart as $data) {
                if (($data->user == Auth::user()->username) && ($data->status == 3) && ($data->rate == null)) {
                    $rate = 1;
                }
            }
        }
       
        $user = User::where('username', $post->email)->first();
        $sdt = $user->phone;
       
        $id_post = $id;
        $img = product::where('id_post', $id_post)->get();
        
        $same_product = post::where('the_firm', $post->the_firm)->paginate(3);

        $count_product = post::where('the_firm', $post->the_firm)->count();
  
        if ($count_product==1){
            $same_product = post::where('seat_count', $post->seat_count)->paginate(3);
        }
        // dd($count_product);
        $product = product::all();
        return view(
            'home.product.show',
            [
                'post' => $post,
                'img' => $img,
                'rate' => $rate,
                'sdt' =>$sdt,
                'same_product' => $same_product,
                'product' => $product,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // -----------------------------------------------------------------------------
    // them san pham vao gio hang
    public function destroy(Request $request, $id)
    {
        $cart = cart::all();
        $count = 0;
        foreach ($cart as $data) {
            if (($request->input('username') == $data->user) && ($id == $data->product_id)) {
                $count++;
            }
        }
        if ($count != 0) {
            echo "<script>";
            echo "history.back();";
            echo "alert('Sản phẩm này đã có trong giỏ hàng của bạn!')";
            echo "</script>";
        } else {
            $post = cart::create([
                'user' => $request->input('username'),
                'product_id' => $id,

            ]);
            $post->save();
            return redirect('/HomeCart');
        }
    }
    // ------------------------------------------------------------------
    // danh gia san pham 
    public function rate(Request $request)
    {
        $id_post = $request->id;
        $rate = $request->rate;
        $username = $request->username;
        $cart = cart::where('product_id', $id_post)->get();
        $id_cart = 0;
        foreach ($cart as $data) {
            $id_cart++;
            if (($data->user == $username) && ($data->rate == null)) {
                break;
            }
        }
        $cart = cart::where('id', $id_cart)->update([
            'rate' => 1,
        ]);
        $good = 0;
        $bad = 0;
        if ($rate == "Hài lòng") {
            $good = 1;
        } else if ($rate == "Không hài lòng") {
            $bad = 1;
        }
        $post = post::find($id_post);
        if ($post->good == null) {
            $good = $good;
        } else {
            $good = 1 + $post->good;
        }

        if ($post->bad == null) {
            $bad = $bad;
        } else {
            $bad = 1 + $post->bad;
        }

        $up = post::where('id', $id_post)->update([
            'good' => $good,
            'bad' => $bad,
        ]);

        return back();
    }
}
