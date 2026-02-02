<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        // TEMPORARY: just return back (DB later)
        return redirect()->back()->with('success', 'Message sent!');
    }
}
