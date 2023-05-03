<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $student = Student::get();

        return view('index',compact('student'));
    }

    public function create(){
        return view('add');
    }

    public function add(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->last_name = $request->lastName;
        $student->nick_name = $request->nickName;
        $student->phone_number = $request->phoneNumber;
        $student->save();

        return redirect()->back();
        
    }

    public function edit($id){
        $student=Student::findorFail($id);
        return view('update',compact('student'));
    }

    public function update(Request $request ,$id){
        $student = Student::findOrFail($id);    
        $student->name = $request->namee;
        $student->last_name = $request->lastNamee;
        $student->nick_name = $request->nickNamee;
        $student->phone_number = $request->phoneNumberr;
        $student->save();   

        return redirect()->back();
    }

    public function delete($id){
        $student = Student::findOrFail($id)->delete();
        return redirect()->back();
    }
}
