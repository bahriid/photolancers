<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\Photographer;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{
    public function show($id)
    {
        $data['photographer'] = Photographer::where('id',$id)->with('images')->first();
        $data['packages'] = Package::where('photographer_id',$id)->with('images')->paginate(5);
        return view('client/photographer/detail')->with('data', $data);
    }

    public function index(Request $request)
    {
        $data['photographers'] = Photographer::query()
            ->when($request->search, function ($query) use ($request) {
                // Adjusting the whereHas to check the 'user' relationship
                $query->whereHas('user', function($q) use ($request) {
                    // Assuming 'name' is the attribute in the User model you want to search
                    $q->where('name', 'like', $request->search . '%');
                });
            })
            ->paginate(
                perPage: 12,
                page: $request->page ?? 1
            );


        return view('client/photographer/index')->with('data', $data);
    }
}
