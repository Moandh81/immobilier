<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;

class UsersController extends Controller
{

    public function getUsers() {


        $users = User::All();



        return view('liste_users', compact('users')) ;

    }


    public function postUsers(Request $request) {



        $roles= $request->except('_token');

        foreach($roles as $key=> $role){

          $user= User::whereId($key)->first();

          $user->update(['role'=>$role]);

         /* $user->role=$role;

          $user->save();*/



        }

        return back();

    }

}
