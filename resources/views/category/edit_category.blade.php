@extends('layout.app')
@section('title', 'Chỉnh sửa thông tin loại sản phẩm')
@section('content')
<section class="maker-edit">
    <div class="container">
        <div class="content">
            <div class="maker-section">
                                      @php
    $breadcrumbs = [
        ['label' => 'Trang chủ', 'url' => route('layout.app')],
          ['label' => 'Danh sách loại sản phẩm ', 'url' => route('category.index')],
        ['label' => 'Chỉnh sửa thông tin loại sản phẩm', 'url' => isset($category) ? route('category.update', ['id' => $category->id]) : '#'],
    ];
@endphp
                <h4>Chỉnh sửa thông tin loại sản phẩm</h4>
                <hr class="hr">
                <form action="{{ route('category.update', $category->id) }}" method="POST" class="maker-form">
                    @csrf
                    @method('PUT')
                      <div class="form-group__row">
                    <div class="form-group">
                        <label for="id" class="form-group__label">Mã loại sản phẩm</label>
                        <input type="text" id="category_id" name="category_id" 
                               value="{{ old('category_id', str_pad($category->id, 8, '0', STR_PAD_LEFT)) }}" 
                               class="form-group__input" readonly>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const inputId = document.querySelector(".form-group__input");
                        
                            inputId.addEventListener("click", function () {
                                alert("Bạn không thể chỉnh sửa mã khách hàng!");
                            });
                        });
                        </script>
                        <div class="form-group">
                            <label for="category_name" class="form-group__label">Tên loại sản phẩm</label>
                            <input type="text" id="category_name" name="category_name" value="{{ old('category_name', $category->category_name) }}" class="form-group__input">
                            @error('category_name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>          
                    </div>                    
                    <div class="customer-actions">
                        <button type="submit" class="btn-update">Cập nhật</button>
                    </div>
                    @if (auth('admin')->check())
                    @php
                        $adminRoleId = auth('admin')->user()->role_id;
                    @endphp
                
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const roleId = @json($adminRoleId); // truyền từ Blade sang JS
                
                            const editLink = document.querySelector(".btn-update");
                
                            if (editLink) {
                                editLink.addEventListener("click", function (event) {
                                    if (roleId === 1) {
                                        alert("Bạn không có quyền cập nhật trang này!");
                                        event.preventDefault();
                                    }
                                });
                            }
                        });
                    </script>
                @endif
                
                </form>
                
                
            </div>
        </div>
    </div>
</section>
@endsection
