@extends('layout.master')

@section('title', 'Danh sách sản phẩm')

@section('content')


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
</section>

<div class="pagination">
    {{ $products->links() }}
</div>

@endsection
