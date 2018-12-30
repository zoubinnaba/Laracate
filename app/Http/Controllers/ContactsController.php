<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\CreateMessageCreated;
use App\Models\Message;
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
        $message = Message::create($request->only('name', 'email', 'message'));

    	Mail::to(config('laracarte.admin_support_email'))
            ->send(new CreateMessageCreated($message));

    	flashy('Nous vous repondrons dans les plus brefs delais!');

    	return redirect()->route('root_path');
    }
}
