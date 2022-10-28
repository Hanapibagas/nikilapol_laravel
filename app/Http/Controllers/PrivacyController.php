<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use App\Models\Whitelabel;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index(){
        $privacy = Privacy::all();
        $whitelabel = Whitelabel::all();
        return view('/privacy', compact('privacy', 'whitelabel'));
    }
}
