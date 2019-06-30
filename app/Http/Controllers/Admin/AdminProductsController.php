<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Product;

class AdminProductsController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('admin/displayProducts', ['products' => $products]);
    }

    public function editProductForm($id){
        $product = Product::find($id);
        return view('admin/editProductForm', ['product' => $product]);
    }

    public function editProductImageForm($id){
        $product = Product::find($id);
        return view('admin/editProductImageForm', ['product' => $product]);
    }

    public function updateProductImage(Request $request, $id){
        Validator::make($request->all(), ['image' => 'required|file|image|mimes:jpg,png,jpeg|max:5000'])->validate();
        if($request->hasFile('image')){
            $product = Product::find($id);
            $exists = Storage::disk('local')->exists('public/product_images/'.$product->image);
            if($exists){
                Storage::delete('public/product_images/'.$product->image);
            }
            $ext = $request->file('image')->getClientOriginalExtension();
            $request->image->storeAs('public/product_images/', $product->image);
            $arrayToUpdate = array('image' => $product->image);
            DB::table('products')->where('id', $id)->update($arrayToUpdate);
            return redirect()->route('adminDisplayProducts');
        } else {
            $error =  'No image was selected';
            return $error;
        }
    }
}
