<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('admin.blog.index', compact('data'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:1048',
            'keyword'   => 'required',
            'content'   => 'required',
            'creator'   => 'required'
        ]);

        $filename = time() . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->storeAs('uploads/blogs', $filename, 'public');

        Blog::create([
            'title'     => $request->title,
            'slug'      => Str::slug($request->title),
            'thumbnail' => $filename,
            'keyword'   => $request->keyword,
            'tag'       => 'Berita',
            'content'   => $request->content,
            'status'    => 'published',
            'creator'   => $request->creator
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.blog.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'     => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:1048',
            'keyword'   => 'required',
            'content'   => 'required',
            'status'    => 'required',
            'creator'   => 'required'
        ]);

        $data = Blog::findOrFail($id);
        $data->fill($request->except([
            '_token',
            '_method',
            'thumbnail'
        ]));

        if ($request->hasFile('thumbnail')) {
            if ($data->thumbnail) {
                Storage::disk('public')->delete("public/blogs/" . $data->thumbnail);
            }

            $filename = time() . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->storeAs('uploads/blogs', $filename, 'public');
            $data->thumbnail = $filename;
        }

        $data->save();

        toastify()->toast('Data berhasil diperbarui');
        return redirect()->route('admin.blog.index');
    }

    public function destroy(string $id)
    {
        $data = Blog::findOrFail($id);
        if ($data->thumbnail) {
            Storage::disk('public')->delete("public/blogs/" . $data->thumbnail);
        }

        $data->delete();
        toastify()->toast('Data berhasil dihapus');
        return redirect()->route('admin.blog.index');
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/blogs/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    public function getBlogImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/blogs/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }
}
