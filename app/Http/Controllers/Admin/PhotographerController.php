<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.photographer.index');
    }

    public function data()
    {
        $query = Photographer::select('photographers.*')->with('user')->orderBy('id', 'desc');

        return DataTables::eloquent($query)
            ->addColumn('action', function ($item) {
                $url = route('admin.photographer.detail', ['id' => $item['id']]);
                return '
                        <a href="' . $url . '" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-success btn-active-light-success m-1">Lihat</a>
                    ';
            })
            ->addColumn('image', function ($item) {
                return '
                        <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
							<img src="' . $item['photo'] . '" alt="" data-kt-docs-datatable-subtable="template_image">
						</a>
                    ';
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function show($id = null)
    {
        if ($id == null) {
            $photographer = Photographer::with('user', 'province', 'city')->where('user_id', auth()->user()->id)->first();
        }else{
            $photographer = Photographer::with('user', 'province', 'city')->findOrFail($id);
        }
        $packageCount = Package::where('photographer_id', $id)->count();
        $categoryCount = Package::where('photographer_id', $id)
            ->distinct('category_id')
            ->count('category_id');
        return view('admin.photographer.detail')->with('data', [
            'photographer' => $photographer,
            'countPackage' => $packageCount,
            'countCategory' => $categoryCount
        ]);
    }

    public function packages($id)
    {
        $photographer = Photographer::with('user', 'province', 'city')->findOrFail($id);
        $packageCount = Package::where('photographer_id', $id)->count();
        $categoryCount = Package::where('photographer_id', $id)
            ->distinct('category_id')
            ->count('category_id');
        return view('admin.photographer.packages')->with('data', [
            'photographer' => $photographer,
            'countPackage' => $packageCount,
            'countCategory' => $categoryCount
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
            ]);

            Category::create($validated);

            return Helpers::successRedirect('admin.category', 'Successfully created Category');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }

    }


    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
            ]);

            Category::where('id', $id)->update($validated);

            return Helpers::successRedirect('admin.category', 'Successfully updated Category');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Category::where('id', $id)->delete();

            return Helpers::successRedirect('admin.category', 'Successfully deleted Category');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function approved($id)
    {
        try {
            $photographer = Photographer::where('id', $id)->first();

            if (!$photographer) {
                return Helpers::errorRedirect('Something went wrong');
            }

            User::query()->where('id', $photographer->user_id)->update(['status' => 'active']);

            return Helpers::successRedirect('admin.photographer.detail', 'Successfully approved photographer', ['id' => $id]);
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function rejected($id)
    {
        try {
            $photographer = Photographer::where('id', $id)->first();

            if (!$photographer) {
                return Helpers::errorRedirect('Something went wrong');
            }

            User::query()->where('id', $photographer->user_id)->update(['status' => 'rejected']);

            return Helpers::successRedirect('admin.photographer.detail', 'Successfully rejected photographer', ['id' => $id]);
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
