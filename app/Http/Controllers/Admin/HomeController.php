<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\HomeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $data      = Home::first();
        $homeItems = HomeItem::all();

        return view('admin.home.index', [
            'data'          => $data,
            'section2Items' => $homeItems->where('section_number', 2),
            'section7Items' => $homeItems->where('section_number', 7),
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
        $data = Home::findOrFail($id);

        $this->handleImageUpload($request, $data, 'section1_image', 'uploads/home');
        $this->handleImageUpload($request, $data, 'section2_image', 'uploads/home');
        $this->handleImageUpload($request, $data, 'section3_image', 'uploads/home');
        $this->handleImageUpload($request, $data, 'section4_image', 'uploads/home');
        $this->handleImageUpload($request, $data, 'section5_image', 'uploads/home');
        $this->handleImageUpload($request, $data, 'section6_image', 'uploads/home');

        $data->fill($request->except([
            '_token',
            '_method',
            'section1_image',
            'section2_image',
            'section3_image',
            'section4_image',
            'section5_image',
            'section6_image',
        ]));

        $data->save();

        toastify()->toast('Data berhasil diubah');
        return redirect()->route('admin.home.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(string $id)
    {
        //
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/home/' . $filename);
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

    public function storeItem(Request $request)
    {
        $request->validate([
            'section_number' => 'required|numeric',
            'title'          => 'required|string',
            'image'          => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description'    => 'required|string',
        ]);


        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('uploads/home', $filename, 'public');
        }

        HomeItem::create($request->except('_token', 'image') + ['image' => $filename]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.home.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function updateItem(Request $request, string $id)
    {
        $request->validate([
            'section_number' => 'required|numeric',
            'title'          => 'required|string',
            'image'          => 'image|mimes:jpeg,png,jpg,webp|max:2048',
            'description'    => 'required|string',
        ]);

        $data = HomeItem::findOrFail($id);

        $this->handleImageUpload($request, $data, 'image', 'uploads/home');

        $data->fill($request->except('_token', '_method', 'image'));
        $data->save();

        toastify()->toast('Data berhasil diubah');
        return response()->json([
            'message' => 'Data berhasil diubah',
        ]);
    }

    public function destroyItem(string $id)
    {
        $data = HomeItem::findOrFail($id);

        if ($data->image) {
            Storage::disk('public')->delete("uploads/home/" . $data->image);
        }

        toastify()->toast('Data berhasil dihapus');
        return response()->json([
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
