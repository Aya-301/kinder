<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Teacher;
use App\Models\ClassModel;

class KindController extends Controller
{

    public function home()
    {
        $teachers = Teacher::where('active', 1)->paginate(2);
        $testimonials = Testimonial::where('published', 1)->paginate(2);
        $classes = ClassModel::where('active', 1)->paginate(2);
        return view ('index', compact ('teachers', 'testimonials', 'classes'));
    }
    public function team()
    {
        $teachers = Teacher::paginate(2);
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
        $classes = ClassModel::paginate(2);
        return view ('classes', compact ('classes'));
    }
    public function appointment()
    {
        return view('appointment');
    }
    public function testimonials ()
    {
        $testimonials = Testimonial::paginate(2);
        return view ('testimonials', compact ('testimonials'));
    }
    public function facilities()
    {
        return view('facilities');
    }
}
