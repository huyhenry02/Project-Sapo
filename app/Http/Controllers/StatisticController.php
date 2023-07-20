<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function show_statistic_order()
    {
        return view('page.statistic.order');
    }
    public function show_statistic_revenue()
    {
        return view('page.statistic.revenue');
    }
}
