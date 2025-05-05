<?php

namespace App\Http\Controllers\user\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductClass;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index()
    {
        $customer_id = auth()->id();
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

        return view('user.order.index', compact('cart','tv','dt','news','count_cart'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_address' => 'required|string|max:500',
            'customer_phone' => 'required|regex:/^0[0-9]{9}$/',
            'customer_email' => 'required|email|max:255',
        ]);

        
        $customer_id = auth()->id();
        
        // Lấy các sản phẩm trong giỏ hàng
        $cartItems = Cart::where('customer_id', $customer_id)->get();
        
        // Tính tổng tiền từ giỏ hàng
        $totalAmount = $cartItems->sum(function ($item) {
            // Ensure productClass is available
            if ($item->productClass) {
                return $item->productClass->price * $item->quantity;
            }
            return 0; // Return 0 if productClass is not found
        });
        
        $createdAt = now(); // Thời gian hiện tại
        
        // Tạo đơn hàng mới
        $order = new Order();
        $order->customer_id = $customer_id;
        $order->order_date = now();
        $order->amount = $totalAmount;
        $order->status_id = 1; // Trạng thái "Đang chờ xử lý"
        $order->created_at = $createdAt;
        $order->save();
        
        // Lưu các sản phẩm vào bảng 'order_items'
        foreach ($cartItems as $cartItem) {
            $productClass = $cartItem->productClass;
            $product = $productClass ? $productClass->product : null;

            if ($product && $productClass) {
                $order->items()->create([
                    'product_class_id' => $productClass->id,
                    'product_name' => $product->product_name,
                    'customer_name' => $request->customer_name,
                    'customer_address' => $request->customer_address,
                    'customer_phone' => $request->customer_phone,
                    'customer_email' => $request->customer_email,
                    'quantity'     => $cartItem->quantity,
                    'cost'         => $productClass->cost,
                    'price'        => $productClass->price,
                    'status_id'    => 1,
                    'note'         => '',
                    'ship_date'    => null,
                    'created_at'   => $createdAt,
                ]);
            }
        }

        // Xóa các sản phẩm trong giỏ hàng
        Cart::where('customer_id', $customer_id)->delete();

        return redirect()->route('home')->with('success', 'Chúc mừng! Bạn đã đặt hàng thành công.');
    }

    
}
