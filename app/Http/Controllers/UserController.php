<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //All data One time 
    // return $req;

    //One At A time 
    echo "User name is ".$req->username;
    echo"<br>";
    echo "User email is " .$req->email;
    echo"<br>";
    echo "User City is ".$req->city;
    echo"<br>";
    }
}
