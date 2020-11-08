<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class kursywalut extends Controller
{
    function list(){
    $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/C?format=json')->json();
    return view ('kursywalut',['tab'=>$tab]);
    }
}
