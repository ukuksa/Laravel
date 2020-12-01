<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cdv1 extends Controller
{
    public function show(){
        $users = DB::table('user')->paginate(2);
        return view('users',['data' => $users]);
    }
}
