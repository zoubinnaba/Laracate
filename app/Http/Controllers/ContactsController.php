<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('Contacts.create');
    }

    public function store(ContactRequest $request)
    {
		return new CreateMessageCreated($request->name, $request->email, $request->msg)
    }
}
