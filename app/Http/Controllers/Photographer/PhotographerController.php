<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\Photographer;
use App\Models\User;
use App\Utilities\Helpers;
use Illuminate\Http\Request;
use DataTables;

class PhotographerController extends Controller
{
    public function index()
    {
        $photographer = Photographer::with('user', 'province', 'city')->where('user_id', auth()->user()->id)->first();
        $packageCount = Package::where('photographer_id', $photographer->id)->count();
        $categoryCount = Package::where('photographer_id', $photographer->id)
            ->distinct('category_id')
            ->count('category_id');
        return view('cms.photographer.detail')->with('data', [
            'photographer' => $photographer,
            'countPackage' => $packageCount,
            'countCategory' => $categoryCount
        ]);
    }

    public function packages()
    {
        $photographer = Photographer::with('user', 'province', 'city')->where('user_id', auth()->user()->id)->first();
        $packageCount = Package::where('photographer_id', $photographer->id)->count();
        $categoryCount = Package::where('photographer_id', $photographer->id)
            ->distinct('category_id')
            ->count('category_id');
        return view('cms.photographer.packages')->with('data', [
            'photographer' => $photographer,
            'countPackage' => $packageCount,
            'countCategory' => $categoryCount
        ]);
    }
}
