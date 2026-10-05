<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.create-category');
    }
    public function category_store(Request $request){
        $request->validate([
            'category'=>'string|max:255',
        ]);
        DB::table('category')->insert([
            'category'=>$request->category,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect()->route('sub.category')->with('success','Category Registered Successfully');
    
    }

    public function sub_category(){
        $categories=categoryModel::all();
        return view('admin.create-subcategory',compact('categories'));
    }
    public function subcategory_store(Request $request){
    $request->validate([
        'category_id' => 'required|integer',
        'sub_category' => 'string|max:255',
    ]);

    DB::table('sub_category')->insert([
        'category_id'   => $request->category_id,
        'sub_category'  => $request->sub_category,
        'created_at'    => now(),
        'updated_at'    => now(),
    ]);

    return redirect()->back()->with('success','Sub Category Registered Successfully');
}

}
