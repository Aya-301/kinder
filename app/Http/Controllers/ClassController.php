<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Teacher;
use App\Traits\Common;

class ClassController extends Controller
{
    use common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = ClassModel::paginate(2);
        return view ('admin.adminclasses', compact ('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::get();
        return view ('admin.addClass', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data= $request->validate([
            'teacherId'=>'required',
            'className'=>'required|string|max:50', 
            'class_image' => 'required|mimes:png,jpg,jpeg',
            'fromAge' => 'required',
            'toAge' => 'required',
            'fromTime' => 'required',
            'toTime' => 'required',
            'capacity' => 'required|string',
            'price' => 'required|string',
        ],$message);
        $fileName = $this->uploadFile($request->class_image, 'assets/images');    
        $data['class_image'] = $fileName;
        $data['active'] = isset($request-> active);
        ClassModel::create ($data);
        return redirect('admin/adminClasses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classes = ClassModel::findOrFail($id);
        return view('admin/showClass', compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classes = ClassModel::findOrFail($id);
        $teachers = Teacher::get();
        return view('admin/updateClass', compact('classes' ,'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->message();
        $data= $request->validate([
            'teacherId'=>'required',
            'className'=>'required|string|max:50', 
            'class_image' => 'sometimes|mimes:png,jpg,jpeg',
            'fromAge' => 'required',
            'toAge' => 'required',
            'fromTime' => 'required',
            'toTime' => 'required',
            'capacity' => 'required|string',
            'price' => 'required|string',
        ],$message);
        if($request->hasFile('class_image')){
            $fileName = $this->uploadFile($request->class_image, 'assets/images');    
            $data['class_image'] = $fileName;
            unlink("assets/images/" . $request->oldImage);
        }
        $data['active'] = isset($request-> active);
        ClassModel::where('id', $id)->update($data);
        return redirect('admin/adminClasses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ClassModel::where('id', $id)->delete();
        return redirect('admin/adminClasses');
    }
    public function trashed(){
        $classes=ClassModel::onlyTrashed()->get();
        return view('admin.trashClass', compact('classes'));
    }

    //to delete items from trash
    public function forceDelete(string $id){
        ClassModel::where('id', $id)->forceDelete();
        return redirect('admin/adminClasses');
    }

    //to restore item from trash
    public function restore(string $id){
        ClassModel::where('id', $id)->restore();
        return redirect('admin/adminClasses');
    }

    public function message(){
        return[
            'teacherId.required'=>' You Should choose a file',
            'className.required'=>'This field is required',
            'class_image.required'=>' You Should choose a file',
            'class_image.mimes'=> 'Incorrect image type',
            'class_image.max'=> 'Max file size exceeded',
            'fromAge.required'=>' This field is required',
            'toAge.required'=>' This field is required',
            'fromTime.required'=>' This field is required',
            'toTime.required'=>' This field is required',
            'capacity.required'=>' This field is required',
            'price.required'=>' This field is required',
        ];}
}
