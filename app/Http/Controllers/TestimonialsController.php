<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialsController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view ('admin.adminTestimonials', compact ('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.addTestimonials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data= $request->validate([
            'clientName'=>'required|string|max:50',
            'profession'=>'required|string', 
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'content' => 'required'
        ],$message);
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
        $data['published'] = isset($request-> published);
        Testimonial::create ($data);
        return redirect('admin.adminTestimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.showTestimonial', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.updateTestimonials', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->message();
        $data= $request->validate([
            'clientName'=>'required|string|max:50',
            'profession'=>'required|string',
            'content' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
            
        ],$message);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');    
            $data['image'] = $fileName;
            unlink('assets/images/'. $request->oldImage);
        }
        $data['published'] = isset($request-> published);
        Testimonial::where('id', $id)->update ($data);
        return redirect('admin.adminTestimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect('admin.adminTestimonials');
    }

    //get deleted items from trash
    public function trashed(){
        $testimonials=Testimonial::onlyTrashed()->get();
        return view('admin.trashed', compact('testimonials'));
    }

    //to delete items from trash
    public function forceDelete(string $id){
        Testimonial::where('id', $id)->forceDelete();
        return redirect('admin.adminTestimonials');
    }

    //to restore item from trash
    public function restore(string $id){
        Testimonial::where('id', $id)->restore();
        return redirect('admin.adminTestimonials');
    }
    public function message(){
        return[
            'clientName.required'=>' This field is required ',
            'profession.string'=>'This field is required',
            'content.required'=>' This field is required',
            'image.required'=>' You Should choose a file',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            
        ];
    }
}