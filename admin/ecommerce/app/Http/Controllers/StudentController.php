<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
     public function index(){
        return view('welcome');
    }

     public function create(){
        return view('create');
    }

     public function store(Request $request){
         $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
         ]);
         $student = new Students;
         $student->first_name = $request->firstname;
         $student->last_name = $request->lastname;
         $student->email = $request->email;
         $student->phone = $request->phone_number;
         $student->save();
         return redirect(route('home'))->with('successMsg', 'Student Successfully added');
     }
}
