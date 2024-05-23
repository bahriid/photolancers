<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Package;
use App\Models\Photographer;
use App\Utilities\Helpers;
use Illuminate\Http\Request;
use DataTables;

class PackageController extends Controller
{

    public function index()
    {
        return view('admin.packages.index');
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
            $image = Helpers::uploadToStorage($file, $name, 'packages');

            return response()->json([
                'name' => $image,
                'original_name' => $file->getClientOriginalName(),
            ]);
        } catch (\Exception $e) {
            return \Response::json('error', 400);
        }
    }

    public function data(Request $request)
    {
        $query = Package::select('packages.*')
            ->with(['category', 'photographer.user'])
            ->when($request->photographer_id, fn($q) => $q->where('photographer_id', $request->photographer_id))
            ->orderBy('id', 'desc');

        return DataTables::eloquent($query)
            ->addColumn('action', function ($data) {
                $url = route('admin.packages.edit', ['id' => $data['id']]);
                $delete = route('admin.packages.destroy', ['id' => $data['id']]);
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

    public function create($id)
    {
        $categories = Category::all();
        $photographer = Photographer::find($id);
        return view('admin.packages.create')
            ->with('data', [
                'categories' => $categories,
                'photographer' => $photographer,
            ]);
    }

    public function store($id, Request $request)
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
            $photographer = Photographer::find($id);

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
                'raw_photo' => $validated['raw_photo'],
                'photographer_id' => $photographer->id,
            ]);

            foreach ($validated['document'] as $item) {
                $image = new Image();
                $image->url = $item;

                $package->images()->save($image);
            }

            return Helpers::successRedirect('admin.photographer.packages', 'Successfully create package', ['id' => $photographer->id]);
        } catch (\Exception $e) {
            return Helpers::errorRedirect('admin.photographer.packages.create', $e->getMessage(), ['id' => $photographer->id]);
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

            return Helpers::successRedirect('admin.photographer.packages', 'Successfully update package', ['id' => $package->photographer_id]);
        } catch (\Exception $e) {
            return Helpers::errorRedirect('admin.photographer.packages.create', $e->getMessage(), ['id' => $package->photographer_id]);
        }
    }

    public function edit($id)
    {
        $package = Package::query()->findOrFail($id);
        $categories = Category::all();
        return view('admin.packages.detail')->with('data', [
            'package' => $package,
            'categories' => $categories,
        ]);
    }

    public function destroy($id)
    {
        try {
            $package = Package::where('id', $id)->first();
            $photographer_id = $package->photographer_id;
            $package->images()->delete();
            $package->delete();

            return Helpers::successRedirect('admin.photographer.packages', 'Successfully delete package', ['id' => $photographer_id]);
        } catch (\Exception $e) {
            return Helpers::errorRedirect('admin.photographer.packages.create', $e->getMessage(), ['id' => $photographer_id]);
        }
    }
}
