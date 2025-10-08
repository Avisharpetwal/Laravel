<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::view('home','home');
Route::view('about','about');



//MiddleWare  For Single Route 
// Route::view('home','home')->middleware('check1');
// Route::view('about','about');



//Named Route 
// Route::view('/home/profile/user/add','home')->name('hm');


 
Route::get('/about', function () {
    return view('about');
});





//Redirect for the page 
// Route::redirect('/home','/');


//Call Controller with Routing
// Route::get('user',[UserController::class,'getName']);
// Route::get('aboutuser',[UserController::class,'aboutUser']);
// Route::get('aboutuser/{name}',[UserController::class,'username']);
// Route::get('user',[UserController::class,'view']);


//Group Of Middleware To Group Of Routes
// Route::middleware('check1')->group(function(){
// Route::view('home','home');
// Route::view('about','about');
// Route::view('contact','home');
// Route::view('list','about');
// });


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




//Database
Route::get('users',[UserController::class,'users']);



Route::get('students',[StudentController::class,'getStudents']);







