<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show_list_category()
    {
        return view('page.category.list');
    }
    public function show_add_category()
    {
        return view('page.category.add');
    }
    public function show_edit_category()
    {
        return view('page.category.edit');
    }
}
