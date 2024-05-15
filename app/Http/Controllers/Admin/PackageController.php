<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Utilities\Helpers;
use Illuminate\Http\Request;
use DataTables;

class PackageController extends Controller
{

    public function index()
    {
        return view('admin.category.index');
    }

    public function data()
    {
        $query = Category::select('categories.*')->orderBy('id', 'desc');

        return DataTables::eloquent($query)
            ->addColumn('image', function ($data) {
                return '
                        <img src="' . $data['image'] . '" width="200" class="rounded">
                    ';
            })
            ->addColumn('action', function ($data) {
                $url = route('admin.category.edit', ['id' => $data['id']]);
                $delete = route('admin.category.delete', ['id' => $data['id']]);
                return '
                        <a href="' . $url . '" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-success btn-active-light-success m-1">Lihat</a>
                        <a href="' . $delete . '"  class="btn btn-sm btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger">Hapus</a>
                    ';
            })
            ->rawcolumns(['image', 'action'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:1024',
            ]);

            $image = Helpers::uploadToStorage($validated['image'], $validated['name'], 'photo');
            $validated['image'] = $image;

            Category::create($validated);

            return Helpers::successRedirect('admin.category', 'Successfully created Category');
        }catch (\Exception $e){
            return Helpers::errorRedirect($e->getMessage());
        }

    }

    public function edit(Request $request, $id)
    {
        return view('admin.category.detail')->with('category', Category::where('id', $id)->first());
    }

    public function update(Request $request, $id)
    {
        try {

            $validated = $request->validate([
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            ]);

            $category = Category::where('id',$id)->first();

            if ($validated['image']){
                Helpers::deleteFromStorage($category->image, 'photo');
                $image = Helpers::uploadToStorage($validated['image'], $validated['name'], 'photo');
                $data['image'] = $image;
            }

            $data['name'] = $validated['name'];

            $category->update($data);

            return Helpers::successRedirect('admin.category', 'Successfully updated Category');
        }catch (\Exception $e){
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Category::where('id',$id)->delete();

            return Helpers::successRedirect('admin.category', 'Successfully deleted Category');
        }catch (\Exception $e){
            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
