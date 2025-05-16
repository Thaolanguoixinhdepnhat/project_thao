<?php

namespace App\Http\Controllers\user\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB; 
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class ContactController extends Controller
{
 public function index()
    {
        $count_cart = Cart::where('customer_id', auth()->id())->get();

        $tv = Product::where('category_id', 1)
            ->with('productClasses')
            ->take(5)
            ->get();

        $dt = Product::where('category_id', 2)
            ->with('productClasses')
            ->take(5)
            ->get();

        $news = Product::orderBy('id', 'desc')->take(10)->get();

        return view('user.contact.index', [
            'count_cart' => $count_cart,
            'tv' => $tv,
            'dt' => $dt,
            'news' => $news
        ]);
    }
}
