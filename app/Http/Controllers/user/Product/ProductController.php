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
    // public function index(Request $request)
    // {
    //     $count_cart = Cart::where('customer_id', auth()->id())->get();
    //     $categories = Category::all();
    //     $tv = Product::where('category_id', 1)
    //     ->with('productClasses')
    //     ->take(5)
    //     ->get();

    //     // Lấy sản phẩm với category_id = 2
    //     $dt = Product::where('category_id', 2)
    //             ->with('productClasses')
    //             ->take(5)
    //             ->get();
    //     // Lấy 10 sản phẩm mới nhất
    //     $news = Product::orderBy('id', 'desc')->take(10)->get();

    //     $query = Product::query()
    //         ->select('product.*', DB::raw('MIN(product_class.price) as min_price'))
    //         ->leftJoin('product_class', 'product.id', '=', 'product_class.product_id')
    //         ->groupBy('product.id');

    //     // Lọc theo danh mục
    //     if ($request->filled('category_id')) {
    //         $query->where('product.category_id', $request->category_id);
    //     }

    //     // Sắp xếp
    //     if ($request->filled('sort')) {
    //         switch ($request->sort) {
    //             case 'price_asc':
    //                 $query->orderBy('min_price', 'asc');
    //                 break;
    //             case 'price_desc':
    //                 $query->orderBy('min_price', 'desc');
    //                 break;
    //             case 'name_asc':
    //                   $query->orderBy('product.product_name', 'asc');

    //                 break;
    //             case 'name_desc':
    //                 $query->orderBy('product.product_name', 'desc');
    //                 break;
    //         }
    //     }

    //     $products = $query->paginate(9)->withQueryString();

    //     // Lọc màu & size sau khi lấy xong sản phẩm
    //     foreach ($products as $product) {
    //         $seenSizes = [];
    //         $seenColorCodes = [];
    //         $result = [];
        
    //         foreach ($product->productClasses as $item) {
    //             $sizeKey = explode('｜', trim((string) $item->size))[0]; // Or keep the full size string if needed
    //             $comboKey = $item->color_code . '-' . $sizeKey;
        
    //             // Check if the color_code and sizeKey combination has already been seen
    //             if (!in_array($sizeKey, $seenSizes) && !in_array($item->color_code, $seenColorCodes)) {
    //                 $seenSizes[] = $sizeKey;
    //                 $seenColorCodes[] = $item->color_code;
    //                 $result[] = $item;
    //             }
    //         }
        
    //         $product->productClasses = collect($result);
    //     }
        
    //     return view('user.product.index', [
    //         'categories' => $categories,
    //         'products' => $products,
    //         'count_cart' => $count_cart,
    //         'dt' => $dt,
    //         'tv' => $tv,
    //         'news' => $news,

    //     ]);
    // }
    
    public function index(Request $request)
    {
        $count_cart = Cart::where('customer_id', auth()->id())->get();
        $categories = Category::all();
        
        // Get 5 most recent TV products
        $tv = Product::where('category_id', 1)
            ->with('productClasses')
            ->take(5)
            ->get();

        // Get 5 most recent DT products
        $dt = Product::where('category_id', 2)
            ->with('productClasses')
            ->orderBy('created_at', 'desc')  // Ensure it's ordered by created_at descending
            ->take(5)
            ->get();

        // Get 10 most recent products
        $news = Product::orderBy('id', 'desc')->take(10)->get();

        $query = Product::query()
            ->select('product.*', DB::raw('MIN(product_class.price) as min_price'))
            ->leftJoin('product_class', 'product.id', '=', 'product_class.product_id')
            ->groupBy('product.id');

        // Filter by category if provided
        if ($request->filled('category_id')) {
            $query->where('product.category_id', $request->category_id);
        }

        // Sort based on the provided sort parameter
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('min_price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('min_price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('product.product_name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('product.product_name', 'desc');
                    break;
            }
        }

        $products = $query->paginate(9)->withQueryString();

        // Filter color and size after retrieving products
        foreach ($products as $product) {
            $seenSizes = [];
            $seenColorCodes = [];
            $result = [];

            foreach ($product->productClasses as $item) {
                $sizeKey = explode('｜', trim((string) $item->size))[0]; // Or keep the full size string if needed
                $comboKey = $item->color_code . '-' . $sizeKey;

                // Check if the color_code and sizeKey combination has already been seen
                if (!in_array($sizeKey, $seenSizes) && !in_array($item->color_code, $seenColorCodes)) {
                    $seenSizes[] = $sizeKey;
                    $seenColorCodes[] = $item->color_code;
                    $result[] = $item;
                }
            }

            $product->productClasses = collect($result);
        }

        return view('user.product.index', [
            'categories' => $categories,
            'products' => $products,
            'count_cart' => $count_cart,
            'dt' => $dt,
            'tv' => $tv,
            'news' => $news,
        ]);
    }

    // public function detail($id)
    // {
    //     $products = Product::where('id', $id)->with('productClasses','productImages')->get();
    //     $count_cart = Cart::where('customer_id', auth()->id())->get();
    //     $tv = Product::where('category_id', 1)
    //     ->with('productClasses')
    //     ->take(5)
    //     ->get();

    //     // Lấy sản phẩm với category_id = 2
    //     $dt = Product::where('category_id', 2)
    //             ->with('productClasses')
    //             ->take(5)
    //             ->get();




          


    //     // Lấy 10 sản phẩm mới nhất
    //     $news = Product::orderBy('id', 'desc')->take(10)->get();
        
    //     // Lọc màu & size sau khi lấy xong sản phẩm
    //     foreach ($products as $product) {
    //         $seenSizes = [];
    //         $seenColorCodes = [];
    //         $result = [];
        
    //         foreach ($product->productClasses as $item) {
    //             $sizeKey = explode('｜', trim((string) $item->size))[0]; // Or keep the full size string if needed
    //             $comboKey = $item->color_code . '-' . $sizeKey;
        
    //             // Check if the color_code and sizeKey combination has already been seen
    //             if (!in_array($sizeKey, $seenSizes) && !in_array($item->color_code, $seenColorCodes)) {
    //                 $seenSizes[] = $sizeKey;
    //                 $seenColorCodes[] = $item->color_code;
    //                 $result[] = $item;
    //             }
    //         }
        
    //         $product->productClasses = collect($result);
    //     }
    //     // return $products;
    //     return view('user.product.details', ['products' => $products , 'count_cart' => $count_cart,'dt' => $dt,
    //         'tv' => $tv,
    //         'news' => $news,]);

    // }

    public function detail($id)
    {
        $products = Product::where('id', $id)->with('productClasses','productImages', 'comment')->get();
        $count_cart = Cart::where('customer_id', auth()->id())->get();
        $tv = Product::where('category_id', 1)->with('productClasses')->take(5)->get();
        $dt = Product::where('category_id', 2)->with('productClasses')->take(5)->get();
        $news = Product::orderBy('id', 'desc')->take(10)->get();

        // Lấy category_id của sản phẩm hiện tại để lấy sản phẩm liên quan
        $currentProduct = $products->first();
        $relatedProducts = collect();
        if ($currentProduct) {
            $relatedProducts = Product::where('category_id', $currentProduct->category_id)
                ->where('id', '!=', $currentProduct->id) // trừ sản phẩm đang xem
                ->take(5)
                ->get();
        }

        // Lọc màu & size cho sản phẩm hiện tại
        foreach ($products as $product) {
            $seenSizes = [];
            $seenColorCodes = [];
            $result = [];

            foreach ($product->productClasses as $item) {
                $sizeKey = explode('｜', trim((string) $item->size))[0];
                $comboKey = $item->color_code . '-' . $sizeKey;

                if (!in_array($sizeKey, $seenSizes) && !in_array($item->color_code, $seenColorCodes)) {
                    $seenSizes[] = $sizeKey;
                    $seenColorCodes[] = $item->color_code;
                    $result[] = $item;
                }
            }

            $product->productClasses = collect($result);
        }

        return view('user.product.details', [
            'products' => $products,
            'count_cart' => $count_cart,
            'dt' => $dt,
            'tv' => $tv,
            'news' => $news,
            'relatedProducts' => $relatedProducts, // truyền dữ liệu này ra view
        ]);
    }





 
    
}


