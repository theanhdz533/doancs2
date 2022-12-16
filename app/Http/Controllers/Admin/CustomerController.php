<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Symfony\Component\CssSelector\Exception\ExpressionErrorException;


class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $search = $request->get('q');
        // $customer = Customer::query()
        //     ->where('name', 'like', '%' . $search . '%')
        //     ->paginate(10);
        // $customer->appends(['q' => $search]);
        // return view('admin.customer.index', [
        //     'customer' => $customer,
        //     'search' => $search
        // ]);
        $customer = User::all();
        return view('admin.customer.index', [
            'customer' => $customer,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'username' => 'email|unique:tb_user',
        ],
        [
            'unique' => 'Email đã tồn tại!',
            'email' => 'Chưa đúng định dạng email!'
        ]
    );
        $create_at = Carbon::now();
        $update_at = Carbon::now();
        
       
        $check = $request->file('ImageUpload');
        if (is_file($check)){
            $nameImg = time() . '_' . $request->file('ImageUpload')->getClientOriginalName();
            $request->ImageUpload->move(public_path('admin/csdl/nguoidung'), $nameImg);
        }
        else {
            $nameImg = "";
        }
        $customer = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'phone' => $request->input('phone'),
            'birthday' => $request->input('birthday'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'password' => $request->input('password'),
            'image' => $nameImg,
            'created_at' => $create_at,
            'updated_at' => $update_at,
        ]);
        
        
       

        $customer->save();
        return redirect('/customer');
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
    public function edit($user_id)
    {
        $customer = User::find($user_id);
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        
        $check = $request->file('ImageUpload');
        $user = User::find($user_id);
        $img= $user['image'];
        
        if (is_file($check)){
            $nameImg = time() . '_' . $request->file('ImageUpload')->getClientOriginalName();
            $request->ImageUpload->move(public_path('admin/csdl/nguoidung'), $nameImg);
        }
        else {
            $nameImg = $img;
        }

        $update_at = Carbon::now();
        $customer = User::where('user_id', $user_id)->update([
            'name' => $request->input('name'),
            'username' => $request->input('user'),
            'phone' => $request->input('phone'),
            'birthday' => $request->input('birthday'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'image' => $nameImg,
            'updated_at' => $update_at,
        ]);

        
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {

        $n_img = "abc";
        $user = User::find($user_id);
        $img= $user['image'];
        $name = 'admin/csdl/nguoidung/' . $img;

        if ($img != null){
            unlink(public_path($name));
        }
        
        $del = User::find($user_id)->delete();

        return redirect('/customer');
    }
}
