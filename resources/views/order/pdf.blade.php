<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đơn hàng #{{ $order->id }}</title>
    <style>
        body { font-family: DejaVu Sans; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; }
        h2{
            text-align: center
        }
    </style>
</head>
<body>
    <h2>Hóa đơn</h2>
    <p>Ngày đặt: {{ $order->order_date }}</p>
    <p>Ngày giao: {{ $order->ship_date }}</p>

    <h4>Chi tiết hóa đơn</h4>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td align="right">{{ $item->quantity }}</td>
                    <td align="right">{{ $item->price }}</td>
                    <td align="right">{{ $item->quantity*$item->price }}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="3" align="center">Tổng tiền:</td>
                    <td align="right">{{$order->amount}}</td>
                </tr>
        </tbody>
    </table>
</body>
</html>
