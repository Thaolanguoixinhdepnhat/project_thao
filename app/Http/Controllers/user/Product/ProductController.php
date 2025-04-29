<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB; 
use App\Models\Category;

class ProductController extends Controller
{
   
    public function index(Request $request)
    {
        $categorys = Category::all();
        $products = Product::get();
        return view('user.product.index', ['categories' => $categorys, 'products' => $products]);

    }

    public function detail($id)
    {
        $products = Product::where('id', $id)->with('productClasses','productImages')->get();

        foreach ($products as $product) {
            $product->productClasses = $product->productClasses->unique('color_code');
            $product->productClasses = $product->productClasses->unique('size');
        }
        // return $products;
        return view('user.product.details', ['products' => $products]);

    }
}


