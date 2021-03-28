<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UserRequest;
use App\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $user = New User;
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->password = Hash::make($request ->password);
        $user ->roles = $request ->roles;
        Session::put('Thongbao','Tạo tài khoản thành công');
        $user ->save();

        return redirect()->back();
    }

    public function getLogin()
    {
        return view('users.login');
    }

    public function postLogin( Request $request)
    {
        if(Auth::Attempt([
            'email'=>$request->email,
            'password'=>$request->password
            ]))
        {
                return redirect('home');
        }
        else
        {
            return redirect()->back()->with('thongbao','Địa chỉ Email hoặc mật khẩu không đúng');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
