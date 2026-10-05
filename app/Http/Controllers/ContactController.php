<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_us(){
        return view('website.contact-us.contact-us');
    }

     public function gallery_records(){
        return view('website.gallery.gallery_records');
    }

    
}
