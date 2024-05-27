<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Package;
use App\Models\Photographer;

class LandingPageController extends Controller
{
    public function index()
    {

        $data['categories'] = Category::withCount(['packages' => function ($query) {
            $query->whereHas('photographer.user', function ($query) {
                $query->where('status', 'active');
            });
        }])->get();
        $data['photographers'] = Photographer::with('user')
            ->whereHas('user', fn ($query) => $query->where('status', 'active'))
            ->get()->take(8);
        $data['provinces'] = \Indonesia::allProvinces();
        $data['packages'] = Package::query()
            ->whereHas('photographer.user', fn($query) => $query->where('status', 'active'))
            ->with(['province', 'city', 'category'])
            ->get()->take(6);
        $data['blogs'] = Blog::get()->take(6);

        return view('client/landing/index')->with('data', $data);
    }

    public function registered()
    {
        $data = [];

        return view('client/landing/registered')->with('data', $data);
    }
}
