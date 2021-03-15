<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function store(Request $request){
        // $this->validate($request, [
        //     'matric_no'=>'required',
        // ]);

        $matric_no= $request->input('matric_no');
        //we are trying to avoid array here so we are picking the first object(limit 1) on the query
        $result= Student::where('matric_No',$matric_no)->first();
        
        //shey u saw 
        return view('new', ['result'=> $result]);

    }
}
