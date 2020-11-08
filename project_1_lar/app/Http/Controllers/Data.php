<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    function list(){
        //return Http::get('https://jsonplaceholder.typicode.com/posts%27);
        //return Http::get('https://jsonplaceholder.typicode.com/posts%27)-%3Ejson();
        $tab = Http::get('https://jsonplaceholder.typicode.com/albums')-> json();
        $fot = Http::get('https://jsonplaceholder.typicode.com/photos')-> json();

        return view ('data',['tab'=>$tab,'fot'=>$fot]);
    }
}
