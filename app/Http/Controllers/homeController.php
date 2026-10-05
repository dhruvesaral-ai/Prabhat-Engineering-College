<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
   
    
    public function admission_store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'mobile'=>'required|string|digits:10',
            'email'=>'required|string|email',
            'courses'=>'required|string|max:255',
        ]);
        // dd($request->all());
        DB::table('admission_enquiry')->insert([
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'courses'=>$request->courses,
        ]);
    }

    public function contact_store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email',
            'mobile'=>'required|string|digits:10',
            'city'=>'required|string|max:255',
            'courses'=>'required|string|max:255',
            'state'=>'required|string|max:255',
            'qualification'=>'required|string|max:255'
        ]);
        DB::table('contact')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'city'=>$request->city,
            'courses'=>$request->courses,
            'state'=>$request->state,
            'qualification'=>$request->qualification,
        ]);
        return redirect()->back()->with('success','Contact Detailed Submitted Successfully');
    }
}
