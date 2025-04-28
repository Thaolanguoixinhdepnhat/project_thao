<?php

namespace App\Http\Controllers\user\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductClass;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_class_id = $request->input('product_class_id');
        // $product_images_id = $request->input('product_images_id');
    
        // Gán customer_id, nếu chưa đăng nhập thì mặc định là 9
        $customer_id = auth()->id();
    
        // Kiểm tra sản phẩm có tồn tại không
        $product = Product::findOrFail($product_id);
    
        $productClass = ProductClass::where('id', $product_class_id)
                            ->where('product_id', $product_id)
                            ->firstOrFail();

    
        // Kiểm tra giỏ hàng đã có sản phẩm và biến thể tương ứng chưa
        $cartItem = Cart::where('customer_id', $customer_id)
                        ->where('product_id', $product_id)
                        ->where('product_class_id', $product_class_id)
                        ->first();
    
        if ($cartItem) {
            // Nếu đã có rồi thì tăng số lượng lên
            $cartItem->increment('quantity');
        } else {
            // Nếu chưa có thì thêm mới vào giỏ hàng
            Cart::create([
                'customer_id'       => $customer_id,
                'product_id'        => $product_id,
                'product_class_id'  => $product_class_id,
                // 'product_images_id' => $product_images_id,
                'quantity'          => 1,
                'created_at'        => now(),
            ]);
        }
    
        return redirect()->route('cart_index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function viewCart()
    {
        $customer_id = auth()->id() ?? 9;

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

        return view('user.cart.index', compact('cart', 'thanhTien'));
    }

    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete(); // Soft delete nếu có SoftDeletes, hoặc xóa thật nếu không
    
        return redirect()->route('cart.index')->with('success', 'Đã xóa sản phẩm khỏi giỏ hàng');
    }
    

    
    public function updateCart(Request $request)
    {
        // Validate the request
        $request->validate([
            'cart_item_id' => 'required|exists:cart,id', // Kiểm tra id trong bảng carts
            'quantity' => 'required|integer|min:1' // Kiểm tra quantity hợp lệ
        ]);
    
        // Tìm sản phẩm trong giỏ hàng
        $cart = Cart::find($request->cart_item_id);
    
        // Nếu không tìm thấy sản phẩm trong giỏ hàng
        if (!$cart) {
            return redirect()->route('cart.index')->with('error', 'Item not found!');
        }
    
        // Cập nhật số lượng
        $cart->quantity = $request->quantity;
    
        // Cập nhật thủ công trường updated_at
        $cart->updated_at = Carbon::now(); // Cập nhật thủ công trường updated_at với thời gian hiện tại
    
        // Lưu thay đổi
        $cart->save();
    
        // Chuyển hướng với thông báo thành công
        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }
    
}


