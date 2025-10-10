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







    // Function To add the data 
    function add(Request $request){

        $students=new Student();
        $students->name=$request->name;
        $students->email=$request->email;
        $students->phone=$request->phone;
        $students->save();

        if($students){
            return redirect('list');
        }
        else{
            echo"Not Added yet";
        }
        // return $request;
        // return" Student Added SuccessFully";
    }

    //Function to Show the Data
    function list(){
        $studentdata=Student::all();
        return view('list-student',['studentd'=>$studentdata]);
    }

    function delete($id){
        $isDeleted=Student::destroy($id);
        if($isDeleted){
            return redirect('list');
        }


    }
    function edit($id){
        $student=Student::find($id);
        return view('edit',['data'=>$student]);
    }

    
    function editstudent( Request $request ,$id){
        $student=Student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
       if( $student->save()){
        return redirect('list');
       }
       else{
        return "Not Edited";
       }

    }
}
