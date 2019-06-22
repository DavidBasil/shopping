<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;

class ProductsController extends Controller
{
    public function index(){
        /* $products = [ */
        /*     0 => ["name"=>"Iphone", "category"=>"smart phones", "price"=>1000], */
        /*     1 => ["name"=>"Galaxy", "category"=>"tablets", "price"=>2000], */
        /*     2 => ["name"=>"Sony", "category"=>"TV", "price"=>3000] */
        /* ]; */
        /* $products = DB::table('products')->get(); */
        $products = Product::all();

        return view('allproducts', compact('products'));
    }

    public function addProductToCart(Request $request, $id){
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);
        dump($cart);
    }
}
