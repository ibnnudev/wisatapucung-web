<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accomodation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccomodationController extends Controller
{
    public function index()
    {
        $data = Accomodation::first();
        return view('admin.accomodation.index', compact('data'));
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
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $accomodation = Accomodation::findOrFail($id);

        $accomodation->title = $request->title;
        $accomodation->description = $request->description;

        $this->handleImageUpload($request, $accomodation, 'image', 'uploads/accomodation');

        $accomodation->save();

        toastify()->toast('Data penginapan berhasil diperbarui');
        return redirect()->route('admin.accomodation.index');
    }

    public function destroy(string $id)
    {
        //
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/accomodation/' . $filename);
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
}
