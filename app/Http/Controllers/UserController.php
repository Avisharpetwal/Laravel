<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//for database
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getName(){
        return "My Name Is Avishar Petwal";
    }
    function aboutUser(){
        return " Hello Everyone  I Am Avishar Petwal ";
    }
    function username($name){
        return " Hello Everyone this Side  ".$name;
    }

    function view(){
        return view('user');
    }


    function userHome(){
        $name="Avishar";
        $user=['Avp','Sonu','Neelima'];
        return view('avishar',['names'=>$name,"users"=>$user]);
    }
    
    
    
    function adduser(Request  $req){

    //Validation For Form Data
    $req->validate([
        'username'=>'required|min:3 |max:10',
        'email'=>'required |email',
        'city'=>'required |max:20',
        'skill'=>'required',

    ],[
        //Custom Valid Message for the Form Fields
        'username.required'=>'Enter the Your Name here',
        'username.min'=>' Name must be greater than 3 ',
        'username.max'=>'Name must be less  than 10',
        'email.email'=>'Enter Correct  Email',
    ]);
    //All data One time
    //  return $req;


    //One At A time 
    // echo "User name is : ".$req->username;
    // echo"<br>";
    // echo "User email is  :" .$req->email;
    // echo"<br>";
    // echo "User City is : ".$req->city;
    // echo"<br>";
    
    // echo "User City is : ".$req->gender;
    // echo"<br>";
    // // echo"User Skills is ".print_r($req->skill,true);
    // echo "User Skills: <pre>" . print_r($req->skill, true) . "</pre>";

    }
    //Database
    function users (){
        //Direct query 
        $users= DB::select('select * from users');
        return view('users',['abc'=>$users]);
    }


}
