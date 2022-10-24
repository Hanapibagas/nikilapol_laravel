<?php

namespace App\Http\Controllers;

use App\Models\Faq;
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
        return view('faq', compact('whitelabel', 'logistic', 'faqs'));
    }
}
