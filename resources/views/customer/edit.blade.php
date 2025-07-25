<link rel="stylesheet" href="{{ asset('assets/style.css') }}">

@extends('layout.app')
@section('title', 'Chỉnh sửa thông tin khách hàng')
@section('content')
<section class="customer-edit">
    <div class="customer-container">
        <div class="customer-content">
            <div class="customer-section">
                             @php
    $breadcrumbs = [
        ['label' => 'Trang chủ', 'url' => route('layout.app')],
        ['label' => 'Danh sách khách hàng ', 'url' => route('customer.index')],
        ['label' => 'Chỉnh sửa thông tin khách hàng', 'url' => isset($customer) ? route('customer.update', ['id' => $customer->id]) : '#'],
    ];
@endphp
                <h4>Chỉnh sửa thông tin khách hàng</h4>

                <div class="divider"></div>
                <form action="{{ route('customer.update', $customer->id) }}" method="POST" class="customer-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group-custom">
                        <label for="id">Mã khách hàng</label>
                        <input type="text" id="id" name="id" 
                               value="{{ old('id', str_pad($customer->id, 8, '0', STR_PAD_LEFT)) }}" 
                               class="input-id" readonly>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const inputId = document.querySelector(".input-id");
                        
                            inputId.addEventListener("click", function () {
                                alert("Bạn không thể chỉnh sửa mã khách hàng!");
                            });
                        });
                        </script>

                    <div class="form-group-row">
                        <div class="form-group-custom">
                            <label for="username">Tên tài khoản</label>
                            <input type="text" id="username" name="username" class="form-group__input-username" value="{{ old('username', $customer->username) }}">
                            @error('username')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group-custom">
                            <label for="address">Địa chỉ</label>
                            <input type="text" id="address" name="address" class="form-group__input-dc" value="{{ old('address', $customer->address) }}">
                            @error('address')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group-custom">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-group__input-email " value="{{ old('email', $customer->email) }}" >
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                           
                        @enderror
                        <span id="email-error" style="color: red; display: block; margin-top: 5px; "></span>
                    </div>
                    <script>
                        document.getElementById("email").addEventListener("invalid", function(event) {
                            event.preventDefault(); // Ngăn chặn thông báo mặc định của trình duyệt
                            document.getElementById("email-error").textContent = "Email phải có ký tự '@' và đúng định dạng.";
                        });
                    </script>
                    <div class="form-group-custom">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" name="phone" 
                               value="{{ old('phone', $customer->phone) }}" class="input-phone">
                        @error('phone')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="customer-actions">
                        <button type="submit" class="btn-update">Cập nhật</button>
                    </div>
                    {{-- <script>
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
                    </script> --}}
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
