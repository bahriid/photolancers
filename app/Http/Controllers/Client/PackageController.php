<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show($id)
    {
        $data['package'] = Package::where('id',$id)
            ->whereHas('photographer.user', fn($query) => $query->where('status', 'active'))
            ->with('images')->first();
        return view('client/package/detail')->with('data', $data);
    }

    public function index(Request $request)
    {
        $data['categories'] = Category::withCount('packages')->get();
        $data['provinces'] = \Indonesia::allProvinces();
        $data['packages'] = Package::query()
            ->whereHas('photographer.user', fn($query) => $query->where('status', 'active'))
            ->with(['province', 'city', 'category'])
            ->when($request->category && $request->category != 'All', function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->when($request->province && $request->province != 'All', function ($query) use ($request) {
                $query->where('province_id', $request->province);
            })
            ->when($request->budget, function ($query) use ($request) {
                $query->where('price', '<=',$request->budget);
            })
            ->paginate(
                perPage: 12,
                page: $request->page ?? 1
            );


        return view('client/package/index')->with('data', $data);
    }
}
