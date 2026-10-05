<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
   public function student_login(){
    return view('auth.student-login');
   }
   public function student_logedin(Request $request){
    
   }
}
