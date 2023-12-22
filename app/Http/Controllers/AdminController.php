<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;



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



    //PRODUCTS


    public function viewProduct(){

        $category  = Category::all();
        return view('admin.product',compact('category'));
    }


    public function addProduct(Request $request){

     $data =  $request->validate([
        
            'name'=>'required',
            'price'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc'=>'required',
            'quantity'=>'required',
            'discount_price'=>'required'

        ]);
      
        $data = $request->all();

        if($request->hasFile('img')){
            $img = $request->file('img');
            $imgName = time()."-".$img->getClientOriginalName();
            $path = $img->storeAs('product-img',$imgName);
            $data['img'] = $imgName;
        }

        


        Product::create($data);
       return redirect()->back()->with('message','Product added successfuly');

     


        }

        public function showProducts(){
            $products = Product::all();

            return view('admin.show-products',compact('products'));
        }
}
