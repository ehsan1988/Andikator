<?php

namespace App\Http\Controllers;

use App\Letter;

class LetterController extends Controller
{
    public function index()
    {
        $letters = Letter::all();
        return view('pages.index', compact('letters'));

    }

    public function show()
    {
        return view('pages.single');
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store()
    {
        Letter::create([
            'title' => request('title'),
            'body' => request('body'),
            'contact_id' => request('contact_id'),
            'type' => request('type'),
            'attachment_id' => 1,
        ]);
        return redirect('/');
    }
}
