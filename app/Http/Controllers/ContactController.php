<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
    public function add(Request $request)
    {
        
           $contact = new Contact();

           $contact->name = $request->input('name');
           
           $contact->email = $request->input('email');

           $contact->message = $request->input('message');

           $contact->save();            
           
           return redirect('/index');

    }

    public function show()
    {

        $data = Contact::all();

        return view("auth.admin.contacts" , ['contacts' => $data]);

    }

    public function delete(Request $request ,$id)
    {
         $contact = Contact::find($id);

         $contact->delete();

         return redirect('contacts');

    }  
}
