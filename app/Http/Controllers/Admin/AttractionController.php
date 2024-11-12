<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attraction;
use App\Models\ListAttraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionController extends Controller
{
    public function index()
    {
        $data           = Attraction::first();
        $listAttraction = ListAttraction::all();

        return view('admin.attraction.index', [
            'data'           => $data,
            'listAttraction' => $listAttraction,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $data = Attraction::findOrFail($id);

        $data->fill($request->except([
            '_token',
            '_method',
        ]));

        $data->save();

        toastify()->toast('Data berhasil diperbarui');
        return redirect()->route('admin.attraction.index');
    }

    public function destroy(string $id)
    {
        //
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/attraction/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    public function handleImageUpload(Request $request, $data, $fieldName, $path)
    {
        if ($request->file($fieldName)) {
            $request->validate([
                $fieldName => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            ]);

            // Delete old image if it exists
            if ($data->$fieldName) {
                Storage::disk('public')->delete("$path/" . $data->$fieldName);
            }

            // Generate new filename and store the file
            $filename = time() . '.' . $request->file($fieldName)->extension();
            $request->file($fieldName)->storeAs($path, $filename, 'public');

            // Set only the filename to be stored in the database
            $data->$fieldName = $filename;
        }
    }

    // ::> List Attraction
    public function storeListAttraction(Request $request)
    {
        $request->validate([
            'title'        => 'required|string',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'items'       => 'nullable|string',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/attraction', $filename, 'public');

        ListAttraction::create([
            'title'        => $request->title,
            'description' => $request->description,
            'image'       => $filename,
            'items'       => $request->items ?? null,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.attraction.index');
    }

    public function updateListAttraction(Request $request, string $id)
    {
        $request->validate([
            'title'        => 'required|string',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'items'       => 'nullable|string',
        ]);

        $data = ListAttraction::findOrFail($id);

        $data->fill($request->except([
            '_token',
            '_method',
            'image',
        ]));

        $this->handleImageUpload($request, $data, 'image', 'uploads/attraction');

        $data->save();

        toastify()->toast('Data berhasil diperbarui');
        return response()->json([
            'message' => 'Data berhasil diperbarui',
        ]);
    }

    public function destroyListAttraction(string $id)
    {
        $data = ListAttraction::findOrFail($id);

        if ($data->image) {
            Storage::disk('public')->delete("uploads/attraction/" . $data->image);
        }

        $data->delete();

        toastify()->toast('Data berhasil dihapus');
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
