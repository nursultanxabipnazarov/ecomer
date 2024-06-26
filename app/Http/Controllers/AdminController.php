<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use PDF;






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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10000',
            'desc'=>'required',
            'quantity'=>'required',


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

        public function deleteProduct($id){
            $product = Product::findOrFail($id);
            $product->delete();

           return redirect()->back()->with('del','product deleted!');

        }

        public function updateProduct($id){
            $product = Product::findOrFail($id);

            return view('admin.update-product',compact('product'));

        }

        public function searchProduct(Request $request){

            $search  = $request->search;
            $products  = Product::where('name','LIKE','%'.$search.'%')->get();
            return view('admin.show-products',compact('products'));
        }


        //Order


        public function showOrder(){

            $orders = Order::all();
             return view('admin.order',compact('orders'));

        }


        public function deliveryStatus($id){

            $order = Order::findOrFail($id);
            $name = $order->user_name;

            Order::where('id',$id)->update(['delivery_status'=>'delivered']);


           return  redirect()->back()->with('message',$name.'ga jetkerildi');




        }

        public function pdfPrint($id){

            $order = Order::findOrFail($id);

            $pdf = PDF::loadView('admin.order-pdf',compact('order'));
            return $pdf->download('chek_order.pdf');

        }

        public function viewPdf(){

            return view('admin.order-pdf');
        }
}
