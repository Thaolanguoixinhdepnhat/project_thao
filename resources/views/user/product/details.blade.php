@extends('layout.master')

@section('title', 'Danh sách sản phẩm')

@section('content')

@php
    $breadcrumbs = [
        ['label' => 'Trang chủ', 'url' => route('home')],
        ['label' => 'Sản phẩm', 'url' => route('user.products.index')],
        
        ['label' => 'Chi tiết sản phẩm'],
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

    .stars {
    display: inline-block;
}
.star {
    font-size: 3rem;
    color: #ccc;
}
.star.active {
    color: gold; 
}

</style>



<section class="sec-detail">
    <div class="container">
        <h2 class="title">Chi tiết sản phẩm</h2>
        <div class="content">
            <div class="content-left">
                <div class="left">
                    @foreach ($products as $item)
                        @foreach ($item->productImages as $productImage)
                            <div class="productImage" data-index="{{ $loop->parent->index * count($item->productImages) + $loop->index }}">
                                <img src="{{ asset('storage/' . $productImage->product_image) }}" alt="{{ $item->product_name }}">
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="right productImage-slider">
                    @foreach ($products as $item)
                        @foreach ($item->productImages as $productImage)
                            <div class="item-slider">
                                <img src="{{ asset('storage/' . $productImage->product_image) }}" alt="{{ $item->product_name }}">
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="content-right">
                <form action="{{ route('cart.add') }}" method="POST">
                    @foreach ($products as $index => $item)
                        <div class="name">
                            <span class="detail_product">Tên sản phẩm:</span>
                            <span>{{$item->product_name}}</span>
                        </div>
                        <div class="name">
                            <span class="detail_product">Thương hiệu:</span>
                            <span>{{$item->maker->maker_name}}</span>
                        </div>
                        <div class="name">
                            <span class="detail_product">Phân loại:</span>
                            <span>{{$item->category->category_name}}</span>
                        </div>

                        <div class="color">
                            <label for="color_{{ $index }}">Màu sắc:</label>
                            <div class="list-color">
                                @foreach ($item->productClasses as $productClasses)
                                    <label for="color_{{ $index }}_{{ $loop->index }}">
                                        <input type="radio" id="color_{{ $index }}_{{ $loop->index }}" name="color_{{ $index }}" value="{{ $productClasses->color_code }}" style="display:none;">
                                        <span class="color-circle" style="
                                            display: inline-block;
                                            width: 20px;
                                            height: 20px;
                                            border-radius: 50%;
                                            background-color: {{ $productClasses->color_code }};
                                            cursor: pointer;">
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    
                        <div class="size">
                            <label for="size_{{ $index }}">Ram:</label>
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
                            <span class="detail_product">Giá:</span>
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

                            <!-- Bootstrap CSS -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                    <!-- Font Awesome -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

                    <div class="d-flex gap-3 justify-content-start p-3">
                    <a href="https://www.facebook.com/?locale=vi_VN" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/i/flow/login" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://mail.google.com/mail/u/0/#inbox" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://www.pinterest.com/" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>

                    <!-- Bootstrap JS + Popper (for tooltips) -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                    <!-- Init tooltip -->
                    <script>
                    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el))
                    </script>




                        
                    @endforeach
                </form>
            </div>
        </div>

        <div class="des">
            <h3>Mô tả sản phẩm</h3>

            @foreach ($products as $item)
                <p>{{$item->description}}</p>
            @endforeach
        </div>

        <div class="comment">
            <h3>Đánh giá sản phẩm</h3>
            <div class="list">

                @foreach ($products as $item)
                    @foreach ($item->comment as $comments)
                        <div class="item">
                            <div class="group">
                                <div class="left">
                                 <p>{{ auth()->user()->name }}</p>


                                    <div class="name">Khách hàng: {{ $comments->customer->username }}</div>
                                    <div class="name">Sản phẩm: {{ $item->product_name }}</div>
                                </div>

                                <div class="right">
                                    <div class="stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <span class="star {{ $i <= $comments->rating ? 'active' : '' }}">&#9733;</span>
                                        @endfor
                                    </div>
                                    <div class="date">{{ $comments->create_at }}</div>
                                </div>
                            </div>
                            <div class="txt">
                                <p>{{ $comments->note }}</p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>
</section>






<script>
   $(document).ready(function() {
    // Khởi tạo slider
        var $slider = $('.productImage-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
        });

        var $thumbnails = $('.left .productImage');

        // Khi slider đổi ảnh
        $slider.on('afterChange', function(event, slick, currentSlide){
            $thumbnails.removeClass('active'); // Xóa active cũ
            $thumbnails.each(function(){
                if ($(this).data('index') == currentSlide) {
                    $(this).addClass('active'); // Thêm active mới
                }
            });
        });

        // Khi click vào ảnh nhỏ
        $thumbnails.on('click', function() {
            var index = $(this).data('index');
            $slider.slick('slickGoTo', index); // Nhảy tới đúng slide
        });

        // Ban đầu set active cho ảnh đầu tiên
        $thumbnails.first().addClass('active');
    });

</script>

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
@endsection
