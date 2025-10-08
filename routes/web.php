<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home/profile/user/add', function () {
//     return view('home');
// });




//Named Route 
Route::view('/home/profile/user/add','home')->name('hm');


 
Route::get('/about', function () {
    return view('about');
});


//Redirect for the page 
// Route::redirect('/home','/');


//Call Controller with Routing
Route::get('user',[UserController::class,'getName']);
Route::get('aboutuser',[UserController::class,'aboutUser']);
Route::get('aboutuser/{name}',[UserController::class,'username']);
Route::get('user',[UserController::class,'view']);




//Routing With Passing Data
// Route::get('/about/{name}', function ($name) {
//     echo $name;
//     return view('about');
// });


Route::get('avishar',[UserController::class,'userhome']);











//Form Handling 
Route::view('user-form','user-form');
//First Argu(adduser) match with form Action
Route::post('adduser',[UserController::class,'adduser']);