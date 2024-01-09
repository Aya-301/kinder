<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KindController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function team()
    {
        return view('teachers');
    }
    public function error ()
    {
        return view('404');
    }

    public function calltoaction()
    {
        return view('becomeAteacher');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function classes()
    {
        return view('classes');
    }
    public function appointment()
    {
        return view('appointment');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
    public function facilities()
    {
        return view('facilities');
    }
}
