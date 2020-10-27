<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newUserController extends Controller
{
    function account(Request $req){
        //return $req->input();
        //return $req->path();
        //return $req->method();

        // $this->validate($req,['address' => 'required'],['address.required' => 'Adres nie moze byc pusty']);
        // $this->validate($req,['address' => 'min:5'],['address.min' => 'Mniej 5-u znakow']);

        $req->validate([
            'email' => 'required',
            'password' => 'required | min:3',
            'address' => 'required | min:5'
        ]);
        return <<<HEREDOC
        
        Name : {$req->input('Name')}<br>
        Gender : {$req->input('Gender')}<br>
        Email : {$req->input('email')}<br>
        Phone Number : {$req->input('phone')}<br>
HEREDOC;
        
    }
}
