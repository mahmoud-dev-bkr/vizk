<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner = getMeta('blog');
           // Set Meta Home
           metaGenerate($metaBanner);
           

        return view('front.blogs.index',[
            'blogs' =>  "",
            'metaBanner' => $metaBanner
        ]);
    }

    public function show($id)
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('blog');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.blogs.show',[
            'blog' =>  \App\Models\Blog::findOrFail($id),
            'latestBlogs' =>  \App\Models\Blog::latest()->take(5)->get(),
            'metaBanner' => $metaBanner
        ]);
    }
}
