<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show()
    {
        $data = [];

        return view('client/package/index')->with('data', $data);
    }
}
