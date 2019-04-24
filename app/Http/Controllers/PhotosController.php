<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{


    public function getForm() {


      return view('upload_form');
    }


    public function postForm(Request $request) {

      //dd($request->file('photos'));

      if($request->hasfile('photos'))
              {

      for($i = 0 ; $i < count($request->file('photos')) ; $i ++ ) {
      $path = $request->file('photos')[$i]->store('photos');



      }
      return back()->with("success", "Your images has been successfully uploaded");

    }
  }
}
