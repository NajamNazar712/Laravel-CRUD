<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DisplayController extends Controller
{
    public function display(){

        $data = DB::SELECT('select * from cruds');

        return view('home', ['value'=>$data]);
        
    }
}
