<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
