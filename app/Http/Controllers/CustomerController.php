<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show_list_customer()
    {

        return view('page.customer.list'    );
    }
    public function show_add_customer()
    {
        return view('page.customer.add');
    }
    public function show_edit_customer()
    {
        return view('page.customer.add');
    }
    public function show_profile_customer()
    {
        return view('page.customer.profile');
    }
    public function add_customer(Request $request)
    {

    }

}
