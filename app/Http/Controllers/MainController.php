<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show(){
        $array = ["one", "two", "three"];
        return view('first',compact('array'));
    }
}
