<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class kalkulatorwalut extends Controller
{
    function index(Request $req){
        $inputs = $req->input();
        $value = $inputs['amount'];
        $currencyType = $inputs['currency'];

        $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/C?format=json')->json();
        $usd = $tab[0]['rates'][0]['bid'];
        $euro = $tab[0]['rates'][3]['bid'];
        $frank = $tab[0]['rates'][5]['bid'];

        if($currencyType == 'USD'){
            $final = $value / $usd;
        }else if($currencyType == 'Euro'){
            $final = $value / $euro;
        }else{
            $final = $value / $frank;
        }
        $final = intval($final);
        $string = "Za kwotę $value można zakupić $final $currencyType";
        return view('kalkulatorwalut',['string'=>$string]);
    }
}