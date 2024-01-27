<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Mail\email;
use Mail;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts= ContactUs::paginate(2);
        return view('admin.adminContacts',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->message();
        $data= $request->validate([
            'name'=>'required|string',
            'email'=>'required|string', 
            'subject' => 'required|string',
            'message' => 'required|string',
        ],$message);
        ContactUs::create ($data);
        Mail::to('yoya@email.com')->send(
            new email($data));
        return redirect('admin/adminContacts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts = ContactUs::findOrFail($id);
        return view('admin/showContact', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ContactUs::where('id', $id)->forceDelete();
        return redirect('admin/adminContacts');
    }
    public function message(){
        return[
            'name.required'=>' This field is reqired',
            'email.required'=>'The email is required',
            'subject.required'=>' This field is reqired',
            'message.required'=> 'This field is reqired',
        ];}
}
