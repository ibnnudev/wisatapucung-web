<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get the first row from the home table
        $data = Home::first();
        return view('admin.home.index', compact('data'));
    }

    public function put(Request $request)
    {
        dd($request->all());
        return redirect()->route('admin.home.index');
    }
}
