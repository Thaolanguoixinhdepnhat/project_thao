

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


        /* .sec-user .container .content.v2 .table td:nth-child(2), */

        .sec-user .container .content.v2 .table td:nth-child(9),
        .sec-user .container .content.v2 .table td:nth-child(10) {
            text-align: right;
        }

        .sec-user .container .content.v2 .table td:nth-child(7) {
            text-align: left;
        }

        .sec-user .container .content.v2 .table td:nth-child(3),
        /* .sec-user .container .content.v2 .table td:nth-child(4), */
        .sec-user .container .content.v2 .table td:nth-child(5),
        .sec-user .container .content.v2 .table td:nth-child(6),
        .sec-user .container .content.v2 .table td:nth-child(8) .sec-user .container .content.v2 .table td:nth-child(11) {
            text-align: left;
        }
    </style>

    <section class="sec-user">
        <div class="container">
            <div class="content v2">
                <h2>Lịch sử đánh giá của bạn</h2>
                <div style="overflow-x: auto; width: 100%;">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="t">
                            <tr>
                                <th><i class="fas fa-id-badge" style="color:#0d6efd;"></i> Số thứ tự</th>
                                <th><i class="fas fa-user" style="color:#6610f2;"></i> Tên sản phẩm</th>
                                <th><i class="fas fa-sort-numeric-up" style="color:#ffc107;"></i> Ngày đánh giá</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($comment as $index => $item)
                                @foreach ($item->product as $loopIndex => $orderitem)
                                    <tr>
                                        <td class="text-start" align="center">{{ $index + 1 }}</td>
                                        <td class="text-start">{{ $orderitem->product_name }}</td>
                                        <td class="text-start">{{ $item->create_at }}</td>
                                        <td class="text-start" align="center" style="display: flex; justify-content: center">
                                            <a href="{{ route('user.detail', ['id' => $item->product_id]) }}" style="background: #28a745; padding: .5rem 2rem; text-align: center;color: #fff;">Xem</a>
                                        </td>
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
