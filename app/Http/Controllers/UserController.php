<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

