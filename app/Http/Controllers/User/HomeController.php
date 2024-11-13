<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Accomodation;
use App\Models\Attraction;
use App\Models\Blog;
use App\Models\Bussiness;
use App\Models\Demography;
use App\Models\Disaster;
use App\Models\Faq;
use App\Models\Geographic;
use App\Models\Home;
use App\Models\HomeItem;
use App\Models\ListAttraction;
use App\Models\Potential;
use App\Models\Topography;
use App\Models\TourPackage;
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
        $data = Attraction::first();
        $listAttraction = ListAttraction::all();
        return view('user.attraction', compact('data', 'listAttraction'));
    }

    public function information()
    {
        $blogs = Blog::latest()->get();
        return view('user.information', compact('blogs'));
    }

    public function informationDetail($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        $relatedBlog = Blog::where('tag', $data->tag)->where('slug', '!=', $slug)->limit(3)->get();
        return view('user.information_detail', compact('data'));
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
        $data = Accomodation::first();
        return view('user.accommodation', compact('data'));
    }

    public function tourPackage()
    {
        $listTourPackage = TourPackage::all()->groupBy('category');
        return view('user.tour_package', compact('listTourPackage'));
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
        $file = Storage::disk('public')->get('uploads/attraction/' . $filename);
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
    public function getAccomodationImage(string $filename)
    {
        $file = Storage::disk('public')->get('uploads/accomodation/' . $filename);
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
