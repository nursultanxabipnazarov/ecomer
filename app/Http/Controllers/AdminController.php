<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewCategory(){
        return view('admin.category');
    }


    public function addCategory(Request $request){
        $request->validate([
            'name'=>'required'
        ]);

        Category::create($request->all());
        return redirect()->back()->with('message','Categorya added successfully');

    }
}
