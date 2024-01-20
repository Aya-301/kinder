<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Teacher;

class KindController extends Controller
{
    public function home()
    {
        $teachers = Teacher::get();
        $testimonials = Testimonial::get();
        return view ('index', compact ('teachers', 'testimonials'));
    }
    public function team()
    {
        $teachers = Teacher::get();
        return view ('teachers', compact ('teachers'));
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
    public function testimonials ()
    {
        $testimonials = Testimonial::get();
        return view ('testimonials', compact ('testimonials'));
    }
    public function facilities()
    {
        return view('facilities');
    }
}
