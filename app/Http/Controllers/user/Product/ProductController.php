<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB; 
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $count_cart = Cart::where('customer_id', auth()->id())->get();
        $categorys = Category::all();
        $products = Product::paginate(9);
        foreach ($products as $product) {
            $product->productClasses = $product->productClasses->unique('color_code');
            $product->productClasses = $product->productClasses->unique('size');
        }
        return view('user.product.index', ['categories' => $categorys, 'products' => $products, 'count_cart' => $count_cart]);

    }

    public function detail($id)
    {
        $products = Product::where('id', $id)->with('productClasses','productImages')->get();
        $count_cart = Cart::where('customer_id', auth()->id())->get();

        foreach ($products as $product) {
            $product->productClasses = $product->productClasses->unique('color_code');
            $product->productClasses = $product->productClasses->unique('size');
        }
        // return $products;
        return view('user.product.details', ['products' => $products , 'count_cart' => $count_cart]);

    }
}


