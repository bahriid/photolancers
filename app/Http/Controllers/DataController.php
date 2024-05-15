<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function provinces()
    {
        return response()->json(\Indonesia::allProvinces());
    }

    public function cities($id)
    {
        return response()->json(\Indonesia::findProvince($id, 'cities'));
    }
}
