<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactRegistered;
use App\Models\Entities\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
        $contactData = $request->all();

        $contact = Contact::create($contactData);

        if($contact)
        {
            Mail::to(['enriquerguezs@hotmail.com','enriquerguezs@gmail.com'])->send(new ContactRegistered($contact));

            return $contact;
        }

        return ['success' => 'false', 'message' => trans('message.failed_save_contact')];
    }

}
