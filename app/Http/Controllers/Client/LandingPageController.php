<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Package;
use App\Models\Photographer;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {

        $data['categories'] = Category::withCount('packages')->get();
        $data['photographers'] = Photographer::with('user')->get()->take(8);
        $data['provinces'] = \Indonesia::allProvinces();
        $data['packages'] = Package::get()->take(6);
        $data['blogs'] = Blog::get()->take(6);

        return view('client/landing/index')->with('data', $data);
    }

    public function registered()
    {
        $data = [];

        return view('client/landing/registered')->with('data', $data);
    }
}
