@extends('layout.app')
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
    
@endsection
