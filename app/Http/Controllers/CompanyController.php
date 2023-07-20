<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show_list_company()
    {
        return view('page.company.list');
    }
    public function show_add_company()
    {
        return view('page.company.add');
    }
}
