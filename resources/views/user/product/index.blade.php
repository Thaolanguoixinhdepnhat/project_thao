@extends('layout.master')

@section('title', 'Danh sách sản phẩm')

@section('content')

@php
    $breadcrumbs = [
        ['label' => 'Trang chủ', 'url' => route('home')],
        ['label' => 'Sản phẩm', 'url' => route('user.products.index')],
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
<section class="sec-option">
    <div class="container">
        <div class="content">
            <h2>Bộ lọc</h2>
            <div class="content-option">
                <form method="GET" action="{{ route('user.products.index') }}" id="productFilterForm" class="content-option">
                    <div class="item">
                        <label for="">Danh mục:</label>
                        <select name="category_id">
                            <option value="">Tất cả</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ request('category_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item">
                        <label for="">Sắp xếp:</label>
                        <select name="sort">
                            <option value="">Tất cả</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Giá tăng dần</option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Giá giảm dần</option>
                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Từ A -> Z</option>
                            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Từ Z -> A</option>
                        </select>
                    </div>
                  
                </form>
                
            </div>
        </div>
    </div>
</section>

<section class="sec-tv sec-two product">
    <div class="container">
        <div class="content">
            <div class="content-head">
                <div class="text_block">
                    <div class="content-body">
                        @foreach ($products as $index => $item)
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
</section>

{{-- phân trang  --}}
<div class="pagination">
    {{ $products->links() }}
</div>

{{-- size-color  --}}
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
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#productFilterForm');
        const selects = form.querySelectorAll('select');

        selects.forEach(select => {
            select.addEventListener('change', () => {
                form.submit();
            });
        });
    });
</script>


@endsection
