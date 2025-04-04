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
use Illuminate\Support\Facades\Auth;



class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate required fields
        $request->validate([
            'product_id' => 'required|exists:product,id',
            'product_class_id' => 'nullable|exists:product_classes,id',
        ]);

        $product_id = $request->input('product_id');
        $product_class_id = $request->input('product_class_id', null);
        
        // Gán customer_id, nếu chưa đăng nhập thì mặc định là 9
        $customer_id = auth()->id() ?? 9;

        // Kiểm tra sản phẩm
        $product = Product::findOrFail($product_id);

        // Lấy thông tin product_class với giá
        $productClass = ProductClass::where('product_id', $product_id)
                                    ->when($product_class_id, function ($query) use ($product_class_id) {
                                        return $query->where('id', $product_class_id);
                                    })
                                    ->firstOrFail();

        // Kiểm tra giỏ hàng hiện có
        $cartItem = Cart::where('customer_id', $customer_id)
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
                'customer_id' => $customer_id,
                'product_id' => $product_id,
                'product_class_id' => $product_class_id,
                'quantity' => 1,
                'created_at' => now(),
            ]);
        }

        // Redirect đến trang giỏ hàng sau khi thêm sản phẩm
        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function viewCart()
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);
    
        // Lấy thông tin chi tiết sản phẩm và các thuộc tính liên quan từ cơ sở dữ liệu
        $cartItems = [];
        foreach ($cart as $item) {
            $product = Product::with(['productImages', 'productClasses'])->find($item['product_id']);
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $item['quantity'],
                    'product_class_id' => $item['product_class_id']
                ];
            }
        }
    
        return view('user.cart.index', compact('cartItems'));
    }
    

    public function removeFromCart($key)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Nếu sản phẩm tồn tại trong giỏ hàng
        if (isset($cart[$key])) {
            // Xóa sản phẩm khỏi giỏ
            unset($cart[$key]);
            session()->put('cart', $cart); // Lưu lại giỏ hàng đã chỉnh sửa
        }

        return redirect()->route('cart.view')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }

    public function clearCart()
    {
        // Xóa giỏ hàng trong session
        session()->forget('cart');
        return redirect()->route('cart.view')->with('success', 'Giỏ hàng đã được xóa');
    }
}


