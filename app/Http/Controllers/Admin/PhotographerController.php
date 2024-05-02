<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photographer;
use App\Utilities\Helpers;
use Illuminate\Http\Request;
use DataTables;

class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
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
							<img src="'.$item['photo'].'" alt="" data-kt-docs-datatable-subtable="template_image">
						</a>
                    ';
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('admin.photographer.detail')->with('photographer', Photographer::where('id', $id)->with('user', 'province', 'city')->first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
            ]);

            Category::create($validated);

            return Helpers::successRedirect('admin.category', 'Successfully created Category');
        }catch (\Exception $e){
            return Helpers::errorRedirect($e->getMessage());
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request, $id)
    {
        return view('admin.category.detail')->with('category', Category::where('id', $id)->first());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
            ]);

            Category::where('id',$id)->update($validated);

            return Helpers::successRedirect('admin.category', 'Successfully updated Category');
        }catch (\Exception $e){
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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
