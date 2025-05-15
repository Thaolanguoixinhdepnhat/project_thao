{{-- @extends('layout.user')

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

@endsection --}}

@extends('layout.user')

@section('title', 'Đơn hàng')

@section('content')


<style>
    .sec-user .container .content.v2 .table {
        border-collapse: collapse;
        width: 100%;
    }

    .sec-user .container .content.v2 .table thead.t th {
        background-color: #a3d5f2;
        font-weight: 600;
        text-align: center;
        vertical-align: middle;
        border: 1px solid #dee2e6;
        padding: 10px;
        white-space: nowrap;
    }

    .sec-user .container .content.v2 .table thead.t th i {
        margin-right: 6px;
        vertical-align: middle;
    }

   
    .sec-user .container .content.v2 .table td {
         padding: 10px;
    border: 1px solid #ddd;
        font-size: 14px;
    }

    .sec-user .container .content.v2 .table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .sec-user .container .content.v2 .table td:nth-child(1) {
        text-align: center;
    }
    .sec-user .container .content.v2 .table td:nth-child(2),
    .sec-user .container .content.v2 .table td:nth-child(7),
    .sec-user .container .content.v2 .table td:nth-child(9),
    .sec-user .container .content.v2 .table td:nth-child(10) {
        text-align: right;
    }
    .sec-user .container .content.v2 .table td:nth-child(3),
    .sec-user .container .content.v2 .table td:nth-child(4),
    .sec-user .container .content.v2 .table td:nth-child(5),
    .sec-user .container .content.v2 .table td:nth-child(6),
    .sec-user .container .content.v2 .table td:nth-child(8),
    .sec-user .container .content.v2 .table td:nth-child(11) {
        text-align: left;
    }
</style>


<section class="sec-user">
    <div class="container">
        <div class="content v2">
            <h2>Đơn hàng của bạn</h2>
            <div style="overflow-x: auto; width: 100%;">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="t">
                        <tr>
                            <th><i class="fas fa-id-badge" style="color:#0d6efd;"></i> Số thứ tự</th>
                            <th><i class="fas fa-calendar-day" style="color:#20c997;"></i> Ngày đặt hàng</th>
                            <th><i class="fas fa-user" style="color:#6610f2;"></i> Người đặt</th>
                            <th><i class="fas fa-user-check" style="color:#6f42c1;"></i> Người nhận</th>
                            <th><i class="fas fa-map-marker-alt" style="color:#e83e8c;"></i> Địa chỉ nhận</th>
                            <th><i class="fas fa-envelope" style="color:#fd7e14;"></i> Email</th>
                            <th><i class="fas fa-phone" style="color:#20c997;"></i> SĐT nhận hàng</th>
                            <th><i class="fas fa-box-open" style="color:#17a2b8;"></i> Tên sản phẩm</th>
                            <th><i class="fas fa-sort-numeric-up" style="color:#ffc107;"></i> Số lượng</th>
                            <th><i class="fas fa-dollar-sign" style="color:#28a745;"></i> Tổng tiền</th>
                            <th><i class="fas fa-exclamation-triangle" style="color:#dc3545;"></i> Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $index => $item)
                            @foreach ($item->items as $loopIndex => $orderitem)
                                <tr>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
