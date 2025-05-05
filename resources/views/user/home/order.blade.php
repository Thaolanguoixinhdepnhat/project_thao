@extends('layout.user')

@section('title', 'Đơn hàng')

@section('content')

<section class="sec-user">
    <div class="container">
        <div class="content v2">
            <h2>Đơn hàng của bạn</h2>
            <div style="overflow-x: auto; width: 100%;">
                <table class="table">
                    <tr>
                        <td>
                            <p>Số thứ tự</p>
                        </td>
                        <td>
                            <p>Ngày đặt hàng</p>
                        </td>
                        <td>
                            <p>Người đặt</p>
                        </td>
                        <td>
                            <p>Người nhận hàng</p>
                        </td>
                        <td>
                            <p>Địa chỉ nhận hàng</p>
                        </td>
                        <td>
                            <p>Email</p>
                        </td>
                        <td>
                            <p>SĐT nhận hàng</p>
                        </td>
                        <td>
                            <p>Tên sản phẩm</p>
                        </td>
                        <td>
                            <p>Số lượng</p>
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
                                {{-- Hiển thị chỉ trên dòng đầu tiên --}}
                                @if ($loop->first)
                                    <td rowspan="{{ $item->items->count() }}" align="center">{{ $index + 1 }}</td>
                                    <td rowspan="{{ $item->items->count() }}">{{ $item->order_date }}</td>
                                    <td rowspan="{{ $item->items->count() }}">{{ $item->customers->username ?? '' }}</td>
                                @endif

                                <td>{{ $orderitem->customer_name }}</td>
                                <td>{{ $orderitem->customer_address }}</td>
                                <td>{{ $orderitem->customer_email }}</td>
                                <td align="right">{{ $orderitem->customer_phone }}</td>
                                <td>{{ $orderitem->product_name }}</td>
                                <td align="right">{{ $orderitem->quantity }}</td>

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