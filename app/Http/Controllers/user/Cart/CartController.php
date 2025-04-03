<?php

// namespace App\Http\Controllers\User\Cart;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class CartController extends Controller
// {
//     public function index()
//     {
//         return view('user.cart.index');
//     }
// } 



namespace App\Http\Controllers\User\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductClass;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
 
    public function addToCart(Request $request)
    {
        // Validate required fields
        $request->validate([
            'product_id' => 'required|exists:product,id',
        ]);
    
        $product_id = $request->input('product_id');
        $product_class_id = $request->input('product_class_id', null);
    
        // Kiểm tra sản phẩm
        $product = Product::findOrFail($product_id);
    
        // Lấy thông tin product_class với giá
        $productClass = ProductClass::where('product_id', $product_id)
                                    ->when($product_class_id, function ($query) use ($product_class_id) {
                                        return $query->where('id', $product_class_id);
                                    })
                                    ->firstOrFail();
    
        // Kiểm tra giỏ hàng hiện có
        $cartItem = Cart::where('customer_id', auth()->id())
                        ->where('product_id', $product_id)
                        ->when($product_class_id, function($query) use ($product_class_id) {
                            $query->where('product_class_id', $product_class_id);
                        }, function($query) {
                            $query->whereNull('product_class_id');
                        })
                        ->first();
    
        if ($cartItem) {
            // Tăng số lượng nếu đã có
            $cartItem->increment('quantity');
        } else {
            // Tạo mới nếu chưa có
            Cart::create([
                'customer_id' => auth()->id(),
                'product_id' => $product_id,
                'product_class_id' => $product_class_id,
                'quantity' => 1,
                // KHÔNG lưu price vào cart nữa, vì sẽ lấy từ product_class khi cần
                'created_at' => now(),
            ]);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Sản phẩm đã được thêm vào giỏ hàng',
            'cart_count' => Cart::where('customer_id', auth()->id())->count(),
            'current_price' => $productClass->price // Trả về giá hiện tại để hiển thị
        ]);
    }


    
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function removeFromCart($key)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Xóa sản phẩm thành công');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('cart.view')->with('success', 'Giỏ hàng đã được xóa');
    }
}



