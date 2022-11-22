<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){

        $name = "elhadj";
        $age = 45;
        //$tab = array('name' -> $name ,'age' -> 45);

        return view('myview',compact('name','age'));
    }
}
