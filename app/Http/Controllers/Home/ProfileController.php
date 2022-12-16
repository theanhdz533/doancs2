<?php

namespace App\Http\Controllers\Home;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $customer = DB::table('tb_user')->where('user_id',$id)->get();
        return view('Home.profile.edit',compact('customer'));
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
        $user = User::find($id);
        $img= $user['image'];
        
        if (is_file($check)){
            $nameImg = time() . '_' . $request->file('ImageUpload')->getClientOriginalName();
            $request->ImageUpload->move(public_path('admin/csdl/nguoidung'), $nameImg);
        }
        else {
            $nameImg = $img;
        }
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
            'image'=> $nameImg,
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
        //
    }
}
