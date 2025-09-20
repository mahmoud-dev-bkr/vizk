<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HowWork;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('about');
           // Set Meta Home

           metaGenerate($metaBanner);
        return view('front.about.index',[
            'about' =>  \App\Models\About::first(),
            'metaBanner' => $metaBanner,
            'features' => \App\Models\Feature::get(),
        ]);
    }
}
