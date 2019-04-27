<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contact ;

class ContactFormController extends Controller
{
    public function getForm() {

        return view('contact');
    }


    public function postForm(Request $request) {

      $data=$request->validate([
         'nom' => 'required',
         'email' => 'required|email',
         'message' => "required"
     ]) ;

     Mail::to($request['email'])->send(new Contact($data));

     return redirect()->route('getContactForm')->with('success', 'Votre message a bien été envoyé.
      Nous prenons contact avec vous dans les plus brefs délais');



    }
}
