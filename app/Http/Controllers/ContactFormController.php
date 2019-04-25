<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function getForm() {

        return view('contact');
    }


    public function postForm(Request $request) {

        dd($request);

    }
}


