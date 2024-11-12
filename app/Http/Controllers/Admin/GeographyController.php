<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demography;
use App\Models\Disaster;
use App\Models\Geographic;
use App\Models\Topography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeographyController extends Controller
{
    public function index()
    {
        $data       = Geographic::first();
        $demography = Demography::all();
        $topography = Topography::all();
        $disaster   = Disaster::all();

        return view('admin.geography.index', compact('data', 'demography', 'topography', 'disaster'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request) {}

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
        $data = Geographic::findOrFail($id);

        $this->handleImageUpload($request, $data, 'section1_hero_image', 'uploads/geography');
        $this->handleImageUpload($request, $data, 'section3_image1', 'uploads/geography');
        $this->handleImageUpload($request, $data, 'section3_image2', 'uploads/geography');

        $data->fill($request->except([
            '_token',
            '_method',
            'section1_hero_image',
            'section3_image1',
            'section3_image2',
        ]));

        $data->save();
        toastify()->toast('Data berhasil diubah');
        return redirect()->route('admin.geography.index');
    }

    public function destroy(string $id)
    {
        //
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

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get("uploads/geography/$filename");
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // ::> Geography - Demography
    public function storeDemography(Request $request)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/geography', $filename, 'public');

        Demography::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.geography.index');
    }

    public function updateDemography(Request $request, string $id)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = Demography::findOrFail($id);
        $this->handleImageUpload($request, $data, 'image', 'uploads/geography');

        $data->title       = $request->title;
        $data->description = $request->description;
        $data->save();

        toastify()->toast('Data berhasil diubah');
        return response()->json(['message' => 'Data berhasil diubah']);
    }

    public function destroyDemography(string $id)
    {
        $data = Demography::findOrFail($id);
        Storage::disk('public')->delete("uploads/geography/" . $data->image);
        $data->delete();

        toastify()->toast('Data berhasil dihapus');
        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    // ::> Geography - Topography
    public function storeTopography(Request $request)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/geography', $filename, 'public');

        Topography::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.geography.index');
    }

    public function updateTopography(Request $request, string $id)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = Topography::findOrFail($id);
        $this->handleImageUpload($request, $data, 'image', 'uploads/geography');

        $data->title       = $request->title;
        $data->description = $request->description;
        $data->save();

        toastify()->toast('Data berhasil diubah');
        return response()->json(['message' => 'Data berhasil diubah']);
    }

    public function destroyTopography(string $id)
    {
        $data = Topography::findOrFail($id);
        Storage::disk('public')->delete("uploads/geography/" . $data->image);
        $data->delete();

        toastify()->toast('Data berhasil dihapus');
        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    // ::> Geography - Disaster
    public function storeDisaster(Request $request)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/geography', $filename, 'public');

        Disaster::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.geography.index');
    }

    public function updateDisaster(Request $request, string $id)
    {
        $request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = Disaster::findOrFail($id);
        $this->handleImageUpload($request, $data, 'image', 'uploads/geography');

        $data->title       = $request->title;
        $data->description = $request->description;
        $data->save();

        toastify()->toast('Data berhasil diubah');
        return response()->json(['message' => 'Data berhasil diubah']);
    }

    public function destroyDisaster(string $id)
    {
        $data = Disaster::findOrFail($id);
        Storage::disk('public')->delete("uploads/geography/" . $data->image);
        $data->delete();

        toastify()->toast('Data berhasil dihapus');
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
