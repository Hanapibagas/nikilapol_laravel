<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Whitelabel;
use App\Models\Detailblog;
use Illuminate\Http\Request;

class DetailblogController extends Controller
{
  public function index($id){
        $blog = Blog::all()->where('id', $id);
        $whitelabel = whitelabel::all();
        $detailblog = Detailblog::all();
        return view('/detail', compact('detailblog', 'whitelabel', 'blog'));
    }
}
