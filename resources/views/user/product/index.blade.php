@extends('layout.master')

@section('title', 'Danh sách sản phẩm')

@section('content')


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
                                    <span>{{$class->size}}</span>
                                @endforeach
                            </div>
                            <div class="product-options">
                                @foreach ($item->productClasses as $index => $class)
                                    <span>{{$class->color}}</span>
                                @endforeach
                            </div>
                            <div class="my-recommended-product__card--color" style="height: 30px;"></div>
                
                            <div class="product-price">
                                <span class="current-price" id="current-price-{{ $item->id }}">
                                    {{ number_format($item->productClasses[0]->price, 0, ',', '.') }} VNĐ
                                </span>
                            </div>
                
{{-- 
                            <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                <input type="hidden" name="product_class_id" value="{{ $item->productClasses[0]->id }}" class="product-class-id">
                                <input type="hidden" name="product_images_id" value="{{  $item->productImages->first()->id }}">
                                <button type="submit" class="card-cta">Mua ngay</button>
                            </form> --}}


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


@endsection
