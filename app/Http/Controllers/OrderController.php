<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show_list_order()
    {
        return view('page.order.list');
    }
    public function show_add_order()
    {
        return view('page.order.add');
    }
    public function show_edit_order()
    {
        return view('page.order.edit');
    }
}
