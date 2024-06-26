<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;









class MainController extends Controller
{

    public function index(){
        $products =  Product::paginate(8);
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



    public function addToCart(Request $request, $id){

     if(Auth::check()){

        $user = Auth::user();
        $product = Product::findOrFail($id);

        if($product->discount_price!=NULL){
            $price = $product->discount_price;
        }
        else
        {
            $price = $product->price;
        }

        $total_price = $price * $request->count;
        Cart::create([
            'product_id'=>$product->id,
            'user_id'=>$user->id,
            'user_name'=>$user->name,
            'email'=>$user->email,
            'phone'=>$user->phone,
            'address'=>$user->adress,
            'product_name'=>$product->name,
            'img'=>$product->img,
            'price'=>$price,
            'total_price'=>$total_price,
            'quantity'=>$request->count
           ]);

         return  redirect()->route('showCart')->with('message','Product Added Cart');


            }
                else{

                   return redirect()->route('login')->with('message','Satip aliwdi qaleseniz dizimnen otin!');
                }



    }

    public function showCart(){

        if(Auth::check()){
            $id = Auth::user()->id;
            $carts  = Cart::where('user_id','=',$id)->get();
            return view('home.show-cart',compact('carts'));
        }else{
            return redirect()->route('login');
        }

    }

    public function removeCart($id){

        $cart = Cart::findOrFail($id);
        $cart->delete();

       return redirect()->back()->with('message','Cart deleted successfuly!');




    }


    public  function addCashOrder(){
        $user = Auth::user();
        $cart = Cart::where('user_id','=',$user->id)->get();
        
        foreach($cart as $cart){
            Order::create([
                'product_id'=>$cart->product_id,
                'user_id'=>$cart->user_id,
                'user_name'=>$cart->user_name,
                'email'=>$cart->email,
                'phone'=>$cart->phone,
                'address'=>$cart->address,
                'product_name' => $cart->product_name,
                'img'=>$cart->img,
                'price'=>$cart->price,
                'total_price'=>$cart->total_price,
                'quantity'=>$cart->quantity,
                'payment_status'=>'cash',
                'delivery_status'=>'processing'
            ]);
            $cart_id = $cart->id;
            $oldCart = Cart::findOrFail($cart_id);
            $oldCart->delete();
        }
        return redirect()->back()->with('message','Your order has been sent successfully');
    }
}
