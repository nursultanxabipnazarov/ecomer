<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewCategory(){

        $Categories = Category::all();
        return view('admin.category',compact('Categories'));
    }


    public function addCategory(Request $request){
        $request->validate([
            'name'=>'required'
        ]);

        Category::create($request->all());
        return redirect()->back()->with('message','Categorya added successfully');

    }


    public function destroyCategory($id){
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('del','Category deleted');
    }
}
