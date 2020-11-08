<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    function index(Request $req){
        $req->Session()->put('data', $req->input());
        // return $req->Session()->get('data');
        return redirect('profile');
    }
}
