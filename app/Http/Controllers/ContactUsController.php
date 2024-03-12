<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\RedirectResponse;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }
    public function send(ContactUsRequest $contactUsRequest): RedirectResponse
    {
        $validatedData = $contactUsRequest->validated();
        ContactUs::create($validatedData);

        return redirect()->route('contact')->with('success', 'Request was sent');
    }
}
