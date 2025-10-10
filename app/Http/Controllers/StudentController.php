<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function getStudents(){

        $students=\App\Models\Student::all();
        // return   $students;
        return view('students',['data'=>$students]);
    }


    function add(Request $request){

        $students=new Student();
        $students->name=$request->name;
        $students->email=$request->email;
        $students->phone=$request->phone;
        $students->save();

        if($students){
            echo"Added SuccessFully";
        }
        else{
            echo"Not Added yet";
        }
        // return $request;
        // return" Student Added SuccessFully";
    }


    function list(){
        $studentdata=Student::all();
        return view('list-student',['studentd'=>$studentdata]);
    }
}
