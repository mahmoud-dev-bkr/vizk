<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('about');
           // Set Meta Home

           metaGenerate($metaBanner);
        return view('front.courses.index',[
            'about' =>  \App\Models\About::first(),
            'metaBanner' => $metaBanner,
            'features' => \App\Models\Feature::get(),
            'courses' => \App\Models\Course::get()
        ]);
    }


    public function show($id = null)
    {
        $course = \App\Models\Course::find($id);
        // dd($course);    
        return view('front.courses.show', compact('course'));
    }

    public function UserRequest(Request $request)
    {
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'course_id' => 'nullable',
        ]);
        $UserRequest = \App\Models\UserRequest::create($request->all());
        return back()->with('success', 'Request Sent Successfully');
    }

    public function quiz()
    {
        return view('front.courses.quiz');
    }

    public function chats()
    {
        return view('front.courses.chats');
    }

}
