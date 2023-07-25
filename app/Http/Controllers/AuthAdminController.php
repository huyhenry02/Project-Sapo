<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthAdminController extends Controller
{
    public function show_login(){
        return view('auth_admin.login');
    }
    public function show_change_pass(){
        return view('auth_admin.change_pass');
    }
    public function show_verified_email(){
        return view('auth_admin.send_email_verified');
    }
    public function show_send_email_forgot_pass()
    {
        return view('auth_admin.send_email_forgot_pass');
    }
    public function login(Request $request){

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $user =  Auth::attempt($credentials);
        if ($user) {
            $accessToken = Auth::user()->createToken('token')->token;
            return view('dashboard.default')->with('success_Login', 'Đăng nhập thành công.');
        } else {
            return redirect()->back()->with('false_Login', 'Đăng nhập thất bại.');
        }
    }
    public function actived(User $user, $token)
    {
        if($user->authToken === $token){
            $user->update(['status'=>1]);
            Session::put('success_actived', 'tài khoản đã được xác nhận ');
            return redirect()->route('show_login.index');
        }else{
            return redirect()->route('show_login.index')->with('false_actived', 'tài khoản chưa được xác nhận ');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('show_login.index');
    }

}
