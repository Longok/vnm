<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return view('admin.login');
    }

    public function postAdminLogin( Request $request)
    {
        $user = User::where(['email'=>$request->email],['password'=>$request->password])->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)){
                Session::put('user',$user);
                if(Auth::Attempt([
                    'email'=>$request->email,
                    'password'=>$request->password
                    ]))
                {
                    return view('admin.index');
                } 
                
            }
            else
                {
                    return redirect()->back()->with('thongbao','Địa chỉ Email hoặc mật khẩu không đúng');
                }   
        }
    }

}
