<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Product;
// use App\Cart;
use Session;
use Cart;

use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
    
    // public function add(Request $request, $id){
        
    //     $product = Product::find($id);
    //     if(empty($_SESSION['cart']) || !array_key_exists($id, $_SESSION['cart'])){
    //         $product['quantity'] = 1;
    //         $_SESSION['cart'][$id] = $product;
    //     } else{
    //         $product['quantity'] += $_SESSION['cart'][$id]['quantity'] +1;
    //         $_SESSION['cart'][$id] = $product;
       
    //     }
    //     return view('cart.index',compact('product'));
    // }
    
    // public function add( Request $request, $id){
    //         $product =  Product::where('id', $id)->first();
    //         if($product !=null){
    //             $oldCart = Session('Cart') ? Session('Cart') : null;
    //             $newCart = new Cart($oldCart);  
    //             $newCart->AddCart($product, $id);
    //             $request->Session()->put('Cart', $newCart);
           
    //         }
    //         return view('cart.index',compact('newCart'));
    // }

    public function add( Request $request, $id){
        $proId = $request->productid_hidden;
        $quantity = $request->qty;      
        $product = Product::where('id',$proId)->first();
        $data['id'] = $product->id;
        $data['qty'] = $quantity;
        $data['name'] = $product->name;
        $data['price'] = $product->price - (($product->price*$product->discount)/100); 
        $data['weight'] = '123';
        $data['options']['image'] = $product->image;
        Cart::add($data);
        // $content = Cart::content();
        return redirect::to('/show-cart');
    }

    public function show_cart(){
       
        return view('cart.index');
    }

    public function delete_cart($rowId){
        Cart::update($rowId,0);
        return redirect::to('/show-cart');
    }

    public function update_cart(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        cart::update($rowId,$qty);
        
        return Redirect::to('/show-cart');
    }

}
