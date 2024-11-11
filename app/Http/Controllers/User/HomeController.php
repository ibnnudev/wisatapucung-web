<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::first();
        return view('user.home', compact('data'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function demography()
    {
        return view('user.demography');
    }

    public function attraction()
    {
        return view('user.attraction');
    }

    public function information()
    {
        return view('user.information');
    }

    public function informationDetail($slug)
    {
        return view('user.information_detail', compact('slug'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function product()
    {
        return view('user.product');
    }

    public function organization()
    {
        return view('user.organization');
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/home/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }
}
