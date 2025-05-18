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

    <style>
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: 10% auto;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        h3 {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
        }

        /* Rating stars */
        .stars {
            display: flex;
            gap: 5px;
            font-size: 3rem;
            cursor: pointer;
            margin-top: 1.5rem;
        }

        .star {
            color: #ccc;
            transition: color 0.2s;
        }

        .star.active {
            color: #f5c518;
        }

        textarea {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            resize: vertical;
            border: 1px solid #ccc;
            border-radius: 1rem;
            min-height: 10rem
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #f5c518;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center
        }

        button:hover {
            background-color: #e0b810;
        }

        .text-left {
            text-align: left;
        }

        /* Căn phải cho số */
        .text-right {
            text-align: right;
        }

        /* Căn giữa cho mã/số thứ tự */
        .text-center {
            text-align: center;
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
                                <th><i class="fas fa-exclamation-triangle" style="color:#dc3545;"></i> Trạng thái</th>
                                <th><i class="fas fa-exclamation-triangle" style="color:#dc3545;"></i> Đánh giá</th>
                                <th><i class="fas fa-user" style="color:#6610f2;"></i> Người đặt</th>
                                <th><i class="fas fa-user-check" style="color:#6f42c1;"></i> Người nhận</th>
                                <th><i class="fas fa-map-marker-alt" style="color:#e83e8c;"></i> Địa chỉ nhận</th>
                                <th><i class="fas fa-envelope" style="color:#fd7e14;"></i> Email</th>
                                <th><i class="fas fa-phone" style="color:#20c997;"></i> SĐT nhận hàng</th>
                                <th><i class="fas fa-box-open" style="color:#17a2b8;"></i> Tên sản phẩm</th>
                                <th><i class="fas fa-sort-numeric-up" style="color:#ffc107;"></i> Số lượng</th>
                                <th><i class="fas fa-dollar-sign" style="color:#28a745;"></i> Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($order as $index => $item)
                                @foreach ($item->items as $loopIndex => $orderitem)
                                    <tr>
                         
                                        @if ($loop->first)
                                            <td rowspan="{{ $item->items->count() }}" class="text-center">
                                                {{ $index + 1 }}</td> <!-- Số thứ tự -->
                                            <td rowspan="{{ $item->items->count() }}" class="text-start">{{ $item->order_date }}
                                            </td> <!-- Ngày -->
                                            <td rowspan="{{ $item->items->count() }}" class="text-start">
                                                {{ $item->status->status_name }}</td> <!-- Trạng thái -->

                                            <td rowspan="{{ $item->items->count() }}" class="text-center">
                                                @if ($item->status_id == 3)
                                                    <a href="#" class="open-modal"
                                                        data-product-id="{{ $orderitem->product_id }}">Đánh giá</a>
                                                @else
                                                    <span style="cursor: not-allowed;">Đánh giá</span>
                                                @endif
                                            </td>

                                            <td rowspan="{{ $item->items->count() }}" class="text-start">
                                                {{ $item->customers->username ?? '' }}</td> <!-- Người đặt -->
                                        @endif
                                        <td class="text-start">{{ $orderitem->customer_name }}</td>
                                        <td class="text-start">{{ $orderitem->customer_address }}</td>
                                        <td class="text-start">{{ $orderitem->customer_email }}</td>
                                        <td class="text-end">{{ $orderitem->customer_phone }}</td>
                                        <td class="text-start">{{ $orderitem->product_name }}</td>
                                        <td class="text-end">{{ $orderitem->quantity }}</td>

                                        @if ($loop->first)
                                            <td rowspan="{{ $item->items->count() }}" class="text-end">{{ $item->amount }}
                                            </td>
                                        @endif
                                    </tr>

                                    <div class="modal" id="review-modal">
                                        <div class="modal-content">
                                            <span class="close" id="close-modal">&times;</span>
                                            <h3>Đánh giá sản phẩm</h3>

                                            <form action="{{ route('submit.rating') }}" method="POST">
                                                @csrf
                                                <input type="text" name="rating" id="rating-input">
                                                <input type="text" name="product_id" id="modal-product-id">

                                                <div class="stars" id="rating-stars">
                                                    <span class="star" data-value="1">&#9733;</span>
                                                    <span class="star" data-value="2">&#9733;</span>
                                                    <span class="star" data-value="3">&#9733;</span>
                                                    <span class="star" data-value="4">&#9733;</span>
                                                    <span class="star" data-value="5">&#9733;</span>
                                                </div>

                                                <textarea name="note" placeholder="Nhập đánh giá..."></textarea>
                                                <button type="submit">Gửi đánh giá</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>





    <script>
        const modal = document.getElementById('review-modal');
        const closeBtn = document.getElementById('close-modal');
        const productIdInput = document.getElementById('modal-product-id');
        const ratingInput = document.getElementById('rating-input');
        const stars = document.querySelectorAll('.star');

        let currentRating = 0;

        // Gán sự kiện mở modal cho tất cả nút "Đánh giá"
        document.querySelectorAll('.open-modal').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-product-id');
                productIdInput.value = productId;
                modal.style.display = 'block';
                clearStars();
            });
        });

        // Đóng modal
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Click sao
        stars.forEach(star => {
            star.addEventListener('click', function() {
                currentRating = this.getAttribute('data-value');
                ratingInput.value = currentRating;
                updateStars(currentRating);
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
                star.classList.toggle('active', star.getAttribute('data-value') <= rating);
            });
        }

        function clearStars() {
            currentRating = 0;
            ratingInput.value = '';
            stars.forEach(star => star.classList.remove('active'));
        }
    </script>




@endsection
