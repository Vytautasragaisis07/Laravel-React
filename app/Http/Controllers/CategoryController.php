<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-03-03
 * Time: 12:44
 */

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function ShowCategory()
    {
        return view('shop.pages.addcategory');
    }
    public function StoreCategory(Request $request){
        $validateData = $request->validate([
            'title' => 'required'
        ]);
        $categories = Category::create([
            'title' => request('title')
        ]);
        return redirect('/allcat');
    }
    public function AllCategories(){
        $categories = Category::all();
        return view('shop.pages.allcategories', compact('categories'));
    }
    public function DeleteCategory(Category $category)
    {
        $category -> delete();
        return redirect('/allcat');
    }

}