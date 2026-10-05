<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function computer_engineering(){
        return view('website.courses.computer-engineering');
    }
     public function electronic_engineering(){
        return view('website.courses.electronic-engineering');
    }
     public function science_humanities(){
        return view('website.courses.science-humanities');
    }
     public function electrical_engineering(){
        return view('website.courses.electrical-engineering');
    }
     public function mechanical_engineering(){
        return view('website.courses.mechanical-engineering');
    }
      public function civil_engineering(){
        return view('website.courses.civil-engineering');
    }
     public function polytechnic(){
        return view('website.courses.courses-polytechnic');
    }
    public function polytechnic_me(){
        return view('website.courses.polytechnic-me');
    }
    public function polytechnic_me_p(){
        return view('website.courses.polytechnic-me-p');
    }
    public function polytechnic_ce(){
        return view('website.courses.polytechnic-ce');
    }
    public function polytechnic_ee(){
        return view('website.courses.polytechnic-ee');
    }

     public function b_pharm(){
        return view('website.courses.b-pharm');
    }
    public function d_pharm(){
        return view('website.courses.d-pharm');
    }

     public function mba(){
        return view('website.courses.mba');
    }

    public function mba_finance(){
        return view('website.courses.mba-finance');
    }
     public function mba_marketing(){
        return view('website.courses.mba-marketing');
    }
     public function mba_hrm(){
        return view('website.courses.mba-hrm');
    }
     public function mba_it(){
        return view('website.courses.mba-it');
    }
     public function mba_internation_business(){
        return view('website.courses.mba-international-business');
    }
    public function mba_operation_management(){
        return view('website.courses.mba-operation-management');
    }





}
