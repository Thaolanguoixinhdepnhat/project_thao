<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductClass;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index(Request $request)
    {
        // Lấy sản phẩm với category_id = 1
        // lấy 5 sản phẩm mới nhất
        // $tv = Product::where('category_id', 1)
        //             ->with('productClasses')
        //             ->take(5)
        //             ->orderBy('id', 'desc')
        //             ->get();
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

        $count_cart = Cart::where('customer_id', auth()->id())->get();
        // Lấy tất cả danh mục sản phẩm
        $categories = Category::all();

        // Loại bỏ các màu sắc trùng lặp (unique color_code)
        // Lọc màu & size sau khi lấy xong sản phẩm
        foreach ($tv as $product) {
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

        // Lọc màu & size sau khi lấy xong sản phẩm
        foreach ($dt as $product) {
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
        
        // Lọc màu & size sau khi lấy xong sản phẩm
        foreach ($news as $product) {
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
        // Trả về view với dữ liệu
        return view('user.index', compact('tv', 'dt', 'news', 'categories','count_cart'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword', '');

        $products = Product::where('product_name', 'like', "%{$keyword}%")
            ->orWhere('product_image', 'like', "%{$keyword}%")
            ->orWhere('id', 'like', "%{$keyword}%")

            ->get();
    
        // Return the search results as a partial view
        return response()->json(['products' => $products]);
    }
    
    public function home()
    {
        $count_cart = Cart::where('customer_id', auth()->id())->get();
        
        $customer = Customer::where('id', Auth()->id())->first();

        return view('user.home.index', compact('count_cart','customer'));
    }

    public function update(Request $request)
    {
        $customer = Auth::guard('web')->user(); 

        $request->validate([
            'address' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Cập nhật thông tin người dùng
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->save();

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }

    public function order()
    {
        $order = Order::where('customer_id', Auth()->id())->with('items')->get();
        // return $order;
        return view('user.home.order', compact('order'));
    }

    public function cart()
    {
        $customer_id = auth()->id() ?? 9;
        $count_cart = Cart::where('customer_id', auth()->id())->get();
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

        $cart = Cart::with([
                    'product',
                    'productClass',
                    'product.productImages' => function ($query) {
                        $query->orderBy('id'); 
                    }
                ])
                ->where('customer_id', $customer_id)
                ->orderBy('created_at', 'desc')  
                ->get();

        $thanhTien = $cart->sum(function ($item) {
            return ($item->productClass->price ?? 0) * $item->quantity;
        });

        return view('user.home.cart', compact('cart', 'thanhTien'));
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

    public function comment(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'note' => 'nullable|string|max:1000',
        ]);

        $command = new Comment();
        $command->product_id = $request->product_id;
        $command->customer_id = auth()->id();
        $command->rating = $request->rating;
        $command->note = $request->note;
        $command->create_at = now();
        $command->save();

        return redirect()->route('user.detail', ['id' => $request->product_id])
        ->with('success', 'Xem lại đánh giá của bạn.');

    }




}
