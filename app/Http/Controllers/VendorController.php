<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function show_list_vendor()
    {
        return view('page.vendor.list');
    }
    public function show_add_vendor()
    {
        return view('page.vendor.add');
    }
    public function show_edit_vendor()
    {
        return view('page.vendor.edit');
    }
}
