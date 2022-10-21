<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index(){
        $privacy = Privacy::all();
        return view('/privacy', compact('privacy'));
    }
}
