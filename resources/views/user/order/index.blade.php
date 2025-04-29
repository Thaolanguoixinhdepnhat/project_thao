@extends('layout.master')

@section('title', 'Thanh toán thành công')

@section('content')

    <form action="{{route('checkout')}}" method="POST">
        @csrf
        <section class="sec-check">
            <h2 class="title">Nhập thông tin nhận hàng</h2>

            <div class="form-group">
                <div class="group">
                    <label for="">Họ và tên:</label>
                    <input type="text" name="customer_name" value="{{ old('customer_name') }}">
                    @error('customer_name')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>
                <div class="group">
                    <label for="">Địa chỉ:</label>
                    <input type="text" name="customer_address" value="{{ old('customer_address') }}">
                    @error('customer_address')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="group">
                    <label for="">Số điện thoại:</label>
                    <input type="text" name="customer_phone" value="{{ old('customer_phone') }}">
                    @error('customer_phone')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="group">
                    <label for="">Email:</label>
                    <input type="text" name="customer_email" value="{{ old('customer_email') }}">
                    @error('customer_email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="group">
                    <p id="showDialog">Đơn hàng của bạn</p>

                </div>
                <div class="btn">

                    <button type="submit">Đồng ý</button>
                </div>
            </div>
        </section>
    </form>


    <section class="sec-cart sec-check dialog">
        <div class="cart">
            <div class="container">
                <h2 class="title">Nhập thông tin mua hàng</h2>
                <div class="content">
                    <div class="cart__card">
                        <div class="left">
                            @foreach ($cart as $item)
                                <div class="item">
                                    <div class="product-image-cart">
                                        @if ($item->product->productImages->isNotEmpty())
                                            <img src="{{ asset('storage/' . $item->product->productImages->first()->product_image) }}"
                                                alt="">
                                        @endif
                                    </div>
                                    <div class="product-txt">
                                        <h3>{{ $item->product->product_name }}</h3>
                                        <span class="cart__options">Màu: {{ $item->productClass->color }}</span><br>
                                        <span class="cart__options">Mã màu: {{ $item->productClass->color_code }}</span><br>
                                        <span class="cart__options">Ram: {{ $item->productClass->size }}</span>
                                        <div class="cart__sku">Số lượng: {{ $item->quantity }} chiếc</div>
                                    </div>
                                    <div class="cart-details">
                                        <div class="cart-price">
                                            <span
                                                class="current-price">{{ number_format($item->productClass->price, 0, ',', '.') }}
                                                VNĐ</span>
                                            <span
                                                class="original-price">{{ number_format($item->productClass->cost, 0, ',', '.') }}
                                                VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="closeDialog" class="closeDialog">
            
        </div>
    </section>

    <script>
        document.getElementById('showDialog').addEventListener('click', function () {
            document.querySelector('.dialog').classList.add('show');
            document.querySelector('.dialog-overlay').classList.add('show');
        });

        document.querySelector('.closeDialog').addEventListener('click', function () {
            document.querySelector('.dialog').classList.remove('show');
            document.querySelector('.dialog-overlay').classList.remove('show');
        });

    </script>
    
    <div class="dialog-overlay"></div>
@endsection
