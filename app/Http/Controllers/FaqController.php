<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Header;
use App\Models\Logistic;
use App\Models\Whitelabel;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function faq()
    {
        $whitelabel = Whitelabel::all();
        $logistic = Logistic::all();
        $faqs = Faq::all();
        $header = Header::all();
        return view('faq', compact('whitelabel', 'logistic', 'faqs', 'header'));
    }

    public function details(Request $request, $slug)
    {
        $faqs = Faq::where('slug', $slug)->firstOrFail();
        $whitelabel = Whitelabel::all();
        $header = Header::all();
        return view('detailfaq', compact('faqs', 'whitelabel', 'header'));
    }
}
