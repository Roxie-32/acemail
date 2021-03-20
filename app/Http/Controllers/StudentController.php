<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Constraint\Count;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function store(Request $request){
        $validator= Validator::make($request->all(), [
            'matric_number'=>'required|exists:students,matric_No',
        ]);

        $matric_no= $request->input('matric_number');
        //we are trying to avoid array here so we are picking the first object(limit 1) on the query
        $result= Student::where('matric_No',$matric_no)->first();


        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

            return view('new', ['result'=> $result]);
        
        

     
        
       

    }
}
