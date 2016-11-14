<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Entities\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $contactData = $request->all();

        $contact = Contact::create($contactData);

        if($contact){
            //TODO: send email to admin with this data
            return $contact;
        }

        return ['success' => 'false', 'message' => trans('message.failed_save_contact')];
    }

}
