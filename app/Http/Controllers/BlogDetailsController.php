<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Whitelabel;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function details(Request $request, $slug)
    {
        $items = Blog::where('slug', $slug)->firstOrFail();
        $whitelabel = Whitelabel::all();

        return view('detail', compact('items', 'whitelabel'));
    }
}
