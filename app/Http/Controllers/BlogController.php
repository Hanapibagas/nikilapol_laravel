<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Header;
use App\Models\Whitelabel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
         $header = Header::all();
        $whitelabel = Whitelabel::all();
        $blog = Blog::all();
        return view('blog', compact('whitelabel', 'blog', 'header'));
    }
}
