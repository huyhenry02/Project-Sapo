<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show_list_brand()
    {
        return view('page.brand.list');
    }
    public function show_add_brand()
    {
        return view('page.brand.add');
    }
    public function show_edit_brand()
    {
        return view('page.brand.edit');
    }
}
