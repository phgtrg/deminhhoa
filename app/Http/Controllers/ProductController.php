<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function get_all_student()
    {
        $students = student::all(); 
        return view('student_manage', ['students' => $students]);
    }
    public function get_student_by_id($id){

        $student = student::find($id);
        return view('student_edit', ['student' => $student]);
        
    }

    public function edit( Request $request ,Student $id){


        $id->update([
            'fullname' => $request->fullname,
            'address' => $request->address ,
            'birthday'=>$request->birthday,
        ]);

        $student = student::all();
        return redirect('/home');
    }
   
}
