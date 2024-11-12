<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ListProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $data        = Product::first();
        $listProduct = ListProduct::all();
        return view('admin.product.index', compact('data', 'listProduct'));
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
        $data = Product::findOrFail($id);
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $data->update($request->except('_token', '_method'));

        toastify()->toast('Data berhasil diubah');
        return redirect()->route('admin.product.index');
    }

    public function destroy(string $id)
    {
        //
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/product/' . $filename);
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

    // ::> Product - List Product
    public function storeListProduct(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads/product', $filename, 'public');

        ListProduct::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        toastify()->toast('Data berhasil ditambahkan');
        return redirect()->route('admin.product.index');
    }

    public function updateListProduct(Request $request, string $id)
    {
        $data = ListProduct::findOrFail($id);
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $this->handleImageUpload($request, $data, 'image', 'uploads/product');

        $data->update($request->except('_token', '_method', 'image'));

        toastify()->toast('Data berhasil diubah');
        return response()->json(['message' => 'Data berhasil diubah']);
    }

    public function destroyListProduct(string $id)
    {
        $data = ListProduct::findOrFail($id);
        Storage::disk('public')->delete('uploads/product/' . $data->image);
        $data->delete();

        toastify()->toast('Data berhasil dihapus');
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
