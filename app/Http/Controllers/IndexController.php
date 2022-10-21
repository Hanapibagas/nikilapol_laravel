<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Profit;
use App\Models\Service;
use App\Models\About;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $header = Header::all();
        $about = About::all();
        $banner = Banner::all();
        $category = Category::all();
        $profit = Profit::all();
        $service = Service::all();
        return view('id', compact(
            'header',
            'banner',
            'about',
            'category',
            'profit',
            'service',
        ));
    }

}
