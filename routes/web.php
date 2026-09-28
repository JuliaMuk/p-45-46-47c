<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function(){
    $a = 3;
    $b = 5;
    $c = $a + $b;
    return view('first',compact('a','b','c'));
});
