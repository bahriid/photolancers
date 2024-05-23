<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role ==='admin'){
            return view('admin/dashboard/index');
        }else{
            return redirect()->route('cms.dashboard');
        }
    }
}
