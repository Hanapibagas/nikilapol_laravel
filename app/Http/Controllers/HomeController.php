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
use App\Models\Logistic;
use App\Models\Mercbanner;
use App\Models\Merchant;
use App\Models\Merctutor;
use App\Models\Whitelabel;
use App\Models\Privacy;
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
            'privacy'
        ));
    }

    public function layanan()
    {
        $whitelabel = Whitelabel::all();
        $layanan = Layanan::all();
        $category = Category::all();
        $logistic = Logistic::all();
        return view('layanan', compact('whitelabel', 'layanan', 'category', 'logistic'));
    }

    public function kontak()
    {
        $whitelabel = Whitelabel::all();
        return view('kontak', compact('whitelabel'));
    }

    public function privacy()
    {
        $whitelabel = Whitelabel::all();
        $header = Header::all();
        return view('privacy', compact('whitelabel', 'header'));
    }

    public function detailblog()
    {
        $whitelabel = Whitelabel::all();
        $blog = Blog::all();
        return view('detail', compact('whitelabel', 'blog'));
    }

    public function faq()
    {
        $whitelabel = Whitelabel::all();
        $logistic = Logistic::all();
        return view('faq', compact('whitelabel', 'logistic'));
    }

    public function merchant()
    {
        $whitelabel = Whitelabel::all();
        $mercbanner = Mercbanner::all();
        $merctutor = Merctutor::all();
        $merchant = Merchant::all();

        return view('merchant', compact('whitelabel', 'merchant', 'mercbanner', 'merctutor'));
    }

    public function driver()
    {
        $whitelabel = Whitelabel::all();
        return view('driver', compact('whitelabel'));
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
