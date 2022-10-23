<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request) {
        $contacts = Contact::all();
        if ($request->has('search')) {
            $contacts = Contact::where('name', 'like', "%{$request->search}%")->orWhere('email', 'like', "%{$request->search}%")->get();
        }
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create() {
        return view('contact');
    }

    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'body' => $request->body,
            'organization' => $request->organization
        ]);

        return redirect()->back()->with('message', 'We got your message. We will return back to you soon!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin-messages-index')->with('message', 'Message Deleted Succesfully');
    }
}
