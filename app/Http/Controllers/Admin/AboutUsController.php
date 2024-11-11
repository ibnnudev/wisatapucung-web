<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Bussiness;
use App\Models\Potential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = AboutUs::first();
        $bussiness = Bussiness::all();
        $potentials = Potential::all();
        return view('admin.about.index', [
            'data' => $data,
            'bussiness' => $bussiness,
            'potentials' => $potentials,
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
        $data = AboutUs::findOrFail($id);

        $this->handleImageUpload($request, $data, 'section1_image', 'uploads/about-us');

        $data->fill($request->except([
            '_token',
            '_method',
            'section1_image',
        ]));

        $data->save();
        toastify()->toast('Data berhasil diubah');
        return redirect()->route('admin.about-us.index');
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
        $file = Storage::disk('public')->get('uploads/about-us/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // ::> About Us - Bussiness
    public function storeBussiness(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/about-us', $filename, 'public');

        Bussiness::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.about-us.index');
    }

    public function updateBussiness(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = Bussiness::findOrFail($id);

        $this->handleImageUpload($request, $data, 'image', 'uploads/about-us');

        $data->fill($request->except([
            '_token',
            '_method',
            'image',
        ]));

        $data->save();
        toastify()->toast('Data berhasil diubah');
        return response()->json([
            'message' => 'Data berhasil diubah',
        ]);
    }

    public function destroyBussiness(string $id)
    {
        $data = Bussiness::findOrFail($id);
        Storage::disk('public')->delete('uploads/about-us/' . $data->image);
        $data->delete();
        toastify()->toast('Data berhasil dihapus');
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ]);
    }

    // ::> About Us - Potential
    public function storePotential(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/about-us', $filename, 'public');

        Potential::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.about-us.index');
    }

    public function updatePotential(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = Potential::findOrFail($id);

        $this->handleImageUpload($request, $data, 'image', 'uploads/about-us');

        $data->fill($request->except([
            '_token',
            '_method',
            'image',
        ]));

        $data->save();
        toastify()->toast('Data berhasil diubah');
        return response()->json([
            'message' => 'Data berhasil diubah',
        ]);
    }

    public function destroyPotential(string $id)
    {
        $data = Potential::findOrFail($id);
        Storage::disk('public')->delete('uploads/about-us/' . $data->image);
        $data->delete();
        toastify()->toast('Data berhasil dihapus');
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
