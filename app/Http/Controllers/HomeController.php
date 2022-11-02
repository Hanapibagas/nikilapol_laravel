<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\MerchanSyaratHeaderController;
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
use App\Models\Drivtutor;
use App\Models\Logistic;
use App\Models\Mengapa;
use App\Models\Mercbanner;
use App\Models\Merchant;
use App\Models\Merctutor;
use App\Models\Whitelabel;
use App\Models\Privacy;
use App\Models\Showcase;
use App\Models\ShowcaseGalleri;
use App\Models\Syaratdridel;
use App\Models\Syaratdrihed;
use App\Models\Syaratdrirew;
use App\Models\Syaratmerban;
use App\Models\Syaratmerdel;
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
        $galleri = ShowcaseGalleri::all();
        $showcase = Showcase::first();
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
        $gambar = Merctutor::all();
        $merchant = Merchant::all();

        return view('merchant', compact('whitelabel', 'merchant', 'mercbanner', 'merctutor', 'header', 'gambar'));
    }

    public function syaratmerchant() {
        $syaratmitra = Syaratmerdel::all();
        $syaratheader = Syaratmerban::all();
        $whitelabel = Whitelabel::all();
        $header = Header::all();
        return view('syaratmerchant', compact('whitelabel', 'header', 'syaratheader', 'syaratmitra'));
    }

    public function syaratdriver() {
        $syaratreward = Syaratdrirew::all();
        $driversyarat = Syaratdridel::all();
        $driveheader = Syaratdrihed::all();
        $whitelabel = Whitelabel::all();
        $header = Header::all();
        return view('syaratdriver', compact('whitelabel', 'header', 'driveheader', 'driversyarat', 'syaratreward'));
    }

    public function driver()
    {
        $drivemengapa = Mengapa::all();
        $drivetutor = Drivtutor::all();
        $drivetutorgambar = Drivtutor::all();
        $drivebenefit = Drivbenefit::all();
        $drivebanner = Drivbanner::all();
        $header = Header::all();
        $whitelabel = Whitelabel::all();
        return view('driver', compact('whitelabel', 'header', 'drivebanner', 'drivebenefit', 'drivetutor', 'drivemengapa', 'drivetutorgambar'));
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
