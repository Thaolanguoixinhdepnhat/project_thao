<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductClass;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index(Request $request)
    {
        // Lấy sản phẩm với category_id = 1
        $tv = Product::where('category_id', 1)
                    ->with('productClasses')
                    ->take(5)
                    ->get();

        // Lấy sản phẩm với category_id = 2
        $dt = Product::where('category_id', 2)
                    ->with('productClasses')
                    ->take(5)
                    ->get();

        // Lấy 10 sản phẩm mới nhất
        $news = Product::orderBy('id', 'desc')->take(10)->get();

        // Lấy tất cả danh mục sản phẩm
        $categories = Category::all();

        // Loại bỏ các màu sắc trùng lặp (unique color_code)
        foreach ($tv as $product) {
            $product->productClasses = $product->productClasses->unique('color_code');
            $product->productClasses = $product->productClasses->unique('size');
        }
        foreach ($dt as $product) {
            $product->productClasses = $product->productClasses->unique('color_code');
            $product->productClasses = $product->productClasses->unique('size');
        }
        
        foreach ($news as $product) {
            $product->productClasses = $product->productClasses->unique('color_code');
            $product->productClasses = $product->productClasses->unique('size');
        }
        // Trả về view với dữ liệu
        return view('user.index', compact('tv', 'dt', 'news', 'categories'));
    }


    public function home(){
        return view('user.home.index');
    }

    public function getProductClassByColorAndSize(Request $request)
    {
        // Truy vấn bảng ProductClass với color_code và size
        $productClass = ProductClass::where('color_code', $request->color_code)
                                    ->where('size', $request->size)
                                    ->first();

        // Nếu tìm thấy, trả về product_class_id
        if ($productClass) {
            return response()->json(['product_class_id' => $productClass->id,'price' => $productClass->price]);
        }

        return response()->json(['product_class_id' => null]);
    }

}
