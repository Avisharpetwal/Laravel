<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    //
    function query(){
        //All data
        $result=DB::table('users')->get();

        //With Where Condition
        // $result=DB::table('users')->where('phone','12345')->get();


        //First value
        // $result=DB::table('users')->first();
        // $result=[$result];

        // return $result;
        return view('user',['xyz'=>$result]);


        //-----------------------------------Insert the data----------------------------
        // $result=DB::table('users')->insert([
        //     'name'=>'Tony',
        //     'email'=>'Tony@test.com',
        //     'phone'=>'1111',
        // ]);
        // if($result){
        //     return "Inserted SuccessFully";
        // }
        // else{
        //     return "No Data Inserted";
        // }




        //------------------------Update the Data----------------------------

        // $result=DB::table('users')->where('name','Tony')->update(['phone'=>'3333']);
        // if($result){
        //     return "Update SuccessFully";
        // }
        // else{
        //     return "No Data Updated";
        // }






        //------------------------delete the data----------------------------------
        // $result=DB::table('users')->where('name','Tony')->delete();
        // if($result){
        //     return "Delete SuccessFully";
        // }
        // else{
        //     return "No Data Deleted";
        // }

    }
}
