@extends('layout.master')

@section('title', 'Thanh toán thành công')

@section('content')
<style>
    .card-form {
  max-width: 50rem;
  margin: 5rem auto 8rem;
  padding: 3rem 3rem 5rem;
  background: #ffffff;
  border-radius: 1.2rem;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  font-family: "Segoe UI", sans-serif;
}

.card-form h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.card-form label {
  display: block;
  margin-top: 15px;
  margin-bottom: 5px;
  font-weight: 500;
}

.card-form input {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 16px;
  transition: border-color 0.3s;
}

.card-form input:focus {
  border-color: #007bff;
  outline: none;
}

.card-form .row {
  display: flex;
  gap: 10px;
}

.card-form .col {
  flex: 1;
}

.card-form button {
  width: 100%;
  padding: 12px;
  margin-top: 20px;
  background-color: #007bff;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s;
  text-align: center;
}

.card-form button:hover {
  background-color: #0056b3;
}
h2{
    font-size: 3rem
}
.payment-option {
  display: none;
}

.sec-option .container .content .item.active {
  font-weight: bold;
  color: #fff;
  background: #0056b3
}
.sec-option{
    margin-top: 5rem;
}
.sec-option .container .content .item{
    width: 100%;
    background: #fff;
    text-align: center;
    padding: 1rem;
    cursor: pointer;
    transition: .3s ease;
}
.sec-option .container .content .item.item:hover{
    opacity: 0.6;
}

.qr .img{
    display: flex;
    justify-content: center;
    margin-top: 4rem;
    margin-bottom: 8rem;
}

</style>

    <section class="sec-option">
        <div class="container">
            <div class="content">
                <div class="item active" data-target="op1">
                    Thanh toán khi nhận hàng
                </div>
                <div class="item" data-target="op2">
                    Thanh toán online
                </div>
                <div class="item" data-target="op3">
                    Thanh toán bằng thẻ
                </div>
            </div>
        </div>
    </section>

    

    <form action="{{route('checkout')}}" method="POST" id="op1" class="payment-option" data-target="op1">
        @csrf
        <section class="sec-check" style="max-width: 50rem; width: 100%; margin: 5rem auto 8rem; background: #fff; border-radius: 1.2rem; padding: 3rem;">
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

    <div class="qr payment-option" id="op2" data-target="op2">
        <div class="img">
            <img src="./assets1/images/qr.png" alt="" >
        </div>
    </div>

    <div class="card-form payment-option" id="op3" data-target="op3">
        <h2>Thanh toán bằng thẻ ngân hàng</h2>
        <form>
            <label for="card-number">Số thẻ</label>
            <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" />

            <label for="card-name">Tên chủ thẻ</label>
            <input type="text" id="card-name" placeholder="Nguyễn Văn A" />

            <div class="row">
            <div class="col">
                <label for="exp-date">Ngày hết hạn</label>
                <input type="text" id="exp-date" placeholder="MM/YY" maxlength="5" />
            </div>
            <div class="col">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" placeholder="***" maxlength="3" />
            </div>
            </div>

            <button type="submit">Thanh toán</button>
        </form>
    </div>

    

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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Xử lý khi click vào các phương thức thanh toán
        document.querySelectorAll('.sec-option .item').forEach(item => {
            item.addEventListener('click', () => {
                // Xóa active khỏi tất cả item
                document.querySelectorAll('.sec-option .item').forEach(i => i.classList.remove('active'));

                // Ẩn tất cả các phần thanh toán
                document.querySelectorAll('.payment-option').forEach(el => el.style.display = 'none');

                // Thêm active cho item được click
                item.classList.add('active');

                // Hiển thị đúng phần tương ứng
                const targetId = item.getAttribute('data-target');
                const targetEl = document.getElementById(targetId);

                if (targetEl) {
                    targetEl.style.display = 'block';
                } else {
                    console.warn('Không tìm thấy phần tử với id:', targetId);
                }
            });
        });

        // Mặc định active và hiển thị op1
        const defaultItem = document.querySelector('.sec-option .item[data-target="op1"]');
        const defaultContent = document.getElementById('op1');

        if (defaultItem && defaultContent) {
            defaultItem.classList.add('active');
            defaultContent.style.display = 'block';
        }
    });
</script>



    <div class="dialog-overlay"></div>
@endsection
