{{-- @extends('layout.app')
@section('title', 'Danh sách đơn hàng')

@section('content')
    <form action="{{ route('orders.ship') }}" method="POST">
        @csrf
        <section class="sec-user">
            <div class="container">
                <div class="content v2">
                    <h2>Chi tiết đơn hàng</h2>
                    <div style="overflow-x: auto; width: 100%;">
                        <table class="table">
                            <tr style="background: #c0c0c0">
                                <td>
                                    <p>Số thứ tự</p>
                                </td>
                                <td>
                                    <p>Mã sản phẩm</p>
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
                                    <p>Tồn kho</p>
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
                                    <p>Trạng thái</p>
                                </td>
                                <td>
                                    <p>Ngày ship</p>
                                </td>
                            </tr>

                            @foreach ($order as $index => $item)
                                <input type="hidden" name="order_id" id="order_id" value="{{$item->id}}">

                                @foreach ($item->items as $loopIndex => $orderitem)
                                    <tr>
                                        <td align="center">{{ $loopIndex + 1 }}</td>
                                        <td>{{ $orderitem->product_class_id }}</td>
                                        <td>{{ $item->customers->username}}</td>
                                        <td>{{ $orderitem->customer_name }}</td>
                                        <td>{{ $orderitem->customer_address }}</td>
                                        <td>{{ $orderitem->customer_email }}</td>
                                        <td align="right">{{ $orderitem->customer_phone }}</td>
                                        <td>{{ $orderitem->product_name }}</td>
                                        <td align="right">{{ $orderitem->quantity }}</td>
                                        <td align="right">{{ $orderitem->product_class->stock_quantity }}</td>
                                        <td align="right">{{ $orderitem->cost ?? $orderitem->product_class->cost }}</td>
                                        <td align="right">{{ $orderitem->price }}</td>
                                        <td align="right">{{ $item->amount }}</td>
                                        <td>{{ $item->status->status_name }}</td>
                                        <td>{{ $orderitem->ship_date ?? 'Chưa gửi hàng' }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>

    
        <section class="sec-user">
            <div class="container">
                <div class="content" style="max-width: 100%;margin-top: 3rem;">
                    <div class="user-form-group" style="gap:1rem;">
                        <div class="group" style="flex-direction:row;align-items: center;">
                            <label for="">Chọn ngày gửi: </label>
                            <input type="date" name="ship_date" id="" style="border: 1px solid #ccc; padding: 1rem;border-radius: .4rem;">
                            <button class="btn-primary" type="submit">Gửi hàng</button>
                        </div>
                        @error('ship_date')
                            <p class="error" style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </section>
    </form>
    
@endsection --}}




 @extends('layout.app')
@section('title', 'Chi tiết đơn hàng')

@section('content')

<section class="index_staff">
    <div class="container">
        <div class="content">
            <div class="sec-three2">
                <h4><i class="fas fa-box" style="color: #0d6efd;"></i> Chi tiết đơn hàng</h4>
                <hr class="hr">
                <form action="{{ route('orders.ship') }}" method="POST">
        @csrf
                <div style="overflow-x: auto; width: 100%;">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            <th><i class="fas fa-id-badge" style="color:#0d6efd;"></i> Số thứ tự</th>
                            <th><i class="fas fa-calendar-day" style="color:#20c997;"></i> Mã sản phẩm</th>
                            <th><i class="fas fa-barcode" style="color:#ffc107;"></i> Người đặt</th>
                            <th><i class="fas fa-box-open" style="color:#dc3545;"></i> Người nhận hàng</th>
                            <th><i class="fas fa-warehouse" style="color:#28a745;"></i> Địa chỉ nhận hàng</th>
                            <th><i class="fas fa-sort-numeric-up" style="color:#fd7e14;"></i> Email</th>
                            <th><i class="fas fa-dollar-sign" style="color:#dc3545;"></i> SĐT nhận hàng</th>
                            <th><i class="fas fa-dollar-sign" style="color:#ffc107;"></i> Tên sản phẩm</th>
                            <th><i class="fas fa-calculator" style="color:#17a2b8;"></i> Số lượng</th>
                            <th><i class="fas fa-exclamation-triangle" style="color:#ffc107;"></i> Tồn kho</th>
                            <th><i class="fas fa-dollar-sign" style="color:#dc3545;"></i> Giá nhập</th>
                            <th><i class="fas fa-dollar-sign" style="color:#ffc107;"></i> Giá bán</th>
                            <th><i class="fas fa-calculator" style="color:#17a2b8;"></i> Tổng tiền</th>
                            <th><i class="fas fa-exclamation-triangle" style="color:#ffc107;"></i> Trạng thái</th>
                            <th><i class="fas fa-calendar-check" style="color:#28a745;"></i> Ngày ship</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($order as $index => $item)
                                <input type="hidden" name="order_id" id="order_id" value="{{$item->id}}">

                                @foreach ($item->items as $loopIndex => $orderitem)
                                    <tr>
                                        <td align="center">{{ $loopIndex + 1 }}</td>
                                        <td>{{ $orderitem->product_class_id }}</td>
                                        <td>{{ $item->customers->username}}</td>
                                        <td>{{ $orderitem->customer_name }}</td>
                                        <td>{{ $orderitem->customer_address }}</td>
                                        <td>{{ $orderitem->customer_email }}</td>
                                        <td align="right">{{ $orderitem->customer_phone }}</td>
                                        <td>{{ $orderitem->product_name }}</td>
                                        <td align="right">{{ $orderitem->quantity }}</td>
                                        <td align="right">{{ $orderitem->product_class->stock_quantity }}</td>
                                        <td align="right">{{ $orderitem->cost ?? $orderitem->product_class->cost }}</td>
                                        <td align="right">{{ $orderitem->price }}</td>
                                        <td align="right">{{ $item->amount }}</td>
                                        <td>{{ $item->status->status_name }}</td>
                                        <td>{{ $orderitem->ship_date ?? 'Chưa gửi hàng' }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                     
      
                </div>
                 <section class="sec-user">
            <div class="container">
                <div class="content" style="max-width: 100%;margin-top: 3rem;">
                    <div class="user-form-group" style="gap:1rem;">
                        <div class="group" style="flex-direction:row;align-items: center;">
                            <label for="">Chọn ngày gửi: </label>
                            <input type="date" name="ship_date" id="" style="border: 1px solid #ccc; padding: 1rem;border-radius: .4rem;">
                            <button class="btn-primary" type="submit" style=" width: 100px;
    background-color: #007bff;
    color: white;
    font-size: 16px; 
    border: none;
    border-radius: 5px;
    cursor: pointer;
    height: 38px; 
   text-align: center;">Gửi hàng</button>
                        </div>
                        @error('ship_date')
                            <p class="error" style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </section>
    </form>
            </div>
        </div>
    </div>
</section>
@endsection