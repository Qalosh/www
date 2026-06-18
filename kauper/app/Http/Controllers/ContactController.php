<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'message' => 'required',
        ]);

        ContactRequest::create([
            'name'    => $request->name,
            'phone'   => $request->phone,
            'email'   => $request->email,
            'message' => $request->message,
            'status'  => 'new',
        ]);

        return back()->with('contact_success', true);
    }
}