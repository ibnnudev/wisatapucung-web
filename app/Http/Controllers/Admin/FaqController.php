<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::all();
        return view('admin.faq.index', compact('data'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faq::create($request->except('_token'));
        toastify()->success('FAQ berhasil ditambahkan');
        return redirect()->route('admin.faq.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faq::findOrFail($id)->update($request->except('_token', '_method'));
        toastify()->success('FAQ berhasil diperbarui');
        return redirect()->route('admin.faq.index');
    }

    public function destroy(string $id)
    {
        Faq::findOrFail($id)->delete();
        toastify()->success('FAQ berhasil dihapus');
        return redirect()->route('admin.faq.index');
    }
}
