@extends('layout.app')
@section('title', 'Chỉnh sửa thông tin loại sản phẩm')
@section('content')
<section class="maker-edit">
    <div class="container">
        <div class="content">
            <div class="maker-section">
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
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            // Lấy thông tin người dùng hiện tại từ hệ thống (trong ví dụ này, sử dụng Blade để truyền role_id vào JavaScript)
                            const roleId = @json(Auth::guard('admin')->user()->role_id); // Truyền role_id từ PHP sang JS
                    
                            // Chọn liên kết có class 'edit-id'
                            const editLink = document.querySelector(".btn-update");
                            
                            // Lắng nghe sự kiện 'click' vào liên kết
                            editLink.addEventListener("click", function (event) {
                                // Nếu người dùng là Nhân viên (role_id = 1), ngừng hành động và hiển thị thông báo
                                if (roleId === 1) {
                                    alert("Bạn không có quyền cập nhập trang này!");
                                    
                                    // Ngừng hành động mặc định của liên kết (không chuyển hướng)
                                    event.preventDefault();
                                }
                            });
                        });
                    </script>
                </form>
                
                
            </div>
        </div>
    </div>
</section>
@endsection
