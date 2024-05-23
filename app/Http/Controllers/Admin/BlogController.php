<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use App\Models\Package;
use App\Models\Photographer;
use App\Utilities\Helpers;
use Illuminate\Http\Request;
use DataTables;

class BlogController extends Controller
{

    public function index()
    {
        return view('admin.blogs.index');
    }

    public function data(Request $request)
    {
        $query = Blog::select('blogs.*')->orderBy('id', 'desc');

        return DataTables::eloquent($query)
            ->addColumn('banner', function ($data) {
                return '
                        <img src="' . $data['banner'] . '" width="100" class="rounded">
                    ';
            })
            ->addColumn('action', function ($data) {
                $url = route('admin.blog.edit', ['id' => $data['id']]);
                $delete = route('admin.blog.destroy', ['id' => $data['id']]);
                return '
                        <a href="' . $url . '" class="btn btn-sm btn-outline btn-outline-dashed btn-outline-success btn-active-light-success m-1">Lihat</a>
                        <a href="' . $delete . '"  class="btn btn-sm btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger">Hapus</a>
                    ';
            })
            ->rawcolumns(['action', 'banner'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'category' => 'required|string',
                'title' => 'required|string',
                'description' => 'required|string',
                'banner' => 'required|image|mimes:jpg,png,jpeg|max:1024',
            ]);

            $image = Helpers::uploadToStorage($validated['banner'], $validated['title'], 'blog');

            Blog::query()->create([
                'user_id' => auth()->user()->id,
                'category' => $validated['category'],
                'title' => $validated['title'],
                'description' => $validated['description'],
                'banner' => $image,
                'slug' => \Str::slug($validated['title'])
            ]);

            return Helpers::successRedirect('admin.blog', 'Successfully create blog');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        try {
            $validated = $request->validate([
                'category' => 'required|string',
                'title' => 'required|string',
                'description' => 'required|string',
                'banner' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            ]);

            $blog = Blog::where('id', $id)->first();

            if ($validated['banner']) {
                Helpers::deleteFromStorage($blog->banner, 'blog');
                $image = Helpers::uploadToStorage($validated['banner'], $validated['title'], 'blog');
                $blog->banner = $image;
            }

            $blog->title = $validated['title'];
            $blog->description = $validated['description'];
            $blog->category = $validated['category'];
            $blog->slug = \Str::slug($validated['title']);
            $blog->save();

            return Helpers::successRedirect('admin.blog', 'Successfully updated blog');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function edit($id)
    {
        $blog = Blog::query()->findOrFail($id);
        return view('admin.blogs.detail')->with('blog', $blog);
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::where('id', $id)->first();
            Helpers::deleteFromStorage($blog->banner, 'blog');
            $blog->delete();

            return Helpers::successRedirect('admin.blog', 'Successfully deleted blog');
        } catch (\Exception $e) {
            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
