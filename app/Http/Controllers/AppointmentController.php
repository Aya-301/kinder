<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointment = Appointment::paginate(2);
        return view ('admin.adminApp', compact ('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data= $request->validate([
            'gurdian_name'=>'required|string|max:50',
            'gurdian_email'=>'required|string', 
            'child_name' => 'required|string',
            'child_age' => 'required|string',
            'message' => 'required|string'
        ],$message);
        Appointment::create ($data);
        return redirect('admin/adminApp');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin/updateApp', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->message();
        $data= $request->validate([
            'gurdian_name'=>'required|string|max:50',
            'gurdian_email'=>'required|string', 
            'child_name' => 'required|string',
            'child_age' => 'required|string',
            'message' => 'required|string'
        ],$message);
        Appointment::where('id', $id)->update ($data);
        return redirect('admin/adminApp');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::where('id', $id)->forceDelete();
        return redirect('admin/adminApp');
    }
    public function message(){
        return[
            'gurdian_name.required'=>' This field is required ',
            'gurdian_email.required'=>'The Email is required',
            'child_name.required'=>' This field is required',
            'child_age.required'=>'This field is required' ,
            'message.required'=> 'This field is required',
        ];
    }
}
