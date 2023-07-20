<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_default(){
        return view('page.dashboard.default');
    }
    public function show_alternative(){
        return view('page.dashboard.alternative');
    }
}
