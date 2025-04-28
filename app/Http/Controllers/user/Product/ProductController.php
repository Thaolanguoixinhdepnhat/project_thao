<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB; 
use App\Models\Category;

class ProductController extends Controller
{
    // public function index(Request $request)
    // {
    //     $query = Product::select('product.*')
    //         ->join('product_class', 'product.id', '=', 'product_class.product_id')
    //         ->with(['productClasses', 'productImages'])
    //         ->groupBy('product.id');
    
    //     // Tìm kiếm theo keyword (tên hoặc size)
    //     if ($request->filled('keyword')) {
    //         $keyword = $request->keyword;
    
    //         $query->where(function ($q) use ($keyword) {
    //             $q->where('product.product_name', 'like', "%$keyword%")
    //               ->orWhere('product_class.size', 'like', "%$keyword%");
    //         });
    //     }
    
    //     // Lọc theo khoảng giá
    //     if ($request->filled('min_price')) {
    //         $min = (int)$request->min_price;
    //         $query->havingRaw('MIN(product_class.price) >= ?', [$min]);
    //     }
    
    //     if ($request->filled('max_price')) {
    //         $max = (int)$request->max_price;
    //         $query->havingRaw('MIN(product_class.price) <= ?', [$max]);
    //     }
    
    //     // Sắp xếp theo giá tăng/giảm
    //     if ($request->filled('sort_price') && in_array($request->sort_price, ['asc', 'desc'])) {
    //         $query->orderBy(DB::raw('MIN(product_class.price)'), $request->sort_price);
    //     }
    
    //     // Phân loại theo category_id
    //     if ($request->filled('category_id')) {
    //         $category_id = (int)$request->category_id;
    //         $query->where('product.category_id', $category_id);
    //     }
    
    //     $products = $query->get();
        
    //     // Lấy tất cả các danh mục để hiển thị trên giao diện
    //     $categories = Category::all();
    
    //     return view('user.product.index', compact('products', 'categories'));
    // }
    public function index(Request $request){
        $categorys = Category::all();
return view('user.index', ['categories' => $categorys]);

        
        
    }

}


