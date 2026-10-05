<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about_us(){
        return view('website.about.about-us');
    }
    public function director_message(){
        return view('website.about.director-message');
    }
    public function chairman_message(){
        return view('website.about.chairman-message');
    }
    public function administrator(){
        return view('website.about.administrator');
    }
   
    public function pricipal_message(){
        return view('website.about.pricipal-message');
    }
    public function pharmacy_principal_message(){
        return view('website.about.pharmacy-principal-message');
    }
   
   
   
}
