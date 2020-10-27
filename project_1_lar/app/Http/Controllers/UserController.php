<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function account(Request $req){
        //return $req->input();
        //return $req->path();
        //return $req->method();

        // $this->validate($req,['address' => 'required'],['address.required' => 'Adres nie moze byc pusty']);
        // $this->validate($req,['address' => 'min:5'],['address.min' => 'Mniej 5-u znakow']);

        $req->validate([
            'email' => 'required | email',
            'password' => 'required | min:3',
            'address' => 'required | min:5 | max:8'
        ],
        [
            'email.required' => 'Email jest wymagany!',
            'password.required' => 'Password jest wymagany!',
            'password.min' => 'Password min 3 znaka',
            'address.required' => 'Adres nie moze byc pusty',
            'address.min' => 'Adres  min 5 znakow'
        ]);
        return $req->input();
        
    }
}
