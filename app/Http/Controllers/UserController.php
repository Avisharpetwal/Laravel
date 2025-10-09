<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//for database
use Illuminate\Support\Facades\DB;
//Api 
use Illuminate\Support\Facades\Http;
use App\Models\User;



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
    // function users (){
    //     //Direct query 
    //     $users= DB::select('select * from users');
    //     return view('users',['abc'=>$users]);
    // }


    // Api 
    function getUser(){
        //For Api
        $response=Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return $response;

        //-------give the body of the api ------//
        $response= $response->body();
        return view('user',['data'=>json_decode($response)]);
        //-------give the status of response-----//
        // return $response->status();
    }





    //ELoquent Model:Query builder 
    function queries(){
        //--------------All the Data At Once---------------
        $result=User::all();
        // return $result;
        return view('users',['users'=>$result]);



        //--------------------------Data With Condition--------------
        // $result=User::where('phone','12345')->get();


        // -------------------------Find With Id 1
        // $result=User::find(1);
        // $result=[$result];




        //_-----------------insert the data ------------------------
        // $result=User::insert([
        //     'name'=>'Tarun',
        //     'email'=>'Tarun@test.com',
        //     'phone'=>'998877',
        // ]);

        // if($result){
        //     return "Inserted SuccessFully";
        // }
        // else{
        //     return "No Data Inserted";
        // }

        



        ///--------------------update the data (In this you have to add timestamp in your model)

        //  $result=User::where('name','Tarun')->update(['phone'=>'9999']);
        // if($result){
        //     return "Update SuccessFully";
        // }
        // else{
        //     return "No Data Updated";
        // }



    }



// Session 
    function login(Request  $request){
        //for name input  only
        // $request->session()->put('user',$request->input('user'));



        
        //For All  input
        $request->session()->put('alldata',$request->input());
        
        return redirect('profile');
    }


    function logout(){
        session()->pull('user');
        return redirect('profile');

    }
}
