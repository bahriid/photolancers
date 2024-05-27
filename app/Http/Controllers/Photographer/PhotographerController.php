<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
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

    public function portofolio()
    {
        $photographer = Photographer::with('user', 'province', 'city')->where('user_id', auth()->user()->id)->first();
        $packageCount = Package::where('photographer_id', $photographer->id)->count();
        $categoryCount = Package::where('photographer_id', $photographer->id)
            ->distinct('category_id')
            ->count('category_id');
        return view('cms.photographer.portofolio')->with('data', [
            'photographer' => $photographer,
            'countPackage' => $packageCount,
            'countCategory' => $categoryCount
        ]);
    }

    public function portofolioData()
    {
        $photographer = Photographer::with('images')->where('user_id', auth()->user()->id)->first();
        $query = $photographer->images();

        return DataTables::eloquent($query)
            ->addColumn('image', function ($data) {
                return '
                        <img src="' . $data['url'] . '" width="200" class="rounded">
                    ';
            })->addColumn('action', function ($data) {
                $delete = route('cms.portofolio.destroy', ['id' => $data['id']]);
                return '
                        <a href="' . $delete . '"  class="btn btn-sm btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger">Hapus</a>
                    ';
            })
            ->rawcolumns(['image', 'action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'document' => 'required|array',
        ]);

        try {
            $photographer = Photographer::where('user_id', auth()->user()->id)->first();

            foreach ($validated['document'] as $item) {
                $image = new Image();
                $image->url = $item;

                $photographer->images()->save($image);
            }

            return Helpers::successRedirect('cms.portofolio', 'Successfully upload portofolio');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function uploadImage(Request $request)
    {
        try {
            $path = storage_path('tmp/uploads');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->file('file');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $image = Helpers::uploadToStorage($file, $name, 'potographer');

            return response()->json([
                'name' => $image,
                'original_name' => $file->getClientOriginalName(),
            ]);
        } catch (\Exception $e) {
            return \Response::json('error', 400);
        }
    }

    public function destroy($id)
    {
        try {
            $image = Image::findOrFail($id);
            $image->delete();
            return Helpers::successRedirect('cms.portofolio', 'Successfully delete portofolio');
        } catch (\Exception $e) {
            return Helpers::errorRedirect('cms.package', $e->getMessage());
        }
    }
}

