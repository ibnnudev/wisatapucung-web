<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListOrganization;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    public function index()
    {
        $data             = Organization::first();
        $listOrganization = ListOrganization::all();

        return view('admin.organization.index', compact('data', 'listOrganization'));
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
        $data = Organization::findOrFail($id);

        $this->handleImageUpload($request, $data, 'section1_image', 'uploads/organization');

        $data->update($request->except(['_token', '_method', 'section1_image']));

        toastify()->toast('Data berhasil diperbarui');
        return redirect()->route('admin.organization.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        //
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/organization/' . $filename);
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

    // ::> Organization - List Organization
    public function storeListOrganization(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);


        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/organization', $filename, 'public');

        ListOrganization::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.organization.index');
    }

    public function updateListOrganization(Request $request, string $id)
    {
        $data = ListOrganization::findOrFail($id);

        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->file('image')) {
            Storage::disk('public')->delete("uploads/organization/" . $data->image);

            $filename = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('uploads/organization', $filename, 'public');

            $data->image = $filename;
        }

        $data->title       = $request->title;
        $data->description = $request->description;
        $data->save();

        toastify()->toast('Data berhasil diperbarui');
        return redirect()->route('admin.organization.index');
    }

    public function destroyListOrganization(string $id)
    {
        $data = ListOrganization::findOrFail($id);

        if ($data->image) {
            Storage::disk('public')->delete("uploads/organization/" . $data->image);
        }

        $data->delete();

        toastify()->toast('Data berhasil dihapus');
        return redirect()->route('admin.organization.index');
    }
}
