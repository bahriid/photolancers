<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Package;
use App\Models\Photographer;
use App\Utilities\Helpers;
use DataTables;
use Illuminate\Http\Request;
use Exception;
use Response;

class PackageController extends Controller
{

    public function uploadImage(Request $request)
    {
        try {
            $path = storage_path('tmp/uploads');

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $file = $request->file('file');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $image = Helpers::uploadToStorage($file, $name, 'packages');

            return response()->json([
                'name' => $image,
                'original_name' => $file->getClientOriginalName(),
            ]);
        } catch (Exception $e) {
            return Response::json('error', 400);
        }
    }

    public function data()
    {
        $query = Package::select('packages.*')
            ->with(['category', 'photographer.user'])
            ->whereHas('photographer.user', fn($query) => $query->where('id', auth()->user()->id))
            ->orderBy('id', 'desc');

        return DataTables::eloquent($query)
            ->addColumn('action', function ($data) {
                $url = route('cms.package.edit', ['id' => $data['id']]);
                $delete = route('cms.package.destroy', ['id' => $data['id']]);
                return '
                        <a href="' . $url . '" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-success btn-active-light-success m-1">Lihat</a>
                        <a href="' . $delete . '"  class="btn btn-sm btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger">Hapus</a>
                    ';
            })
            ->addColumn('actionAdmin', function ($data) {
                $url = route('package.detail', ['id' => $data['id']]);
                return '
                        <a href="' . $url . '" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-success btn-active-light-success m-1">Lihat</a>
                    ';
            })
            ->rawcolumns(['action', 'actionAdmin'])
            ->make(true);
    }

    public function create()
    {
        $categories = Category::all();
        $photographer = Photographer::where('user_id', auth()->user()->id)->first();
        return view('cms.packages.create')
            ->with('data', [
                'categories' => $categories,
                'photographer' => $photographer,
            ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'city_id' => 'required|integer',
            'province_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'lenses' => 'required|string',
            'camera' => 'required|string',
            'media' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'integer',
            'duration' => 'required|integer',
            'edited_photo' => 'required|integer',
            'raw_photo' => 'required|string|in:true,false',
            'document' => 'required|array',
        ]);

        try {
            $photographer = Photographer::where('user_id', auth()->user()->id)->first();

            $package = Package::query()->create([
                'category_id' => $validated['category_id'],
                'city_id' => $validated['city_id'],
                'province_id' => $validated['province_id'],
                'name' => $validated['name'],
                'description' => $validated['description'],
                'lenses' => $validated['lenses'],
                'camera' => $validated['camera'],
                'media' => $validated['media'],
                'price' => $validated['price'],
                'discount' => $validated['discount'],
                'duration' => $validated['duration'],
                'edited_photo' => $validated['edited_photo'],
                'raw_photo' => $validated['raw_photo'] == 'true',
                'photographer_id' => $photographer->id,
            ]);

            foreach ($validated['document'] as $item) {
                $image = new Image();
                $image->url = $item;

                $package->images()->save($image);
            }

            return Helpers::successRedirect('cms.package', 'Successfully create package');
        } catch (Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'city_id' => 'required|integer',
            'province_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'lenses' => 'required|string',
            'camera' => 'required|string',
            'media' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'integer',
            'duration' => 'required|integer',
            'edited_photo' => 'required|integer',
            'raw_photo' => 'required|boolean',
            'document' => 'required|array',
        ]);

        try {
            $package = Package::find($id);

            $package->images()->delete();

            $package->update([
                'category_id' => $validated['category_id'],
                'city_id' => $validated['city_id'],
                'province_id' => $validated['province_id'],
                'name' => $validated['name'],
                'description' => $validated['description'],
                'lenses' => $validated['lenses'],
                'camera' => $validated['camera'],
                'media' => $validated['media'],
                'price' => $validated['price'],
                'discount' => $validated['discount'],
                'duration' => $validated['duration'],
                'edited_photo' => $validated['edited_photo'],
                'raw_photo' => $validated['raw_photo'],
            ]);

            foreach ($validated['document'] as $item) {
                $image = new Image();
                $image->url = $item;

                $package->images()->save($image);
            }

            return Helpers::successRedirect('cms.package', 'Successfully update package');
        } catch (Exception $e) {
            return Helpers::errorRedirect('cms.package', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $package = Package::query()->findOrFail($id);
        $categories = Category::all();
        return view('cms.packages.detail')->with('data', [
            'package' => $package,
            'categories' => $categories,
        ]);
    }

    public function destroy($id)
    {
        try {
            $package = Package::where('id', $id)->first();
            $package->images()->delete();
            $package->delete();
            return Helpers::successRedirect('cms.package', 'Successfully delete package');
        } catch (Exception $e) {
            return Helpers::errorRedirect('cms.package', $e->getMessage());
        }
    }
}
