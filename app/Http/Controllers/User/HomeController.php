<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Bussiness;
use App\Models\Demography;
use App\Models\Disaster;
use App\Models\Faq;
use App\Models\Geographic;
use App\Models\Home;
use App\Models\HomeItem;
use App\Models\Potential;
use App\Models\Topography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $data     = Home::first();
        $homeItem = HomeItem::all();
        $blogs    = Blog::latest()->limit(4)->get();
        $faqs     = Faq::all();

        return view('user.home', compact('data', 'homeItem', 'blogs', 'faqs'));
    }

    public function about()
    {
        $data = AboutUs::first();
        $bussiness = Bussiness::all();
        $potentials = Potential::all();
        $faqs = Faq::all();

        return view('user.about', compact('data', 'bussiness', 'potentials', 'faqs'));
    }

    public function demography()
    {
        $data = Geographic::first();
        $demography = Demography::all();
        $topography = Topography::all();
        $disasters = Disaster::all();

        return view('user.demography', compact('data', 'demography', 'topography', 'disasters'));
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

    public function accommodation()
    {
        return view('user.accommodation');
    }

    public function tourPackage()
    {
        return view('user.tour_package');
    }

    public function getImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/home/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    public function getBlogImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/blogs/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    public function getAttractionImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/attractions/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // product
    public function getProductImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/products/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // organization
    public function getOrganizationImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/organizations/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // accommodation
    public function getAccommodationImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/accommodations/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // tour package
    public function getTourPackageImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/tour-packages/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // about us
    public function getAboutUsImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/about-us/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }

    // geographic
    public function getGeographyImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/geography/' . $filename);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }
}
