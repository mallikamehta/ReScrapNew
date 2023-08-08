<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductController extends Controller
{
    public function index() {
        if(!Auth::check()) {
            return redirect('login');
        } else {
            $user = Auth::user();
            $product = Product::all();
            return view('products',compact('product','user'));
        }
    }

    public function editProduct($id)
    {
        $data = Product::where('id',$id)->first();
        return view('admin.editProduct',compact('data'));
    }
    public function cart()
    {
        if(!Auth::check()) {
            return redirect('login');
        } else {
            $user = Auth::user();
            return view('cart',compact('user'));
        }
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'category' => $product->category,
                'description' => $product->description,
                'price' => $product->price,
                'seller' => $product->seller
            ];
        }
        session()->put('cart',$cart);
        return redirect('cart')->withSuccess('Product added in cart successfully.');
    /*$data = Product::where('id',$id)->first();
        return view('admin.editProduct',compact('data'));*/
    }
    public function deleteCartProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success','Product is deleted from your cart.');
        }
    }

    

        public function order()
        {

            //check session 
            if(!Auth::check()) {
                return redirect('login');
            }

            $cart = session()->get('cart',[]);
            $user = Auth::user();

            $total=0;
            foreach ($cart as $id => $product )
            {
                $total = $total + $product['price']*$product['quantity'];
            }
            $orders_id = DB::table('orders')->insertGetId([
                'name' => $user->name,
                'email' => $user->email,
                'address' => $user->address,
                'total_amount' => $total
            ]);

            //$sub_total=0;
            foreach ($cart as $id => $product )
            {
                //$sub_total=$sub_total + ;
                DB::table('orders_details')->insert([
                    'orders_id' => $orders_id,
                    'product_name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => $product['quantity'],
                    'sub_amount' => $product['price']*$product['quantity']
                ]);
            }
            
        }
}
