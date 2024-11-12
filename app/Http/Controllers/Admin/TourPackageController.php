<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index()
    {
        $data = TourPackage::all();
        return view('admin.tour_package.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tour_package.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        TourPackage::create($request->except('_token'));
        toastify()->success('FAQ berhasil ditambahkan');
        return redirect()->route('admin.tour-package.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = TourPackage::findOrFail($id);
        return view('admin.tour_package.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        TourPackage::findOrFail($id)->update($request->except('_token', '_method'));
        toastify()->success('FAQ berhasil diperbarui');
        return redirect()->route('admin.tour-package.index');
    }

    public function destroy(string $id)
    {
        TourPackage::findOrFail($id)->delete();
        toastify()->success('FAQ berhasil dihapus');
        return redirect()->route('admin.tour-package.index');
    }
}
