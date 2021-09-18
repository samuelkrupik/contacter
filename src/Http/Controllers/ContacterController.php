<?php

namespace SamuelKrupik\Contacter\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use SamuelKrupik\Contacter\Http\Requests\StoreContactRequest;
use SamuelKrupik\Contacter\Mail\ContacterMailable;
use SamuelKrupik\Contacter\Models\Contact;

class ContacterController extends Controller
{
    public function show()
    {
        return view('contacter::contact-us');
    }

    public function store( StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to(config('contacter.send_to'))
            ->queue(new ContacterMailable($contact));

        return redirect()->route('contacter.show')->with(["message" => "Email sent successfully!"]);
    }
}
