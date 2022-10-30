<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Mitra;
use App\Models\Banner;
use App\Models\Header;
use App\Models\Profit;
use App\Models\Layanan;
use App\Models\Service;
use App\Models\Category;
use App\Models\Drivbanner;
use App\Models\Drivbenefit;
use App\Models\Logistic;
use App\Models\Mercbanner;
use App\Models\Merchant;
use App\Models\Merctutor;
use App\Models\Whitelabel;
use App\Models\Privacy;
use App\Models\Showcase;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }

    public function root()
    {
        $galleri = Showcase::all()->firstOrFail();
        $showcase = Showcase::all();
        $header = Header::all();
        $about = About::all();
        $blog = Blog::orderBy('id', 'desc')->get();
        $banner = Banner::all();
        $category = Category::all();
        $profit = Profit::all();
        $service = Service::all();
        $mitra = Mitra::all();
        $whitelabel = Whitelabel::all();
        $privacy = Privacy::all();
        return view('index', compact(
            'header',
            'banner',
            'about',
            'category',
            'profit',
            'blog',
            'service',
            'whitelabel',
            'mitra',
            'privacy',
            'showcase',
            'galleri',
        ));
    }

    public function layanan()
    {
        $header = Header::all();
        $whitelabel = Whitelabel::all();
        $layanan = Layanan::all();
        $category = Category::all();
        $logistic = Logistic::all();
        return view('layanan', compact('whitelabel', 'layanan', 'category', 'logistic', 'header'));
    }

    public function kontak()
    {
         $header = Header::all();
        $whitelabel = Whitelabel::all();
        return view('kontak', compact('whitelabel', 'header'));
    }

    public function privacy()
    {
        $whitelabel = Whitelabel::all();
        $header = Header::all();
        return view('privacy', compact('whitelabel', 'header'));
    }

    public function detailblog()
    {
         $header = Header::all();
        $whitelabel = Whitelabel::all();
        $blog = Blog::all();
        return view('detail', compact('whitelabel', 'blog', 'header'));
    }

    public function faq()
    {
         $header = Header::all();
        $whitelabel = Whitelabel::all();
        $logistic = Logistic::all();
        return view('faq', compact('whitelabel', 'logistic', 'header'));
    }

    public function detailfaq()
    {
         $header = Header::all();
        $whitelabel = Whitelabel::all();
        $logistic = Logistic::all();
        return view('detailfaq', compact('whitelabel', 'logistic', 'header'));
    }

    public function merchant()
    {
         $header = Header::all();
        $whitelabel = Whitelabel::all();
        $mercbanner = Mercbanner::all();
        $merctutor = Merctutor::all();
        $merchant = Merchant::all();

        return view('merchant', compact('whitelabel', 'merchant', 'mercbanner', 'merctutor', 'header'));
    }

    public function driver()
    {
        $drivebenefit = Drivbenefit::all();
        $drivebanner = Drivbanner::all();
        $header = Header::all();
        $whitelabel = Whitelabel::all();
        return view('driver', compact('whitelabel', 'header', 'drivebanner', 'drivebenefit'));
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }
}
