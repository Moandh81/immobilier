<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BiensController extends Controller
{


    public function getForm() {

      return view('ajouter_bien');
    }


    public function postForm(Request $request) {

      //dd($request['ville']);


      $user = Auth::user();


      $bien = new Bien ;

      $bien->ville = $request['ville']  ;
      $bien->type_bien = $request['type_bien']  ;
      $bien->type_transaction = $request['type_transaction']  ;
      $bien->nbre_chambres = $request['nbre_chambres']  ;
      $bien->surface = $request['surface']  ;
      $bien->prix = $request['prix']  ;
      $bien->description = $request['description']  ;
      $bien->user_id = $user['id'];

      $bien->save();

      return redirect()->route('getListeBiens')->with('success', 'L\'ajout a été effectué avec succès');



    }


    public function getListeBiens() {

      $user = Auth::user();


      $biens = DB::table('biens') ->join('users', 'users.id', '=', 'biens.user_id')->where('users.id' , '=' , $user['id'])->get();
//dd($biens);

      return view('liste_biens', compact('biens'));


    }



    public function getUpdatedBien($id) {

      $bien = Bien::findOrFail($id);

      return view ('update_bien', compact('bien') );
    }


    public function postUpdatedBien($id, Request $request) {



      $bien = Bien::findOrFail($id);


      $bien->ville = $request['ville']  ;
      $bien->type_bien = $request['type_bien']  ;
      $bien->type_transaction = $request['type_transaction']  ;
      $bien->nbre_chambres = $request['nbre_chambres']  ;
      $bien->surface = $request['surface']  ;
      $bien->prix = $request['prix']  ;
      $bien->description = $request['description']  ;

      $bien->update();

      return redirect()->route('getListeBiens')->with('success', 'La mise à jour a été effectuée');


    }



    public function getDeleteBien($id) {

      $bien = Bien::findOrFail($id);
      $bien->delete();
      return redirect()->route('getListeBiens')->with('success', 'La Suppression a été effectuée avec succès');

    }
}