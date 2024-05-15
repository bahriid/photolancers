<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Package;
use App\Models\Photographer;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
    {
        $data['blog'] = Blog::where('slug',$slug)->with('user')->first();
        return view('client/blog/detail')->with('data', $data);
    }

    public function index(Request $request)
    {
        $data['featured'] = Blog::query()
            ->inRandomOrder()
            ->get()
            ->take(3);

        $data['trending'] = Blog::query()
            ->inRandomOrder()
            ->get()
            ->take(5);

        $data['latest'] = Blog::query()
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->latest()
            ->paginate(
                perPage: 8,
                page: $request->page ?? 1
            );


        return view('client/blog/index')->with('data', $data);
    }
}
