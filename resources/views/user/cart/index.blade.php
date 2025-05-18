@extends('layout.master')

@section('title', 'Giỏ hàng')

@section('content')
@php
    $breadcrumbs = [
        ['label' => 'Trang chủ', 'url' => route('home')],
        ['label' => 'Sản phẩm', 'url' => route('user.products.index')],
        ['label' => 'Giỏ hàng'],
    ];
@endphp
<style>
     .mb-4{
    padding-left: 3rem !important;
    display: flex;
    font-size: 2rem !important;
    gap: 1rem;
    a{
        color:black;
    text-decoration: none;
    }
    }
    </style>
    <section class="sec-cart">
        <h2 class="title">Giỏ hàng của bạn</h2>

    <div class="cart">
        <div class="container">
            
            @if ($cart)
            <div class="content">
                <div class="cart__card">
                    <div class="left">
                        @foreach ($cart as $item)
                            <div class="item">
                                <div class="product-image-cart">
                                    {{-- @if ($item->product->productImages->isNotEmpty())
                                        <img src="{{ asset('storage/' . $item->product->productImages->first()->product_image) }}"
                                            alt="">
                                    @endif --}}
                                    @if ($item->product && $item->product->productImages->isNotEmpty())
    <img src="{{ asset('storage/' . $item->product->productImages->first()->product_image) }}" alt="">
@else
    <img src="{{ asset('images/no-image.jpg') }}" alt="Không có ảnh">
@endif

                                </div>
                                <div class="product-txt">
                                    {{-- <h3>{{ $item->product->product_name }}</h3>
                                    <span class="cart__options">{{ $item->productClass->color }}</span>
                                    <span class="cart__options">,</span>
                                    <span class="cart__options"> {{ $item->productClass->size }}</span>
                                    <div class="cart__sku">{{ $item->productClass->stock_quantity }} Chiếc</div>
                                    <div class="cart__stock">Còn hàng</div> --}}
                                    @if ($item->product)
    <h3>{{ $item->product->product_name }}</h3>
    <span class="cart__options">{{ $item->productClass->color ?? 'N/A' }}</span>
    <span class="cart__options">,</span>
    <span class="cart__options">{{ $item->productClass->size ?? 'N/A' }}</span>
    <div class="cart__sku">{{ $item->productClass->stock_quantity ?? 0 }} Chiếc</div>
    <div class="cart__stock">Còn hàng</div>
@else
    <h3>Sản phẩm không tồn tại</h3>
@endif

                                </div>
                                <div class="cart-details">
                                    <div class="cart-price">
                                        {{-- <span
                                            class="current-price">{{ number_format($item->productClass->price, 0, ',', '.') }}
                                            VNĐ</span>
                                        <span
                                            class="original-price">{{ number_format($item->productClass->cost, 0, ',', '.') }}
                                            VNĐ</span> --}}
                                            @if ($item->productClass)
    <span class="current-price">{{ number_format($item->productClass->price, 0, ',', '.') }} VNĐ</span>
    <span class="original-price">{{ number_format($item->productClass->cost, 0, ',', '.') }} VNĐ</span>
@else
    <span class="current-price">0 VNĐ</span>
    <span class="original-price">0 VNĐ</span>
