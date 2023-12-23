<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;









class MainController extends Controller
{

    public function index(){
        $products =  Product::paginate(5);
        return view('home.index',compact('products'));
    }
    public function dash(){
       $userType =  Auth::user()->user_type;
       


        if($userType==1){
            return view('admin.home');
        }else{
            $products =  Product::paginate(5);
            return view('home.index', compact('products'));

        }
    }

    public function detalisProduct($id){
        $product = Product::findOrFail($id);
        return view('home.detalis-product',compact('product'));
    }


}
