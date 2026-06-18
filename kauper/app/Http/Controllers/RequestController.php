<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'message' => 'required',
        ]);

        ContactRequest::create($request->all());

        return back()->with('success', 'Вашу заявку відправлено! Ми зв\'яжемось з вами найближчим часом.');
    }

    public function adminIndex()
    {
        $requests = ContactRequest::orderBy('created_at', 'desc')->get();
        return view('admin.requests.index', compact('requests'));
    }

    public function updateStatus(Request $request, $id)
    {
        $item = ContactRequest::findOrFail($id);
        $item->update(['status' => $request->status]);
        return redirect('/admin/requests')->with('success', 'Статус оновлено!');
    }
}