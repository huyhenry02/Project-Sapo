<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ViewMiddlewareController extends Controller
{
    public function viewAll()
    {
        if (Gate::allows('view-all')) {
            return redirect()->route('');
        } else {
            return "You don't have permission to view all.";
        }
    }



}
