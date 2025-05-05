<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Maker;
use App\Models\ProductClass;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::get();
        return view('order.index', compact('order'));
    }

    public function detail($id)
    {
        $order = Order::where('id', $id)->with('items')->get();
        return view('order.detail', compact('order'));
    }

    public function updateOrderShipping(Request $request)
    {
        DB::beginTransaction();
        try {
            $order = Order::where('id', $request->order_id)->with('items')->first(); 

            if (!$order) {
                throw new \Exception('Không tìm thấy đơn hàng.');
            }

            // Nếu đơn hàng đã xử lý (status_id = 2 hoặc 3), chỉ xuất PDF
            if (in_array($order->status_id, [2, 3])) {
                DB::rollBack();
                $pdf = Pdf::loadView('order.pdf', compact('order'));
                return $pdf->download('order_' . $order->id . '.pdf');
            }

            // Chỉ validate khi đơn hàng chưa xử lý (status_id = 1 hoặc null)
            if (is_null($order->status_id) || $order->status_id == 1) {
                $request->validate([
                    'ship_date' => 'required|date',
                ]);
            }

            $order->status_id = 2;
            $order->ship_date = $request->ship_date;
            $order->save();

            foreach ($order->items as $item) {
                $item->ship_date = $request->ship_date;
                $item->save();

                $productClass = ProductClass::find($item->product_class_id);

                if ($productClass) {
                    $productClass->stock_quantity -= $item->quantity;

                    if ($productClass->stock_quantity < 0) {
                        throw new \Exception("Sản phẩm {$productClass->product_code} không đủ tồn kho.");
                    }

                    $productClass->save();
                }
            }

            DB::commit();

            $pdf = Pdf::loadView('order.pdf', compact('order'));
            return $pdf->download('order_' . $order->id . '.pdf');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Lỗi: ' . $e->getMessage());
        }
    }

    public function revenueByMonth()
    {
        $revenues = DB::table('order')
            ->select(DB::raw('MONTH(created_at) as month, SUM(amount) as total_revenue'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy('month', 'asc')
            ->get();

        return view('order.chart', compact('revenues'));
    }
}