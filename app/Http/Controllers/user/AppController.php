<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AppController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::select('product.*') // Thay 'products.*' thành 'product.*'
        ->join('product_class', 'product.id', '=', 'product_class.product_id') // Thay 'products' thành 'product'
        ->with(['productClasses', 'productImages']) // giữ nguyên nếu quan hệ là productClasses
        ->groupBy('product.id');  // Thay 'products.id' thành 'product.id'

    // Tìm kiếm theo keyword (tên hoặc size)
    if ($request->filled('keyword')) {
        $keyword = $request->keyword;

        $query->where(function ($q) use ($keyword) {
            $q->where('product.product_name', 'like', "%$keyword%")  // Thay 'products' thành 'product'
              ->orWhere('product_class.size', 'like', "%$keyword%");  // Thay 'products' thành 'product'
        });
    }

    // Lọc theo khoảng giá
    if ($request->filled('min_price')) {
        $min = (int)$request->min_price;
        $query->havingRaw('MIN(product_class.price) >= ?', [$min]);
    }

    if ($request->filled('max_price')) {
        $max = (int)$request->max_price;
        $query->havingRaw('MIN(product_class.price) <= ?', [$max]);
    }

    // Sắp xếp theo giá tăng/giảm
    if ($request->filled('sort_price') && in_array($request->sort_price, ['asc', 'desc'])) {
        $query->orderBy(DB::raw('MIN(product_class.price)'), $request->sort_price);
    }

    $products = $query->get();

    return view('user.index', compact('products'));
        // return view('user.index');
    }
}
