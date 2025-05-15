@extends('layout.master')

@section('title', '')

@section('content')

    <section class="sec_one">
        <div class="container">
            <div class="content">
                <div class="carousel main-class">
                    <div class="carousel-item">
                        <video id="main-video" autoplay muted name="media">
                            <source
                                src="https://images.samsung.com/is/content/samsung/assets/vn/2501/home/HOME_P3_Main-KV_1440x640_pc_LTR.mp4"
                                type="video/mp4">
                        </video>
                        <div class="video-main_txt">
                            <h3>Thu cũ đổi mới hỗ trợ thêm 2 triệu</h3>
                            <div class="btn-group">
                                <button class="btn-outline"><span>Tìm hiểu thêm</span></button>
                                <button class="btn-primary">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2024/PC_1.jpg?imwidth=1536"
                            alt="Samsung AI TV">
                        <div class="banner-text">
                            <h2>Samsung AI TV đỉnh cao<br>
                                AI toàn năng, thăng hạng toàn diện</h2>
                            <p>Combo quà tặng AI TV lên đến 40 triệu</p>
                            <button class="banner-button">Mua ngay</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/Handraiser_PC_1440x640_NT.jpg?imwidth=1536"
                            alt="Ưu đãi đăng ký sớm">
                        <div class="voucher-text">
                            <p>Đăng ký sớm nhận voucher 1 Triệu đồng.</p>
                            <p>Duy nhất từ 12.03 - 25.03</p>
                            <button class="register-btn">Đăng ký ngay</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="banner-image"
                            src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/1440x640Notext.jpg?imwidth=2560"
                            alt="Samsung Festival">
                        <div class="sale">
                            <h1>Sale hội tưng bừng<br>Mừng đời sang trang</h1>
                            <p>Ăn mừng cột mốc bạn mới đạt được với ưu đãi<br>lên đến 50% từ
                                Samsung<br>#AnMungVoiSamSung</p>
                            <button class="btn-register">Mua ngay</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/f1-web-kv-1440x640.jpg?imwidth=1536"
                            alt="E-Voucher">
                        <div class="voucher">
                            <h1>Săn E-Voucher 500k<br>Chỉ với 100k</h1>
                            <p>Áp dụng khi mua Galaxy A56 | A36</p>
                            <button class="btn-register">Mua ngay</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="sec_one1">
        <div class="container">
            <div class="content">
                <div class="layout">
                    <div class="cot1">
                        <img src="{{ asset('storage/product_images/banner-06.jpg') }}" alt="Banner" />
                    </div>
                   
                    <div class="cot2">
                        <img src="{{ asset('storage/product_images/banner_group_1.jpg') }}" alt="Banner" />
                    </div>
                    <div class="cot3">
                        <img src="{{ asset('storage/product_images/banner_group_3.jpg') }}" alt="Banner" />
                    </div>
                 
                </div>
            </div>
        </div>
    </section>

    <section class="sec-product">
        <div class="container">
            <div class="content">
                <div class="content-head">
                    <div class="text_block">
                        <h2 class="section-title">Sản Phẩm Nổi Bật</h2>
                    </div>
                    <div class="content-list__common">
                        <ul class="list">
                            @foreach ($categories as $category)
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
                    @foreach ($tv->chunk(5) as $chunk)
                        <div class="item">
                            @php
                                $firstProduct = $chunk->first();
                            @endphp

                            @if ($firstProduct && $firstProduct->product_image)
                                <div class="left-column">
                                    <div class="image">
                                        <span class="badge-icon">Mới</span>
                                        <img class="image__main responsive-img image--loaded"
                                            src="{{ asset('storage/' . $firstProduct->product_image) }}"
                                            alt="{{ $firstProduct->product_name }}">
                                        <div class="text-image">
                                            <span class="title">{{ $firstProduct->product_name }}</span>
                                            <a href="{{route('user.products.index')}}" class="btn-register1">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="right-column">
                                @foreach ($chunk->skip(1) as $product)
                                    @if ($product->product_image)
                                        <div class="item">
                                            <div class="image">
                                                <span class="badge-icon_red">Sale</span>
                                                <img class="image__main responsive-img image--loaded"
                                                    src="{{ asset('storage/' . $product->product_image) }}"
                                                    alt="{{ $product->product_name }}">
                                                <div class="txt-image">
                                                    <span>{{ $product->product_name }}</span>
                                                </div>
                                            </div>
                                            <a href="{{route('user.products.index')}}" class="btn-register1">Xem thêm</a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    @foreach ($dt->chunk(5) as $chunk)
                        <div class="item">
                            @php
                                $firstProduct = $chunk->first();
                            @endphp

                            @if ($firstProduct && $firstProduct->product_image)
                                <div class="left-column">
                                    <div class="image">
                                        <span class="badge-icon">Mới</span>
                                        <img class="image__main responsive-img image--loaded"
                                            src="{{ asset('storage/' . $firstProduct->product_image) }}"
                                            alt="{{ $firstProduct->product_name }}">
                                        <div class="text-image">
                                            <span class="title">{{ $firstProduct->product_name }}</span>
                                            <a href="{{route('user.products.index')}}" class="btn-register1">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="right-column">
                                @foreach ($chunk->skip(1) as $product)
                                    @if ($product->product_image)
                                        <div class="item">
                                            <div class="image">
                                                <span class="badge-icon_red">Sale</span>
                                                <img class="image__main responsive-img image--loaded"
                                                    src="{{ asset('storage/' . $product->product_image) }}"
                                                    alt="{{ $product->product_name }}">
                                                <div class="txt-image">
                                                    <span>{{ $product->product_name }}</span>
                                                </div>
                                            </div>

                                            <a href="{{route('user.products.index')}}" class="btn-register1">Xem thêm</a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="sec-two">
        <div class="container">
            <div class="content">
                <div class="content-head">
                    <div class="text_block">
                        <h2 class="section-title">Gợi ý dành cho bạn</h2>
                        <span class="subtitle">Dành riêng cho bạn những sản phẩm phù hợp nhất</span>
                        <div class="content-body wrap-slider">
                            @foreach ($news as $index => $item)
                            <div class="item">
                                <form class="formAddToCart" action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    {{-- <div class="img">
                                        <img class="image__main responsive-img image--loaded"
                                             src="{{ asset('storage/' . $item->product_image) }}"
                                             alt="{{ $item->product_name }}">
                                    </div> --}}
                                <a href="{{ route('user.detail', ['id' => $item->id]) }}">
                                    <div class="img">
                                        <img class="image__main responsive-img image--loaded"
                                            src="{{ asset('storage/' . $item->product_image) }}"
                                            alt="{{ $item->product_name }}">
                                    </div>
                                </a>
                                    <span class="badge-icon_red">New</span>
                                    
                                    <div class="txt-name">
                                        <span>{{ $item->product_name }}</span>
                                    </div>
                                
                                    <div class="color">
                                        <label for="color_{{ $index }}">Màu sắc :</label>
                                        <div class="list-color">
                                            @foreach ($item->productClasses as $productClasses)
                                                <label for="color_{{ $index }}_{{ $loop->index }}">
                                                    <input type="radio" id="color_{{ $index }}_{{ $loop->index }}" name="color_{{ $index }}" value="{{ $productClasses->color_code }}" style="display:none;">
                                                    <span class="color-circle" style="
                                                        display: inline-block;
                                                        width: 2rem;
                                                        height: 2rem;
                                                        border-radius: 50%;
                                                        background-color: {{ $productClasses->color_code }};
                                                        cursor: pointer;">
                                                    </span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                
                                    <div class="size">
                                        <label for="size_{{ $index }}">Ram :</label>
                                        <div class="list-size">
                                            @foreach ($item->productClasses as $productClasses)
                                                <label for="size_{{ $index }}_{{ $loop->index }}">
                                                    <span class="size-circle">{{ $productClasses->size }}</span>
                                                    <input type="radio" id="size_{{ $index }}_{{ $loop->index }}" name="size_{{ $index }}" value="{{ $productClasses->size }}" style="display:none;">
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                
                                    <div class="price">
                                        <label for="">Giá:</label>
                                        <span class="price"></span>
                                    </div>
                                   
                                    <div class="btn">
                                        {{-- <a href="{{route('user.detail', ['id' => $item->id])}}" class="btn-register1">Chi tiết</a> --}}

                                        <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                            <input type="hidden" name="product_class_id" id="product_class_id_{{ $index }}" value="">
                                            <button type="submit" class="btn-register1">Mua ngay</button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="sec-two1">
        <div class="container">
            <div class="content">
                <div class="main">
                    <img src="{{ asset('storage/product_images/banner4.jpg') }}" alt="Banner" />
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="sec-dt sec-two">
        <div class="container">
            <div class="content">
                <div class="content-head">
                    <div class="text_block">
                        <h2 class="section-title">Điện thoại </h2>
                        <span class="subtitle">Khám phá những siêu phẩm công nghệ vừa ra mắt</span>

                        <div class="content-body wrap-slider">
                            @foreach ($dt as $index => $item)
                                <div class="item">
                                    <form class="formAddToCart" action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <div class="img">
                                            <img class="image__main responsive-img image--loaded"
                                                src="{{ asset('storage/' . $item->product_image) }}"
                                                alt="{{ $item->product_name }}">
                                        </div>
                                    
                                        <span class="badge-icon_red">New</span>
                                        
                                        <div class="txt-name">
                                            <span>{{ $item->product_name }}</span>
                                        </div>
                                    
                                        <div class="color">
                                            <label for="color_{{ $index }}">Màu sắc :</label>
                                            <div class="list-color">
                                                @foreach ($item->productClasses as $productClasses)
                                                    <label for="color_{{ $index }}_{{ $loop->index }}">
                                                        <input type="radio" id="color_{{ $index }}_{{ $loop->index }}" name="color_{{ $index }}" value="{{ $productClasses->color_code }}" style="display:none;">
                                                        <span class="color-circle" style="
                                                            display: inline-block;
                                                            width: 2rem;
                                                            height: 2rem;
                                                            border-radius: 50%;
                                                            background-color: {{ $productClasses->color_code }};
                                                            cursor: pointer;">
                                                        </span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                        <div class="size">
                                            <label for="size_{{ $index }}">Ram :</label>
                                            <div class="list-size">
                                                @foreach ($item->productClasses as $productClasses)
                                                    <label for="size_{{ $index }}_{{ $loop->index }}">
                                                        <span class="size-circle">{{ $productClasses->size }}</span>
                                                        <input type="radio" id="size_{{ $index }}_{{ $loop->index }}" name="size_{{ $index }}" value="{{ $productClasses->size }}" style="display:none;">
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                        <div class="price">
                                            <label for="">Giá:</label>
                                            <span class="price"></span>
                                        </div>

                                        <div class="btn">
                                            <a href="{{route('user.detail', ['id' => $item->id])}}" class="btn-register1">Chi tiết</a>

                                            <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="product_class_id" id="product_class_id_{{ $index }}" value="">
                                                <button type="submit" class="btn-register1">Mua ngay</button>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    
