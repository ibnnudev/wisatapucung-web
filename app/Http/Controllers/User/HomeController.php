<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
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
}
