<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $table = array('Dyskietka','Dysk twardy','Dysk ssd');
    public function show($dysk){
        if($dysk == 'fdd'){
            return $this->table[0];
        }
        elseif($dysk == 'hdd'){
            return $this->table[1];
        }
        elseif($dysk == 'ssd'){
            return $this->table[2];
        }
        
    }
}
