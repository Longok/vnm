<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

        if(Auth::Attempt([
            'email'=>$request->email,
            'password'=>$request->password
            ]))
        {
                return view('admin');
        }   
        else
        {
            return redirect()->back()->with('thongbao','Địa chỉ Email hoặc mật khẩu không đúng');
        }
    }

}
