<?php

namespace App\Http\Controllers;

use App\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store()
    {
        Contact::create(request(['name', 'address', 'phone', 'email']));
        return redirect('/');
    }


}
