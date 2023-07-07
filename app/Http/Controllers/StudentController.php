<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\StudentGrade;
use App\Models\Township;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function addStudent(){
        $grade=StudentGrade::all();
        $class=StudentClass::all();
        return view('school.add-student',['grade'=>$grade,'class'=>$class]);
    }

    function addGrade(Request $request){
        StudentGrade::insert([
            'grade_name'=>$request->grade,
        ]);
        return redirect()->back();
    }

    function addClass(Request $request){
        StudentClass::insert([
            'class_name'=>$request->class,
        ]);
        return redirect()->back();
    }

    function addTownship(Request $request){
        Township::create([
            'township'=>$request->township,
        ]);
        return redirect()->back();
    }

    function searchTownship(Request $request){
        $data=$request->data;
        $township=Township::where('township','Like',"%{$data}%")->get();
        return response($township);
    }
}
