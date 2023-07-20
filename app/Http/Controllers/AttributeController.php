<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function show_list_attribute()
    {
        return view('page.attribute.list');
    }
    public function show_add_attribute()
    {
        return view('page.attribute.add');
    }
    public function show_edit_attribute()
    {
        return view('page.attribute.add');
    }
}
