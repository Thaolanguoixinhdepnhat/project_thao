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
    // public function checkout(Request $request)
    // {
    //     $customer_id = auth()->id() ?? 9;
        
    //     // Lấy các sản phẩm trong giỏ hàng
    //     $cartItems = Cart::where('customer_id', $customer_id)->get();
        
    //     if ($cartItems->isEmpty()) {
    //         return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn không có sản phẩm nào.');
    //     }
        
    //     // Tính tổng tiền từ giỏ hàng
    //     $totalAmount = $cartItems->sum(function ($item) {
    //         // Ensure productClass is available
    //         if ($item->productClass) {
    //             return $item->productClass->price * $item->quantity;
    //         }
    //         return 0; // Return 0 if productClass is not found
    //     });
        
    //     $createdAt = now(); // Bạn có thể sử dụng thời gian hiện tại hoặc thời gian thủ công khác
        
    //     // Tạo đơn hàng mới và chỉ định created_at thủ công
    //     $order = Order::create([
    //         'customer_id' => $customer_id,
    //         'order_date'  => now(),
    //         'amount'      => $totalAmount,
    //         'status_id'   => 1, // Trạng thái "Đang chờ xử lý"
    //         'created_at'  => $createdAt, // Sử dụng thời gian thủ công
    //     ]);
        
    //     // Lưu các sản phẩm vào bảng 'order_items' với created_at thủ công
    //     foreach ($cartItems as $cartItem) {
    //         $productClass = $cartItem->productClass;
    //         $product = $productClass ? $productClass->product : null;
    
    //         if ($product && $productClass) {
    //             $order_item = $order->items()->create([
    //                 'product_name' => $product->product_name,
    //                 'quantity'     => $cartItem->quantity,
    //                 'cost'         => $productClass->cost, // Cost from product_class
    //                 'price'        => $productClass->price * $cartItem->quantity, // Total price
    //                 'status_id'    => 1,
    //                 'note'         => '',
    //                 'ship_date'    => null,
    //                 'created_at'   => $createdAt, // Use manual created_at timestamp
    //             ]);
    //         }
    //     }
    
    //     // Xóa các sản phẩm trong giỏ hàng
    //     Cart::where('customer_id', $customer_id)->delete();
    
    //     return redirect()->route('order.index')->with('success', 'Chúc mừng! Bạn đã thanh toán thành công.');
    // }
    


    public function checkout(Request $request)
{
    $customer_id = auth()->id() ?? 9;
    
    // Lấy các sản phẩm trong giỏ hàng
    $cartItems = Cart::where('customer_id', $customer_id)->get();
    
    if ($cartItems->isEmpty()) {
        return redirect()->route('cart.index')->with('error', 'Giỏ hàng của bạn không có sản phẩm nào.');
    }
    
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
                'product_name' => $product->product_name,
                'quantity'     => $cartItem->quantity,
                'cost'         => $productClass->cost,
                'price'        => $productClass->price * $cartItem->quantity,
                'status_id'    => 1,
                'note'         => '',
                'ship_date'    => null,
                'created_at'   => $createdAt,
            ]);
        }
    }

    // Xóa các sản phẩm trong giỏ hàng
    Cart::where('customer_id', $customer_id)->delete();

    return redirect()->route('order.index')->with('success', 'Chúc mừng! Bạn đã thanh toán thành công.');
}
    public function index()
    {
        return view('user.order.index');
    }
    


    
}
