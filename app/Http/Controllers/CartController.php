<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CloutPackages;
use Alert;

class CartController extends Controller
{
    public function cart()
    {
        return view('user.cart');
    }

    public function addToCart($id)
    {
        $product = CloutPackages::find($id);
 
        if(!$product) {
 
            alert()->error('Product Not Found','404');            
            return redirect()->back();
        } 
 
        $cart = session()->get('cart');
 
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->package_name,
                        "quantity" => 1,
                        "price" => $product->package_price
                    ]
            ];
 
            session()->put('cart', $cart); 
            alert()->success('Item added to cart','Success');  
            return redirect()->back();

        }
 
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart); 
            alert()->success('Item added to cart','Success');  
            return redirect()->back();

        } 

        $cart[$id] = [
            "name" => $product->package_name,
            "quantity" => 1,
            "price" => $product->package_price
        ];
 
        session()->put('cart', $cart);
        alert()->success('Item added to cart','Success');  
        return redirect()->back();
        
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}

