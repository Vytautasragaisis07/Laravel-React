<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-03-03
 * Time: 14:15
 */

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use File;
use Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController
{
    public function AdProduct(){
        $categories = Category::all();
        return view('shop.pages.adproduct', compact('categories'));
    }
    public function StoreProduct(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);
        $path=$request->file('img')->store('public/logos');
        $filename=str_replace('public/',"", $path);

        $products = Product::create([
            'title' => request('title'),
            'description' => request('description'),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'catid' => request ('catid'),
            'img' => $filename,
            'userid' => Auth::id(),

        ]);
        return redirect('/allproducts');
    }
    public function AllProducts()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop.pages.allproducts', compact('product'));
    }
}