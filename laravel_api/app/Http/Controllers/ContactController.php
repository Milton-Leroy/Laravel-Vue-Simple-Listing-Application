<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contact::all();

        return response()->json(
            [
                'contacts' => $contacts,
                'message' => 'Contact  Listing',
                'code' => 200
            ]
        );
    }

    public function saveContacts(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();

        return response()->json(
            [
                'message' => 'Contact Saved Successfully!',
                'code' => 200
            ]
        );
    }
}
