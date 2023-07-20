<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_default(){
        return view('dashboard.default');
    }
    public function show_alternative(){
        return view('dashboard.alternative');
    }
}
