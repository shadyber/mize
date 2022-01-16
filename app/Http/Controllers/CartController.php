<?php

namespace App\Http\Controllers;

use App\Models\Item;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Item::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" =>$product->id,
                    "slug"=>$product->slug,
                    "name" => $product->name,
                    "quantity" => 1,

                    "price" => $product->price,
                    "photo" => $product->photo,
                    "thumb" => $product->thumb
                ]
            ];

            session()->put('cart', $cart);
            return count(session()->get('cart'));
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return count(session()->get('cart'));

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "slug" => $product->slug,
            "id" => $product->id,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo,
            "thumb" => $product->thumb
        ];

        session()->put('cart', $cart);
        return count(session()->get('cart'));
        //    return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function addMultipleToCart($id,$qnt)
    {
        $product = Item::find($id);


        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" =>$product->id,
                    "slug"=>$product->slug,
                    "name" => $product->name,
                    "quantity" => $qnt,
                    "price" => $product->price,
                    "photo" => $product->photo,
                    "thumb" => $product->thumb
                ]
            ];

            session()->put('cart', $cart);
            return count(session()->get('cart'));
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']+=$qnt;

            session()->put('cart', $cart);

            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return count(session()->get('cart'));

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "slug" => $product->slug,
            "id" => $product->id,
            "quantity" => $qnt,
            "price" => $product->price,
            "photo" => $product->photo,
            "thumb" => $product->thumb
        ];

        session()->put('cart', $cart);
        return count(session()->get('cart'));
        //    return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function removeCart($id)
    {

        $cart=session()->get('cart');
        if(!$cart){
            return redirect()->back();
        }else if(!$cart[$id]){
            return redirect()->back();
        }
        if($cart[$id]){
            unset($cart[$id]);
        }
        session()->put('cart',$cart);
        return redirect()->back();
    }
    public function destroyCart(){
        Session()->remove('cart');
        return redirect()->back();
    }
    public  function  myCart(){
        return view('cart.index');
    }

}
