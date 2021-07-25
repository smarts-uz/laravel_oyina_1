<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;

class VoyagerContactController extends VoyagerBaseController
{
    public function contact()
    {
        return view('site.contact.contact');
    }

    public function contactMessage(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')->with('success','Post created successfully.');
    }}
