<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function show_list_user()
{
    return view('page.user.list');
}
    public function show_add_user()
{
    return view('page.user.add');
}
    public function show_edit_user()
{
    return view('page.user.add');
}
    public function add_user(Request $request)
    {
        $request->validate([
            'password'=>'required',
            'email'=>'required'
        ],[
            'password.require'=>'Vui lòng nhập mật khẩu',
            'email.required'=>'Vui lòng nhập email'
        ]);
        $data = $request->only('username','email','password','firstname','lastname','phone','gender');
        $user = new User();
        $user->username = $data['username'];
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->phone = $data['phone'];
        $user->gender = $data['gender'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']); // Sử dụng Hash::make() để băm mật khẩu
        $user->save();
        $accessToken = $user->createToken('authToken')->accessToken;
        if($user) {
           Mail::send('auth_admin.email_register',compact('user'),function ($email) use ($user)
           {
               $email->subject('H&H - Xác nhận tài khoản');
               $email->to($user->email, $user->name);
           });
            return redirect()->route('show_login.index')->with('success_Register', 'Vui lòng check mail để xác nhận tài khoản');
        }
        return redirect()->back()->with('false_Register', 'Đăng ký không thành công');
    }
    
}

