<?php

namespace App\Http\Controllers\Home;


use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\post;
use App\Models\product;
use App\Models\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $search = $request->get('q');
        $product = product::all();
        $customer = User::all();
        $posts = post::query()
            ->where('title', 'like', '%' . $search . '%')
            ->paginate(10);
        $posts->appends(['q' => $search]);
        $cart = cart::all();  
        return view('home.post.index', [
            'posts' => $posts,
            'search' => $search,
            'product' =>$product,
            'customer' =>$customer,
            'cart' => $cart,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = User::all();
        return view('Home.post.create',
        [
            'customer' =>$customer,
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $format = "d/m/Y";
        date_default_timezone_set('Asia/Ho_Chi_Minh');
         $time = date($format,  time());
        $post = Post::create([ 
            'email' =>  $request->input('email'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'type_car' => $request->input('type_car'),
            'year_of_manufacture' => $request->input('year_of_manufacture'),
            'mileage' => $request->input('mileage'),
            'fuel' => $request->input('fuel'),
            'engine_size' => $request->input('engine_size'),
            'power' => $request->input('power'),
            'color' => $request->input('color'),
            'seat_count' => $request->input('seat_count'),
            'price' => $request->input('price'),
            'the_firm' => $request->input('the_firm'),    
            'count' => $request->input('count'), 
            'date' =>   $time,
            
        ]);
     
        foreach ($request->file('ImageUpload') as $data){
            $nameImg = time().'_'. $data->getClientOriginalName(); 
            if (product::create(
                [
                    'id_post' => $post->id,
                    'image' => $nameImg = time().'_'. $data->getClientOriginalName() 
                ]
            ))
            {
               
                $data->move(public_path('admin/csdl/product'),$nameImg);  
            }
          
        }
   
     $post->save();
    return redirect('/HomePost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        $product = product::where('id_post', $id)->get();
        return view('Home.post.edit', [
            'post' => $post,
            'product' => $product,
        ]);
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
        $stt = Post::find($id);
        $time = $stt->date;
        if ($request->file('ImageUpload') != null) {
            $id_post = $id;
            $product = product::where('id_post', $id_post)->get();
            foreach ($product as $data) {
                $img = $data->image;
                $name = 'admin/csdl/product/' . $img;
                if ($img != null) {
                    unlink(public_path($name));
                }
            }
        }



        $stt = Post::find($id);
        $tt = 0;
        if ($stt->status == null) {
            $tt = 0;
        } else {
            $tt = 1;
        }
        $time = $stt->date;
        $post = Post::create([
            'email' =>  $request->input('email'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'type_car' => $request->input('type_car'),
            'year_of_manufacture' => $request->input('year_of_manufacture'),
            'mileage' => $request->input('mileage'),
            'fuel' => $request->input('fuel'),
            'engine_size' => $request->input('engine_size'),
            'power' => $request->input('power'),
            'color' => $request->input('color'),
            'seat_count' => $request->input('seat_count'),
            'price' => $request->input('price'),
            'the_firm' => $request->input('the_firm'),
            'count' => $request->input('count'),
            'status' => $tt,
            'date' =>   $time,
        ]);

        $product = product::where('id_post',$id)->get();
        if ($request->file('ImageUpload') == null) {
            foreach ($product as $data) {
                $nameImg = $data->image;
                if (product::create(
                    [
                        'id_post' => $post->id,
                        'image' => $nameImg 
                    ]
                )) {
                  echo  $nameImg;
                }
            }
        }
        $del = Post::find($id)->delete();
        if ($request->file('ImageUpload') != null) {
            foreach ($request->file('ImageUpload') as $data) {
                $nameImg = time() . '_' . $data->getClientOriginalName();
                if (product::create(
                    [
                        'id_post' => $post->id,
                        'image' => $nameImg = time() . '_' . $data->getClientOriginalName()
                    ]
                )) {

                    $data->move(public_path('admin/csdl/product'), $nameImg);
                }
            }

            $post->save();
        }
        




        return redirect('/HomePost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $id_post = $id;
        $product = product::where('id_post', $id_post)->get();
        foreach ($product as $data) {
            $img = $data->image;
            $name = 'admin/csdl/product/' . $img;
            if ($img != null) {
                unlink(public_path($name));
            }
        }



        $del = Post::find($id)->delete();

        return redirect('/HomePost');
    }
}
