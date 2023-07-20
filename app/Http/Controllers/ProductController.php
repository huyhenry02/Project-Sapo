<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_list_product()
    {
        return view('page.product.list');
    }
    public function show_add_product()
    {
        return view('page.product.add');
    }
    public function show_edit_product()
    {
        return view('page.product.edit');
    }
}
