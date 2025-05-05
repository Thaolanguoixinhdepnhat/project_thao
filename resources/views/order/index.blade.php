@extends('layout.app')
@section('title', 'Danh sách đơn hàng')

@section('content')

<section class="sec-user">
    <div class="container">
        <div class="content v2">
            <h2>Đơn hàng</h2>
            <div style="overflow-x: auto; width: 100%;">
                <table class="table">
                    <tr style="background: #c0c0c0">
                        <td>
                            <p>Số thứ tự</p>
                        </td>
                        <td>
                            <p>Ngày đặt hàng</p>
                        </td>
                        <td>
                            <p>Mã sản phẩm</p>
                        </td>
                        <td>
                            <p>Tên sản phẩm</p>
                        </td>
                        <td>
                            <p>Tồn kho</p>
                        </td>
                        <td>
                            <p>Số lượng</p>
                        </td>
                        <td>
                            <p>Giá nhập</p>
                        </td>
                        <td>
                            <p>Giá bán</p>
                        </td>
                        <td>
                            <p>Tổng tiền</p>
                        </td>
                        <td>
                            <p>trạng thái</p>
                        </td>
                    </tr>

                    @foreach ($order as $index => $item)
                        @foreach ($item->items as $loopIndex => $orderitem)
                            <tr>
 
                                @if ($loop->first)
                                    <td rowspan="{{ $item->items->count() }}" align="center" style="text-decoration: underline">
                                        <a href="{{route('admin.order.detail', ['id' => $item->id ])}}">{{ $item->id }}</a>
                                    </td>
                                    <td rowspan="{{ $item->items->count() }}">{{ $item->order_date }}</td>
                                @endif
                                <td>{{ $orderitem->product_class_id }}</td>
                                <td>{{ $orderitem->product_name }}</td>
                                @if ($orderitem->product_class->stock_quantity < $orderitem->quantity)
                                    <td align="right" style="color: red;">{{ $orderitem->product_class->stock_quantity }}</td>
                                @else
                                    <td align="right" >{{ $orderitem->product_class->stock_quantity }}</td>
                                    
                                @endif
                                <td align="right">{{ $orderitem->quantity }}</td>
                                <td align="right">{{ $orderitem->product_class->cost ?? $orderitem->cost}}</td>
                                <td align="right">{{ $orderitem->price }}</td>
                                @if ($loop->first)
                                    <td rowspan="{{ $item->items->count() }}" align="right">{{ $item->amount }}</td>
                                    <td rowspan="{{ $item->items->count() }}">{{ $item->status->status_name }}</td>
                                @endif
                            </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>



@endsection