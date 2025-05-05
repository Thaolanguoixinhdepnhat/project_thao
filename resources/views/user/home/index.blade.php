@extends('layout.user')

@section('title', 'Trang chủ')

@section('content')

<form action="{{ route('user.update') }}" method="POST">
    @csrf
    <section class="sec-user">
        <div class="container">
            <div class="content">
                <h2>Thông tin cá nhân</h2>
                <div class="user-form-group">
                    <div class="group">
                        <label for="">Họ và tên:</label>
                        <input type="text" value="{{$customer->username}}" name="username" readonly>
                    </div>

                    <div class="group">
                        <label for="">Địa chỉ:</label>
                        <input type="text" value="{{$customer->address}}" name="address">
                    </div>

                    <div class="group">
                        <label for="">Email:</label>
                        <input type="text" value="{{$customer->email}}" name="email">
                    </div>

                    <div class="group">
                        <label for="">Số điện thoại:</label>
                        <input type="text" value="{{$customer->phone}}" name="phone">
                    </div>
                </div>
                <div class="btn">
                    <button class="btn-primary" type="submit">Chỉnh sửa</button>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection