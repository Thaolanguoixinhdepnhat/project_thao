@extends('layout.master')

@section('title', 'Danh sách sản phẩm')

@section('content')
   
    {{-- 
        todo: hiển thị lọc  
        k dùng slider 1 page max 20 product
    --}}
    
    <div class="product">
        <div class="container">
            <div class="content">
                <div class="carousel-slider">
                    @foreach ($products as $item)
                        <div class="item">
                            <div class="product-image-wrap">
                                @if ($item->productImages->isNotEmpty())
                                    <img src="{{ asset('storage/' . $item->productImages->first()->product_image) }}" 
                                         alt="load" class="active">
                                @endif
                            </div>
                            <div class="product-info">
                                <p class="product-name active">{{ $item->product_name }}</p>
                            </div>
                            <div class="my-recommended-product__card--color" style="height: 47px;"></div>
                            <div class="product-options">
                                @foreach ($item->productClasses as $index => $class)
                                    <input type="radio" id="option-{{ $item->id }}-{{ $class->size }}" 
                                           name="product-size-{{ $item->id }}" 
                                           value="{{ $class->size }}" 
                                           data-price="{{ $class->price }}"
                                           data-product-class-id="{{ $class->id }}" 
                                           data-product-image-id="{{ $item->productImages->first()->id }}" 
                                           {{ $index === 0 ? 'checked' : '' }}>
                                    <label for="option-{{ $item->id }}-{{ $class->size }}" class="option-label">{{ $class->size }}</label>
                                @endforeach
                            </div>
                
                            <div class="my-recommended-product__card--color" style="height: 30px;"></div>
                
                            <div class="product-price">
                                <span class="current-price" id="current-price-{{ $item->id }}">
                                    {{ number_format($item->productClasses[0]->price, 0, ',', '.') }} VNĐ
                                </span>
                            </div>
                
                            <div class="my-recommended-product__card-cta">
                                <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <input type="hidden" name="product_class_id" value="{{ $item->productClasses[0]->id }}" class="product-class-id">
                                    <input type="hidden" name="product_images_id" value="{{  $item->productImages->first()->id }}">
                                    <button type="submit" class="card-cta">Mua ngay</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Khởi tạo slider
            $('.carousel-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                arrows: true,
                autoplay: false,
                autoplaySpeed: 3000,
            });

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll("input[type='radio']").forEach(radio => {
                radio.addEventListener("change", function () {
                    let productId = this.id.split('-')[1]; // Get product ID from radio button ID
                    let price = this.dataset.price; // Get price from data-price attribute
                    let productClassId = this.dataset.productClassId; // Get product_class_id from data-product-class-id
                    let productImageId = this.dataset.productImageId; // Get product_image_id from data-product-image-id

                    // Update the displayed price
                    document.getElementById(`current-price-${productId}`).innerText = 
                        new Intl.NumberFormat('vi-VN').format(price) + " VND";
                    
                    // Update the product_class_id in the corresponding form
                    let form = document.getElementById(`form-${productId}`);
                    form.querySelector('.product-class-id').value = productClassId;
                });
            });
        });
    </script>

@endsection
