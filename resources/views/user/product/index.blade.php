@extends('layout.master')

@section('title', 'Danh sách sản phẩm')

@section('content')

{{-- todo: hiển thị 10 sản phẩm mới nhất  --}}
{{-- todo: hiển thị 5-10 đt mới nhất  --}}
{{-- todo: hiển thị 5-10 tv mới nhất  --}}
   
    {{-- 
        todo: hiển thị lọc  
        k dùng slider 1 page max 20 product
    --}}




    <section class="sec-product">
        <div class="container">
            <div class="content">
                <div class="content-head">
                    <div class="text_block">
                        <h2>Sản Phẩm Nổi Bật</h2>
                    </div>
                    <div class="content-list__common">
                        <ul class="list">
                            @foreach($categories as $category)
                                <li class="item">
                                    <button role="tab" class="tab__item-title">
                                        {{ $category->category_name }} <span class="tab__item-line"></span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
    
                <div class="content-body content-slider">
                    
                    <div class="item">
                        <div class="left-column">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_Ultra_PC.jpg?$684_684_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_Ultra_MO.jpg?$624_352_JPG$"
                                    alt="Galaxy S25 Ultra"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_Ultra_PC.jpg?$684_684_JPG$">
                                <div class="text-image">
                                    <span class="title">Galaxy S25 Ultra 1TB<br>Màu Xanh Titan</span>
                                    <span class="sub-text">Ưu đãi 5,8 triệu</span>
                                    <button class="btn-register1">Mua ngay</button>
                                </div>
                            </div>
                        </div>
    
                        <div class="right-column">
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S24_Ultra_Ex_PC_0228.jpg?$330_330_JPG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S24_Ultra_Ex_MO_0228.jpg?$296_352_JPG$"
                                        alt=""
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S24_Ultra_Ex_PC_0228.jpg?$330_330_JPG$">
                                    <div class="txt-image">
                                        <span>Galaxy S24 Ultra 512GB<br>Ưu đãi đậm 10,5TR</span>
                                    </div>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon">Mới</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC-A06.jpg?$330_330_JPG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO-A062.jpg?$296_352_JPG$"
                                        alt="Galaxy A06 5G"
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC-A06.jpg?$330_330_JPG$">
                                </div>
                                <div class="txt-image">
                                    <span>Galaxy A06 5G Mới <br>Tặng củ sạc 25W</span>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/M35_Black_PC.jpg?$330_330_JPG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/M35_Black_MO.jpg?$296_352_JPG$"
                                        alt="Galaxy M35"
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/M35_Black_PC.jpg?$330_330_JPG$">
                                </div>
                                <div class="txt-image">
                                    <span>Galaxy M35<br>Tặng Galaxy Fit3</span>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/A16_PC.jpg?$330_330_JPG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/A16_MO.jpg?$296_352_JPG$"
                                        alt="Galaxy A16 Ưu đãi 800k, tặng sạc 25W"
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/A16_PC.jpg?$330_330_JPG$">
                                </div>
                                <div class="txt-image">
                                    <span>Galaxy A16<br>Ưu đãi 800k, tặng sạc 25W</span>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="left-column">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Big_Combo_QE1DBuds3.jpg?$684_684_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_Big_ComboQE1DBuds3.jpg?$624_352_JPG$"
                                    alt="55 Inch QLED QE1D 4K Smart TV"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Big_Combo_QE1DBuds3.jpg?$684_684_JPG$">
                                <div class="text-image">
                                    <span class="title">Buds3 giá chỉ từ 3,2TR <br>khi mua kèm Tivi</span>
                                    <span class="sub-text">55 Inch QLED QE1D 4K Smart TV</span>
                                    <button class="btn-register1">Mua ngay</button>
                                </div>
                            </div>
                        </div>
    
                        <div class="right-column">
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2024/PC_Small_UA50DU7000KXXV.png?$330_330_PNG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA50DU7000KXXV_MO.png?$296_352_PNG$"
                                        alt="dec small top left ua50du7000kxxv"
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2024/PC_Small_UA50DU7000KXXV.png?$330_330_PNG$">
                                    <div class="txt-image">
                                        <span>Mua kèm Buds 3 giảm 10% trên<br>combo</span>
                                    </div>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA98S90DAKXXV.png?$330_330_PNG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_Small_QA98S90DAKXXV.png?$296_352_PNG$"
                                        alt=""
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA98S90DAKXXV.png?$330_330_PNG$">
                                </div>
                                <div class="txt-image">
                                    <span>TV S90D 65 Inch <br>Tặng miễn phí loa</span>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA75LS03DAKXXV.png?$330_330_PNG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_Small_QA75LS03DAKXXV.png?$296_352_PNG$"
                                        alt="dec small bottom left qa65ls03dakxxv"
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA75LS03DAKXXV.png?$330_330_PNG$">
                                </div>
                                <div class="txt-image">
                                    <span>The Frame 75 Inch<br>Tặng khung viền</span>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                            <div class="item">
                                <div class="image">
                                    <span class="badge-icon_red">Sale</span>
                                    <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                        data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA98DU9000KXXV-PC.jpg?$330_330_JPG$"
                                        data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA98DU9000KXXV-MO.jpg?$296_352_JPG$"
                                        alt=""
                                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA98DU9000KXXV-PC.jpg?$330_330_JPG$">
                                </div>
                                <div class="txt-image">
                                    <span>TV DU9000 98 Inch<br>Tặng miễn phí loa</span>
                                </div>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                   
    
                </div>
            </div>
        </div>
    </section>
    
     {{-- <div class="product">
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
    </div>  --}}

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
