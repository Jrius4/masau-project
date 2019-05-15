<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;
Use Mail;

class ContactUsController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('emails.contactUS');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
       $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
        ]);

        ContactUs::create($request->all());

        Mail::send('emails.email',
       array(
           'first_name' => $request->get('first_name'),
           'last_name' => $request->get('last_name'),
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('kazibwejuliusjunior@gmail.com');
       $message->to('kazibwejuliusjunior@outlook.com', 'Admin')->subject('Masau Website Feedback');
   });

       return back()->with('success', 'Thanks for contacting us!');
   }

}
