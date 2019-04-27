<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TestController extends Controller
{
    public function getForm() {

     return view('form');
    }




    public function postForm(Request $request) {
        $size = Storage::size($request['fichier']);
        $path = $request->file('fichier')->store('fichiers');
        return $path ;
        return $size;



}
