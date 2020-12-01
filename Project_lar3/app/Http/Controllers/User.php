<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    function index(){
        //return DB::table('user')->get();

        //return DB::table('user')->where('name','Pavel')->get();

        //$data = DB::table('user')->find();
        //print_r($data);

        //return DB::table('user')->where('name', 'Pavel')->delete();

        //return DB::table('user')->insert(['name'=>'Anna','surname'=> 'Nowak','birthday'=>'2019-10-29']);
        $data = DB::table('user')
        ->select('user.name','user.surname','city.city')
        ->leftjoin('city','city_id','city.id')
        ->join('state','state_id','state.id')
        ->get();

        echo '<pre>';
            print_r($data);
        echo '</pre>';
    }
}