<section class="sec-dt sec-two">
        <div class="container">
            <div class="content">
                <div class="content-head">
                    <div class="text_block">
                        <h2 class="section-title">Điện thoại </h2>
                        <span class="subtitle">Khám phá những siêu phẩm công nghệ vừa ra mắt</span>

                        <div class="content-body wrap-slider">
                            @foreach ($dt as $index => $item)
                                <div class="item">
                                    <form class="formAddToCart" action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                      
                                           <a href="{{ route('user.detail', ['id' => $item->id]) }}">
                                        <div class="img">
                                            <img class="image__main responsive-img image--loaded"
                                                src="{{ asset('storage/' . $item->product_image) }}"
                                                alt="{{ $item->product_name }}">
                                        </div>
                                    </a>
                                        <span class="badge-icon_red">New</span>
                                       
                                        <div class="txt-name">
                                            <span>{{ $item->product_name }}</span>
                                        </div>
                                    
                                        <div class="color">
                                            <label for="color_{{ $index }}">Màu sắc :</label>
                                            <div class="list-color">
                                                @foreach ($item->productClasses as $productClasses)
                                                    <label for="color_{{ $index }}_{{ $loop->index }}">
                                                        <input type="radio" id="color_{{ $index }}_{{ $loop->index }}" name="color_{{ $index }}" value="{{ $productClasses->color_code }}" style="display:none;">
                                                        <span class="color-circle" style="
                                                            display: inline-block;
                                                            width: 2rem;
                                                            height: 2rem;
                                                            border-radius: 50%;
                                                            background-color: {{ $productClasses->color_code }};
                                                            cursor: pointer;">
                                                        </span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                        <div class="size">
                                            <label for="size_{{ $index }}">Ram :</label>
                                            <div class="list-size">
                                                @foreach ($item->productClasses as $productClasses)
                                                    <label for="size_{{ $index }}_{{ $loop->index }}">
                                                        <span class="size-circle">{{ $productClasses->size }}</span>
                                                        <input type="radio" id="size_{{ $index }}_{{ $loop->index }}" name="size_{{ $index }}" value="{{ $productClasses->size }}" style="display:none;">
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                        <div class="price">
                                            <label for="">Giá:</label>
                                            <span class="price"></span>
                                        </div>

                                        <div class="btn">
                                            

                                            <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="product_class_id" id="product_class_id_{{ $index }}" value="">
                                                <button type="submit" class="btn-register1">Mua ngay</button>
                                            </form>
                                            
      







                                            
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="sec-tv sec-two">
        <div class="container">
            <div class="content">
                <div class="content-head">
                    <div class="text_block">
                        <h2 class="section-title">Tv&AV </h2>
                    <div class="two-column-layout">
                     <div class="content-body wrap-slider">
                            @foreach ($tv as $index => $item)
                                <div class="item">
                                    <form class="formAddToCart" action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}"> 
                                        @csrf
                                        {{-- <div class="img">
                                            <img class="image__main responsive-img image--loaded"
                                                src="{{ asset('storage/' . $item->product_image) }}"
                                                alt="{{ $item->product_name }}">
                                        </div> --}}
                                           <a href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                <div class="img">
                                                    <img class="image__main responsive-img image--loaded"
                                                        src="{{ asset('storage/' . $item->product_image) }}"
                                                        alt="{{ $item->product_name }}">
                                                </div>
                                            </a>
             
                                    
                                        <span class="badge-icon_red">New</span>
                                        
                                        <div class="txt-name">
                                            <span>{{ $item->product_name }}</span>
                                        </div>
                                    
                                        <div class="color">
                                            <label for="color_{{ $index }}">Màu sắc :</label>
                                            <div class="list-color">
                                                @foreach ($item->productClasses as $productClasses)
                                                    <label for="color_{{ $index }}_{{ $loop->index }}">
                                                        <input type="radio" id="color_{{ $index }}_{{ $loop->index }}" name="color_{{ $index }}" value="{{ $productClasses->color_code }}" style="display:none;">
                                                        <span class="color-circle" style="
                                                            display: inline-block;
                                                            width: 2rem;
                                                            height: 2rem;
                                                            border-radius: 50%;
                                                            background-color: {{ $productClasses->color_code }};
                                                            cursor: pointer;">
                                                        </span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                        <div class="size">
                                            <label for="size_{{ $index }}">Ram :</label>
                                            <div class="list-size">
                                                @foreach ($item->productClasses as $productClasses)
                                                    <label for="size_{{ $index }}_{{ $loop->index }}">
                                                        <span class="size-circle">{{ $productClasses->size }}</span>
                                                        <input type="radio" id="size_{{ $index }}_{{ $loop->index }}" name="size_{{ $index }}" value="{{ $productClasses->size }}" style="display:none;">
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    
                                        <div class="price">
                                            <label for="">Giá:</label>
                                            <span class="price"></span>
                                        </div>

                                        <div class="btn">
                                            {{-- <a href="{{route('user.detail', ['id' => $item->id])}}" class="btn-register1">Chi tiết</a> --}}
                                            
                                            <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="product_class_id" id="product_class_id_{{ $index }}" value="">
                                                <button type="submit" class="btn-register1">Mua ngay</button>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
 


         
    
