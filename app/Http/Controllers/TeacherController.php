<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\Common;

class TeacherController extends Controller
{
    use common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::paginate(2);
        return view ('admin.adminTeachers', compact ('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data= $request->validate([
            'position'=>'required|string|max:50',
            'teacherName'=>'required|string|max:50', 
            'image' => 'required|mimes:png,jpg,jpeg',
            'facebook' => 'required|string',
            'twiter' => 'required|string',
            'instagram' => 'required|string',
        ],$message);
        $fileName = $this->uploadFile($request->image, 'assets/images');    
        $data['image'] = $fileName;
        $data['active'] = isset($request-> active);
        Teacher::create ($data);
        return redirect('admin/adminTeachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin/showTeacher', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers= Teacher::findOrFail($id);
        return view('admin.updateTeacher', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->message();
        $data= $request->validate([
            'position'=>'required|string|max:50',
            'teacherName'=>'required|string|max:50', 
            'image' => 'sometimes|mimes:png,jpg,jpeg',
            'facebook' => 'required|string',
            'twiter' => 'required|string',
            'instagram' => 'required|string',
        ],$message);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');  
            $data['image'] = $fileName;
            unlink("assets/images/" . $request->oldImage);
        }
        $data['active'] = isset($request-> active);
        Teacher::where('id', $id)->update($data);
        return redirect('admin/adminTeachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::where('id', $id)->delete();
        return redirect('admin/adminTeachers');
    }
    public function trashed(){
        $teachers=Teacher::onlyTrashed()->get();
        return view('admin.teacherTrashed', compact('teachers'));
    }

    //to delete items from trash
    public function forceDelete(string $id){
        Teacher::where('id', $id)->forceDelete();
        return redirect('admin/adminTeachers');
    }

    //to restore item from trash
    public function restore(string $id){
        Teacher::where('id', $id)->restore();
        return redirect('admin/adminTeachers');
    }
    public function message(){
        return[
            'position.required'=>' This field is required ',
            'teacherName.required'=>'This field is required',
            'image.required'=>' You Should choose a file',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            'facebook.required'=>' This field is required',
            'twiter.required'=>' This field is required',
            'instagram.required'=>' This field is required',
        ];}
}
