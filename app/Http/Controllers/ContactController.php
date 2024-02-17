<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $data = $request->all();
    
        // Send email
        Mail::to('dagmawi@zcradle.com')->send(new ContactFormMail($data));
    
        // Show Toastr success message
         Toastr::success('Your application request save as draft successfully');

        // Return response
        return redirect()->back();
    }
    
    

    public function showContactForm()
    {
        return view('contact');
    }

    
}