{{-- size - color  --}}
    <script>
       $(document).ready(function() {
            function updateProductInfo(form) {
                var colorCode = form.find("input[name^='color_']:checked").val();
                var size = form.find("input[name^='size_']:checked").val();
                var productClassId = form.find("input[name='product_class_id']");
                var priceElement = form.find(".price span.price");

                $.ajax({
                    url: "{{ route('getProductClassByColorAndSize') }}",
                    type: "GET",
                    data: {
                        color_code: colorCode,
                        size: size
                    },
                    success: function(response) {
                        if (response.product_class_id) {
                            productClassId.val(response.product_class_id);
                        }
                        if (response.price) {
                            priceElement.text(response.price.toLocaleString() + " vnđ");
                        } else {
                            priceElement.text("");
                        }
                    },
                    error: function() {
                        alert("Lỗi khi truy vấn dữ liệu.");
                    }
                });
            }

            // --- Thêm đoạn này: Set mặc định khi load trang ---
            $('form').each(function() {
                var form = $(this);

                // Chọn color đầu tiên
                var firstColorInput = form.find('.list-color input[type="radio"]').first();
                firstColorInput.prop('checked', true);
                form.find('.color-circle').removeClass('active');
                firstColorInput.siblings('.color-circle').addClass('active');

                // Chọn size đầu tiên
                var firstSizeInput = form.find('.list-size input[type="radio"]').first();
                firstSizeInput.prop('checked', true);
                form.find('.size-circle').removeClass('active');
                firstSizeInput.siblings('.size-circle').addClass('active');

                // Gọi ajax lấy thông tin sản phẩm
                updateProductInfo(form);
            });

            // --- Phần sự kiện khi chọn màu ---
            $('.list-color input[type="radio"]').change(function() {
                var form = $(this).closest('form');

                form.find('.color-circle').removeClass('active');
                $(this).siblings('.color-circle').addClass('active');

                updateProductInfo(form);
            });

            // --- Phần sự kiện khi chọn size ---
            $('.list-size input[type="radio"]').change(function() {
                var form = $(this).closest('form');

                form.find('.size-circle').removeClass('active');
                $(this).siblings('.size-circle').addClass('active');

                updateProductInfo(form);
            });
        });


    </script>

    <script>
        $(document).ready(function() {
            $('.content-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,

            });

            $('.wrap-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 856,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.tab__item-title').on('click', function() {
                let index = $(this).parent().index(); // Lấy vị trí của tab
                $('.tab__item-title').removeClass('active'); // Bỏ class active tất cả
                $(this).addClass('active'); // Thêm active cho tab được click

                $('.content-slider').slick('slickGoTo', index); // Chuyển đến slide tương ứng
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var $carousel = $('.main-class');
            var defaultDuration = 5000;
            var videoDuration = defaultDuration;
            var isVideoPlaying = false;
            var $currentVideo = null;
            var interval;
            var isUserClicked = false;
            $carousel.slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: videoDuration,
                dots: true,
                pauseOnHover: false,
                arrows: true,
                prevArrow: '<button class="prev slick-arrow" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg></button>',
                nextArrow: '<button class="next slick-arrow" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg></button>'
            });

            function updateProgressBar(duration) {
                $('.slick-dots li::after').css({
                    width: "0%",
                    transition: "none"
                });

                setTimeout(function() {
                    $('.slick-dots li.slick-active::after').css({
                        width: "100%",
                        transition: duration + "ms linear"
                    });
                }, 10);
            }
            $carousel.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                var $nextSlide = $(slick.$slides[nextSlide]);
                var $video = $nextSlide.find('video');

                clearInterval(interval);

                if ($video.length > 0) {
                    isVideoPlaying = true;
                    $currentVideo = $video[0];
                    $carousel.slick('slickPause');
                    $currentVideo.play().then(() => {
                        videoDuration = $currentVideo.duration * 1000;
                        updateProgressBar(videoDuration);
                    }).catch(error => {
                        console.error("Không thể tự động phát video:", error);
                        isVideoPlaying = false;
                        videoDuration = defaultDuration;
                        updateProgressBar(videoDuration);
                        if (!isUserClicked) {
                            $carousel.slick('slickPlay');
                        }
                    });
                    $currentVideo.onended = function() {
                        isVideoPlaying = false;
                        isUserClicked = false;
                        $carousel.slick('slickNext');
                        $carousel.slick('slickPlay');
                    };
                } else {
                    isVideoPlaying = false;
                    videoDuration = defaultDuration;
                    updateProgressBar(videoDuration);
                    if (!isUserClicked) {
                        $carousel.slick('slickPlay');
                    }
                }
            });
            $carousel.on('afterChange', function(event, slick, currentSlide) {
                if (isVideoPlaying && $currentVideo) {
                    interval = setInterval(function() {
                        var percent = ($currentVideo.currentTime / $currentVideo.duration) * 100;
                        $('.slick-dots li.slick-active::after').css("width", percent + "%");
                    }, 500);
                } else {
                    updateProgressBar(videoDuration);
                }
            });

            // 📌 **Xử lý click vào thanh slick-dots để chạy tiếp tục ảnh tiếp theo**
            $('.slick-dots li').on('click', function() {
                var index = $(this).index(); // Lấy index của ảnh được click
                isUserClicked = true; // Đánh dấu người dùng đã click

                $carousel.slick('slickGoTo', index, true); // Chuyển ngay lập tức đến ảnh được click

                // Sau khi ảnh/video chạy xong, tiếp tục autoplay từ ảnh tiếp theo
                setTimeout(function() {
                    isUserClicked = false; // Bỏ trạng thái click sau khi ảnh chạy xong
                    $carousel.slick('slickNext'); // Chuyển sang ảnh kế tiếp
                    $carousel.slick('slickPlay'); // Tiếp tục autoplay chạy liên tục
                }, videoDuration);
            });

            // Cập nhật progress bar lần đầu
            updateProgressBar(videoDuration);
        });
    </script>




    <footer>
        <div class="container">
            <div class="content">
                <div class="footer__text">
                    <p>*Hình ảnh được mô phỏng. Có thể cần đăng nhập Samsung account cho một số tính năng AI nhất định.
                        UX/UI thực tế có thể khác.</p>
                    <p>*Hình ảnh mang tính chất minh họa. Cần đăng nhập tài khoản Samsung để sử dụng một số tính năng AI
                        nhất định.</p>
                    <p>*Hình ảnh được mô phỏng. Màu tai nghe Galaxy Buds3 Pro có sẵn có thể thay đổi theo quốc gia hoặc
                        nhà mạng. Galaxy Buds3 Pro hỗ trợ các tính năng của Galaxy AI như Interpreter và Live Translate
                        khi được ghép nối với các thiết bị Samsung Galaxy tương thích. Sự sẵn có của các tính năng
                        Galaxy AI có thể thay đổi tùy theo model thiết bị. Vui lòng truy cập trang Samsung.com để biết
                        chi tiết.</p>
                    <p>*Hình ảnh mang tính chất minh họa. Cần đăng nhậptài khoản Samsung để sử dụng một số tính năng AI
                        nhất định.</p>
                    <p>*Tính năng Phiên Dịch Trực Tiếp Cuộc Gọi yêu cầu có kết nối mạng và đăng nhập tài khoản Samsung.
                        Phiên Dịch Trực Tiếp Cuộc Gọi chỉ khả dụng trên ứng dụng Samsung Phone được cài đặt sẵn. Một số
                        ngôn ngữ có thể yêu cầu phải tải xuống. Khả dụng với một số ngôn ngữ nhất định. Độ chính xác
                        không được đảm bảo hoàn toàn.</p>
                    <p>*Galaxy S24+ so với Galaxy S24.</p>
                    <p>*Màu sắc và kiểu máy có sẵn có thể thay đổi tùy theo quốc gia hoặc nhà mạng.</p>
                    <p>*Hình ảnh được mô phỏng. Cần đăng nhập tài khoản Samsung cho một số tính năng AI nhất định.</p>
                    <p>*Yêu cầu đăng nhập tài khoản Samsung đối với một số tính năng AI nhất định.</p>
                    <p>*Hình ảnh mô phỏng chỉ mang tính chất minh họa. UX/UI thực tế có thể khác.</p>
                    <p>*S Pen Fold Edition được bán riêng và chỉ tương thích với Z Fold5, Z Fold4 và Z Fold3. Flex mode
                        được hỗ trợ trong phạm vi góc từ 75˚ đến 115˚.</p>

                    <p>*Hình ảnh mô phỏng. Màu sắc và model máy có thể thay đổi tùy theo quốc gia hoặc nhà cung cấp dịch
                        vụ.</p>

                    <p>*Galaxy Tab S9, Tab S9+, Tab S9 Ultra được xếp hạng IP68. Dựa trên điều kiện thử nghiệm là ngâm
                        trong nước sâu tới 1,5 mét trong tối đa 30 phút. Không khuyến cáo sử dụng khi tắm biển hoặc bể
                        bơi.</p>

                    <p>*Hình ảnh mô phỏng chỉ mang tính chất minh họa. Trải nghiệm người dùng/Giao diện người dùng thực
                        tế có thể khác nhau. Buds Controller tương thích với Samsung Galaxy Buds+, Samsung Galaxy Watch4
                        và các sản phẩm tương ứng sau đây. Tính năng chống ồn chủ động ANC được hỗ trợ trong Galaxy Buds
                        Live và các sản phẩm được phát hành sau đó. Samsung Galaxy S23 Ultra, Samsung Galaxy Watch5,
                        Samsung Galaxy Buds2 Pro được bán riêng. Tính khả dụng của màu sắc, kích thước, sản phẩm và dây
                        đeo đồng hồ có thể thay đổi theo quốc gia hoặc nhà mạng. Wreckfest ⓒ2022 THQ Nordic AB, Sweden.
                        Wreckfest là thương hiệu đã đăng ký của THQ Nordic AB, Sweden. Bảo lưu mọi quyền. Tất cả các
                        thương hiệu, logo và bản quyền khác là tài sản của chủ sở hữu tương ứng. Có sẵn để mua tại
                        Samsung Galaxy Store và các cửa hàng ứng dụng khác ở một số quốc gia. Nội dung trò chơi không
                        phù hợp với trẻ em dưới 3 tuổi.</p>

                    <p>*Hình ảnh mô phỏng. S Pen Fold Edition được bán riêng và chỉ tương thích với Galaxy Z Fold4 và
                        Galaxy Z Fold3.</p>

                    <p>*Hình ảnh màn hình đồng hồ được mô phỏng cho mục đích minh họa. Màu sắc, kích thước, kiểu máy và
                        dây đeo đồng hồ có thể thay đổi tùy theo quốc gia hoặc nhà mạng.</p>

                    <p>*Hình ảnh được mô phỏng. Các màu hiện có của Galaxy Buds2 Pro có thể thay đổi tùy theo quốc gia
                        hoặc nhà mạng.</p>

                    <p>*Chế độ Flex Mode được hỗ trợ ở các góc từ 75º đến 115º. Google Duo và YouTube là các nhãn hiệu
                        của Google LLC. Một số ứng dụng có thể không hỗ trợ đa nhiệm. UX / UI có thể thay đổi. Hình ảnh
                        mô phỏng.</p>

                    <p>*Hình ảnh được mô phỏng cho mục đích minh họa. </p>

                    <p>*Màu và model máy có thể thay đổi tùy theo quốc gia hoặc nhà cung cấp dịch vụ.</p>

                    <p>*Galaxy A53 5G được đánh giá chuẩn IP67. Kết quả dựa trên các điều kiện thử nghiệm ngâm nước ngọt
                        với độ sâu lên đến 1m trong thời gian tối đa là 30 phút. Chỉ an toàn với nước có áp suất thấp.
                    </p>

                    <p>*Tính năng Galaxy S22+</p>

                    <p>*Hình ảnh mang tính mô phỏng. Màu sắc của sản phẩm tùy thuộc vào quốc gia và nhà cung cấp.</p>

                    <p>*S Pen Fold Edition được bán riêng và chỉ tương thích với Galaxy Z Fold3 5G.</p>

                    <p>*Hình ảnh hai điện thoại Galaxy Z Fold3 5G và S Pen Fold Edition được mô phỏng cho mục đích minh
                        họa.</p>

                    <p>*Video về điện thoại Galaxy S21+ 5G màu Tím Đam Mê và Galaxy S21 5G màu Phantom Pink được mô
                        phỏng nhằm mục đích minh họa.</p>

                    <p>*Hình ảnh chỉ mang tính chất minh họa. Hình ảnh thực tế có thể khác nhau.</p>

                    <p>*Hình ảnh mười một chiếc điện thoại Galaxy S20 FE đứng thẳng trong một vòng tròn được mô phỏng
                        cho mục đích minh họa. </p>

                    <p>*Hình ảnh được mô phỏng. Màu sắc có thể thay đổi tùy thuộc vào quốc gia hoặc nhà cung cấp. Galaxy
                        A52 and Galaxy A72 được xếp hạng IP67. Dựa trên các điều kiện thử nghiệm ngâm trong nước ở độ
                        sâu lên đến 1 mét trong tối đa 30 phút. Không nên sử dụng ở bãi biển, bể bơi và trong nước xà
                        phòng. Trong trường hợp làm đổ chất lỏng có đường vào điện thoại, vui lòng xả thiết bị bằng nước
                        sạch, tránh tình trạng đọng nước khi ấn vào các phím. Chỉ an toàn đối với áp lực nước thấp. Áp
                        lực nước cao như dòng nước chảy hoặc vòi hoa sen có thể làm hỏng thiết bị.</p>

                    <p>*Hình ảnh Tủ Lạnh BESPOKE 4 Cửa, BESPOKE 1 Cửa và BESPOKE 2 Cửa Ngăn Đông Dưới được mô phỏng cho
                        mục đích minh họa.</p>

                    <p>*Tặng kèm bao da kèm bàn phím trị giá 7 Triệu đồng khi mua Galaxy Tab S8 Ultra.</p>

                    <p>*Không áp dụng cùng các chương trình quà tặng khác.</p>

                    <p>*Hình ảnh sản phẩm Bespoke mang tính mô phỏng. Màu sắc và model máy có thể thay đổi tùy
                        thuộc vào quốc gia và nhà cung cấp.</p>

                </div>
            </div>
        </div>
    </footer>

    <section class="footer__link">
        <div class="container">
            <div class="content">
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">
                            Sản Phẩm & Dịch Vụ
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Điện Thoại Thông Minh</a></li>
                            <li><a href="#">Máy Tính Bảng</a></li>
                            <li><a href="#">Thiết Bị Âm Thanh</a></li>
                            <li><a href="#">Thiết Bị Đeo</a></li>
                            <li><a href="#">Smart Switch</a></li>
                            <li><a href="#">Phụ Kiện</a></li>
                            <li><a href="#">TVs</a></li>
                            <li><a href="#">Lifestyle TVs</a></li>
                            <li><a href="#">Thiết Bị Nghe Nhìn</a></li>
                            <li><a href="#">Tủ Lạnh</a></li>
                            <li><a href="#">Máy Giặt & Máy Sấy</a></li>
                            <li><a href="#">Giải Pháp Không Khí</a></li>
                            <li><a href="#">Gia Dụng Nhà Bếp</a></li>
                            <li><a href="#">Màn Hình</a></li>
                        </div>
                    </ul>
                </div>

                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Mua Trực Tuyến
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Ưu Đãi Độc Quyền</a></li>
                            <li><a href="#">Cửa hàng trực tuyến doanh nghiệp</a></li>
                            <li><a href="#">Samsung 68</a></li>
                            <li><a href="#">Cửa Hàng Trải Nghiệm Samsung</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                            <li><a href="#">Tìm Cửa Hàng</a></li>
                            <li><a href="#">Điểm tư vấn và nhận hàng trực tiếp</a></li>
                            <li><a href="#">Samsung Care+</a></li>
                            <li><a href="#">Samsung Rewards</a></li>
                            <li><a href="#">Khám Phá</a></li>
                            <li><a href="#">Điều Khoản & Điều Kiện</a></li>
                            <li><a href="#">Samsung Club Affiliates</a></li>
                            <li><a href="#">Giáo dục</a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Chương trình đặc quyền
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Ưu đãi sinh viên</a></li>
                            <li><a href="#">Ưu đãi Nhân viên đối tác (EPP)</a></li>
                            <li><a href="#">Ưu đãi chính phủ</a></li>
                            <li><a href="#"> VIP Mall</a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Bạn Cần Hỗ Trợ?
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Đặt hẹn lịch sửa chữa</a></li>
                            <li><a href="#" class="business">Tư Vấn Trực Tuyến
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#"class="business">Thư điện tử
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#" class="business">Điện Thoại </a></li>
                            <li><a href="#" class="business">Trung Tâm Bảo Hành </a></li>
                            <li><a href="#" class="business">Ngôn ngữ ký hiệu </a></li>
                            <li><a href="#" class="business">Gửi ý kiến phản hồi</a></li>
                            <li><a href="#" class="business"> Gửi thư cho Ban Giám đốc
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                        </div>
                    </ul>
                    <ul class="nav-footer">
                        <p class="toggle-menu">Tài khoản & Cộng đồng
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Tài Khoản Của Tôi</a></li>
                            <li><a href="#" class="business">Đơn Hàng
                                </a></li>
                            <li><a href="#"class="business">Danh Sách Yêu Thích
                                </a></li>
                            <li><a href="#" class="business">Samsung Members </a></li>
                            </a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Sự bền vững
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Môi trường</a></li>
                            <li><a href="#">Bảo mật & Quyền riêng tư</a></li>
                            <li><a href="#">Trợ năng</a></li>
                            <li><a href="#">Đa dạng · Công bằng · Hòa nhập</a></li>
                            <li><a href="#"class="business">Công dân Doanh nghiệp
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#"class="business">Tính bền vững của Doanh nghiệp
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                        </div>
                    </ul>
                    <ul class="nav-footer">
                        <p class="toggle-menu"> Giới thiệu về chúng tôi
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="#">Thông tin về Công ty</a></li>
                            <li><a href="#">Lĩnh vực kinh doanh</a></li>
                            <li><a href="#"> Nhận diện thương hiệu</a></li>
                            <li><a href="#">Nghề nghiệp</a></li>
                            <li><a href="#"class="business">Quan hệ với nhà đầu tư
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#" class="business">Newsroom
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#">Đạo đức </a></li>
                            <li><a href="#" class="business">Samsung Design
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
