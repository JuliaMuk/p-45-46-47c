<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/first', function(){
//     $a = 3;
//     $b = 5;
//     $c = $a + $b;
//     return view('first',compact('a','b','c'));
// });


Route::get('/first', [MainController::class,'show'])->name('first');

Route::get('/students',[StudentController::class,'index'])
        ->name('students.index');

