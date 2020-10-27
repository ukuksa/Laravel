<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function account(Request $req){
        //return $req->input();
        //return $req->path();
        //return $req->method();

        $this->validate($req,['address' => 'required'],['address.required' => 'Adres nie moze byc pusty']);
        $this->validate($req,['address' => 'min:5'],['address.min' => 'Mniej 5-u znakow']);

        $req->validate([
            'email' => 'required | email',
            'password' => 'required | min:3',
            'address' => 'required | min:5'
        ]);
        return $req->input();
        
    }
}
