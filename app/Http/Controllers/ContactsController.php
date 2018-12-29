<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\CreateMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('Contacts.create');
    }

    public function store(ContactRequest $request)
    {
    	$mailable = new CreateMessageCreated($request->name, $request->email, $request->msg);

    	Mail::to('admin@laracarte.com')->send($mailable);

    	return 'Done!';
    }
}