@endif

                                    </div>
                                    <div class="delete">
                                        <form action="{{ route('cart.delete', $item->id) }}" method="POST"
                                            onsubmit="return confirm('Bạn có chắc muốn xóa?');" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                style="background: none; border: none; padding: 0; cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                                    viewBox="0 -960 960 960" width="20px" fill="#1f1f1f">
                                                    <path
                                                        d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                    <form action="{{ route('update.cart') }}" method="POST" id="cart-update-form">
                                        @csrf
                                        <div class="number-input" data-item-id="{{ $item->id }}">
                                            <input type="hidden" name="cart_item_id" value="{{ $item->id }}">
                                            <input type="hidden" name="quantity" class="quantity-input"
                                                value="{{ $item->quantity }}">
                                            <button type="button" class="decrease">-</button>
                                            <span class="quantity">{{ $item->quantity }}</span>
                                            <button type="button" class="increase">+</button>
                                            <button type="submit" style="display:none" class="update-cart">Cập
                                                nhật</button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="right">
                        <h2>Bản tóm tắt</h2>
                        <div class="summary-item">
                            <span>Thuế GTGT</span>
                            <span>0 VNĐ</span>
                        </div>
                        <hr>
                        <div class="total">
                            <div class="total1">
                                <h3>Tổng cộng:</h3>
                                <span>Đã bao gồm thuế GTGT</span>
                            </div>
                            <div class="total2">
                                <span
                                    class="item-total-price"> {{ number_format($thanhTien, 0, ',', '.') }}
                                    VNĐ</span>
                            </div>
                        </div>
                        <div class="txt">
                            <span>Đăng nhập để được cộng điểm Samsung Rewards và nhận các ưu đãi đặc quyền</span>
                            <div class="txt1">
                                <span class="txt_td">Tích điểm thưởng Samsung Rewards cho đơn hàng này</span><br>
                                <span class="txt_chu"> (Dành cho thành viên Samsung Rewards)<svg
                                        style="width: 10px; height: 10px; margin-left:3px;" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg" fit=""
                                        preserveAspectRatio="xMidYMid meet" focusable="false">
                                        <g clip-path="url('/vn/cart#clip0_2503_18128')">
                                            <path
                                                d="M5.04804 14.9872C3.30841 14.2551 1.90289 12.9027 1.10435 11.1925C0.305816 9.48235 0.171244 7.53649 0.726766 5.73269C1.28229 3.9289 2.48826 2.39589 4.11055 1.43129C5.73284 0.466692 7.65569 0.139337 9.50578 0.51278C11.3559 0.886223 13.0012 1.93382 14.1223 3.45218C15.2434 4.97053 15.7603 6.85131 15.5726 8.72936C15.3849 10.6074 14.5061 12.3487 13.1067 13.6152C11.7073 14.8817 9.88728 15.583 7.99988 15.583C6.98594 15.5843 5.98209 15.3817 5.04804 14.9872ZM5.37271 1.78032C3.82477 2.43206 2.57422 3.63574 1.86387 5.15767C1.15351 6.67961 1.03403 8.41121 1.52862 10.0163C2.02321 11.6214 3.09657 12.9854 4.54033 13.8436C5.98409 14.7017 7.69523 14.9928 9.34153 14.6603C10.9878 14.3277 12.4518 13.3953 13.4493 12.044C14.4468 10.6927 14.9065 9.01903 14.7393 7.34782C14.5722 5.67661 13.7899 4.12715 12.5445 3.00027C11.2991 1.87338 9.67943 1.24946 7.99988 1.24966C7.09742 1.24853 6.20397 1.429 5.37271 1.78032ZM7.58321 12.4997V7.24966H6.66654V6.41632H8.41654V12.4997H7.58321ZM7.16654 4.33299C7.16966 4.20186 7.21139 4.07455 7.28651 3.96702C7.36164 3.85949 7.46681 3.77651 7.58887 3.72847C7.71093 3.68044 7.84445 3.66947 7.97271 3.69695C8.10097 3.72444 8.21827 3.78915 8.30993 3.88298C8.40158 3.97682 8.46352 4.09561 8.48799 4.22448C8.51246 4.35335 8.49836 4.48657 8.44747 4.60747C8.39658 4.72837 8.31116 4.83156 8.20189 4.90414C8.09263 4.97672 7.96438 5.01545 7.83321 5.01549C7.74462 5.01447 7.6571 4.996 7.57564 4.96115C7.49419 4.92629 7.4204 4.87573 7.35849 4.81235C7.29658 4.74897 7.24776 4.67401 7.21483 4.59176C7.18189 4.50951 7.16549 4.42158 7.16654 4.33299Z"
                                                fill="black"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2503_18128">
                                                <rect width="16" height="16" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg></span>
                            </div>
                        </div>
                      
                      
                        <a href="{{route('order.index')}}" class="btn-checkout">Thanh toán</a>
                        
                        
                        <div class="title">
                            <p>Bằng cách gửi đơn đặt hàng, bạn đồng ý với Điều khoản & điều kiện và chúng tôi sẽ sử dụng dữ
                                liệu
                                cá nhân của bạn theo Chính sách quyền riêng tư của chúng tôi.</p>
                        </div>
                        <div class="benefits">
                            <div class="benefits-item">
                                <img alt="" class="offers-icon"
                                    src="https://au2-images.shop.samsung.com/medias/PricePromise.svg?context=bWFzdGVyfGltYWdlc3wzMzkxfGltYWdlL3N2Zyt4bWx8YURJeUwyZzVaUzgwTlRBd01EazVOemM1TnpreE9DOVFjbWxqWlZCeWIyMXBjMlV1YzNabnxiMGU5YjgwNTZjMjE0MThmZDhlNzEyMzc2OGFlY2JkZDU5YjdiZmFmMzgzZGE1ZjY4NzJjMzA4OGI5OWZmMGNm">
                                Cam kết giá<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="10px"
                                    height="100%" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path
                                        d="M6 .375A5.617 5.617 0 0111.625 6c0 3.1-2.525 5.625-5.625 5.625A5.617 5.617 0 01.375 6 5.618 5.618 0 016 .375zm0 1C3.45 1.375 1.375 3.45 1.375 6S3.45 10.625 6 10.625 10.625 8.55 10.625 6a4.67 4.67 0 00-1.35-3.275A4.666 4.666 0 006 1.375zm0 6.5a.625.625 0 110 1.25.625.625 0 010-1.25zM7.575 3.55a1.816 1.816 0 01-.288 2.188l-.02.018-.067.06-.05.046-.085.078-.044.042-.044.043-.045.045-.044.047a1.38 1.38 0 00-.388.97v.163h-1v-.188c0-.729.305-1.24.599-1.583l.046-.052.046-.05.045-.048.044-.044.043-.042.04-.04.095-.087.017-.016.037-.034.05-.04.013-.013a.796.796 0 00.125-.976.816.816 0 00-.913-.374c-.35.1-.6.412-.6.787h-1c0-.825.55-1.538 1.35-1.75a1.814 1.814 0 012.038.85z"
                                        fill="#000" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <div class="benefits-item">
                                <img alt="" class="offers-icon"
                                    src="https://au2-images.shop.samsung.com/medias/icon-regular-shopping-shipping-free.png?context=bWFzdGVyfGltYWdlc3wxOTUxfGltYWdlL3BuZ3xhR0poTDJnNVlTODBOVEF3TURrNU56WTVPVFl4TkM5cFkyOXVMWEpsWjNWc1lYSXRjMmh2Y0hCcGJtY3RjMmhwY0hCcGJtY3RabkpsWlM1d2JtY3xjNGNiNTkwOWQyOGZmMjNhZGZiMzdiYzA5MTNjZmM5MWNlNmEyMTY1ZTIyODdlZDA5OGJlNzg2NWZmMWRjZWU3">
                                Giao hàng miễn phí toàn quốc<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"
                                    width="10px" height="100%" fit="" preserveAspectRatio="xMidYMid meet"
                                    focusable="false">
                                    <path
                                        d="M6 .375A5.617 5.617 0 0111.625 6c0 3.1-2.525 5.625-5.625 5.625A5.617 5.617 0 01.375 6 5.618 5.618 0 016 .375zm0 1C3.45 1.375 1.375 3.45 1.375 6S3.45 10.625 6 10.625 10.625 8.55 10.625 6a4.67 4.67 0 00-1.35-3.275A4.666 4.666 0 006 1.375zm0 6.5a.625.625 0 110 1.25.625.625 0 010-1.25zM7.575 3.55a1.816 1.816 0 01-.288 2.188l-.02.018-.067.06-.05.046-.085.078-.044.042-.044.043-.045.045-.044.047a1.38 1.38 0 00-.388.97v.163h-1v-.188c0-.729.305-1.24.599-1.583l.046-.052.046-.05.045-.048.044-.044.043-.042.04-.04.095-.087.017-.016.037-.034.05-.04.013-.013a.796.796 0 00.125-.976.816.816 0 00-.913-.374c-.35.1-.6.412-.6.787h-1c0-.825.55-1.538 1.35-1.75a1.814 1.814 0 012.038.85z"
                                        fill="#000" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <div class="benefits-item">
                                <img alt="" class="offers-icon"
                                    src="https://au2-images.shop.samsung.com/medias/Icon-Deal-36x36.png?context=bWFzdGVyfGltYWdlc3wyMzk4fGltYWdlL3BuZ3xhRGMwTDJnNVpDODBOVEF3TURrNU56Y3pNak00TWk5SlkyOXVMVVJsWVd3dE16WjRNell1Y0c1bnw2MGQ2YjRiNDY0N2E2NTJjMTdlMWYzOTc0NzU1NTc3MDM3YzNhNTdkYWRlN2IyMzA5ZGM3M2NkZjViZGYzNGY3">
                                Gói trả góp 0%<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="10px"
                                    height="100%" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path
                                        d="M6 .375A5.617 5.617 0 0111.625 6c0 3.1-2.525 5.625-5.625 5.625A5.617 5.617 0 01.375 6 5.618 5.618 0 016 .375zm0 1C3.45 1.375 1.375 3.45 1.375 6S3.45 10.625 6 10.625 10.625 8.55 10.625 6a4.67 4.67 0 00-1.35-3.275A4.666 4.666 0 006 1.375zm0 6.5a.625.625 0 110 1.25.625.625 0 010-1.25zM7.575 3.55a1.816 1.816 0 01-.288 2.188l-.02.018-.067.06-.05.046-.085.078-.044.042-.044.043-.045.045-.044.047a1.38 1.38 0 00-.388.97v.163h-1v-.188c0-.729.305-1.24.599-1.583l.046-.052.046-.05.045-.048.044-.044.043-.042.04-.04.095-.087.017-.016.037-.034.05-.04.013-.013a.796.796 0 00.125-.976.816.816 0 00-.913-.374c-.35.1-.6.412-.6.787h-1c0-.825.55-1.538 1.35-1.75a1.814 1.814 0 012.038.85z"
                                        fill="#000" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <div class="benefits-item">
                                <img alt="" class="offers-icon"
                                    src="https://au2-images.shop.samsung.com/medias/icon-regular-shopping-finance.png?context=bWFzdGVyfGltYWdlc3wxMjEyfGltYWdlL3BuZ3xhR05pTDJnNVpDODBOVEF3TURrNU56YzJOVEUxTUM5cFkyOXVMWEpsWjNWc1lYSXRjMmh2Y0hCcGJtY3RabWx1WVc1alpTNXdibWN8Njk3Mjc4N2Q5ZDU5MjJjOWI5MWY2NzAxZDRlYzYzMjcxMDIzYTJhZjRiOGUxYThiYmFjYWNkNTk1ZTY4NDExMA">
                                Đổi sản phẩm theo chính sách trong 14 ngày<svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 12 12" width="10px" height="100%" fit=""
                                    preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path
                                        d="M6 .375A5.617 5.617 0 0111.625 6c0 3.1-2.525 5.625-5.625 5.625A5.617 5.617 0 01.375 6 5.618 5.618 0 016 .375zm0 1C3.45 1.375 1.375 3.45 1.375 6S3.45 10.625 6 10.625 10.625 8.55 10.625 6a4.67 4.67 0 00-1.35-3.275A4.666 4.666 0 006 1.375zm0 6.5a.625.625 0 110 1.25.625.625 0 010-1.25zM7.575 3.55a1.816 1.816 0 01-.288 2.188l-.02.018-.067.06-.05.046-.085.078-.044.042-.044.043-.045.045-.044.047a1.38 1.38 0 00-.388.97v.163h-1v-.188c0-.729.305-1.24.599-1.583l.046-.052.046-.05.045-.048.044-.044.043-.042.04-.04.095-.087.017-.016.037-.034.05-.04.013-.013a.796.796 0 00.125-.976.816.816 0 00-.913-.374c-.35.1-.6.412-.6.787h-1c0-.825.55-1.538 1.35-1.75a1.814 1.814 0 012.038.85z"
                                        fill="#000" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div> 
            @else
                Bạn chưa mua gì!!
            @endif
            





        </div>
    </div>
    </section>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Khi nhấn nút giảm số lượng
        $('.decrease').click(function() {
            var quantityElement = $(this).siblings('.quantity');
            var quantity = parseInt(quantityElement.text());

            if (quantity > 1) {
                quantity--; // Giảm số lượng
                quantityElement.text(quantity); // Cập nhật số lượng trên giao diện
                $(this).closest('form').find('.quantity-input').val(
                    quantity); // Cập nhật giá trị trong form

                // Cập nhật giá trị trong cơ sở dữ liệu khi thay đổi số lượng
                $(this).closest('form').submit(); // Gửi form để cập nhật
            }
        });

        // Khi nhấn nút tăng số lượng
        $('.increase').click(function() {
            var quantityElement = $(this).siblings('.quantity');
            var quantity = parseInt(quantityElement.text());

            quantity++; // Tăng số lượng
            quantityElement.text(quantity); // Cập nhật số lượng trên giao diện
            $(this).closest('form').find('.quantity-input').val(
                quantity); // Cập nhật giá trị trong form

            // Cập nhật giá trị trong cơ sở dữ liệu khi thay đổi số lượng
            $(this).closest('form').submit(); // Gửi form để cập nhật
        });
    });
</script>




    