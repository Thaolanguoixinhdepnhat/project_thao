@extends('layout.app')
@section('title', 'Chỉnh sửa thông tin nhân viên')
@section('content')
<section class="maker-edit">
    <div class="container">
        <div class="content">
            <div class="maker-section">
                <h4>Chỉnh sửa thông tin nhân viên</h4>
                <hr class="hr">
                <form action="{{ route('staff.update', $staff->id) }}" method="POST" class="maker-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group__row">
                        <div class="form-group">
                            <label for="id" class="form-group__label">Mã nhân viên</label>
                            <input type="text" id="id" name="id" 
                                value="{{ old('id', str_pad($staff->id, 8, '0', STR_PAD_LEFT)) }}" 
                                class="form-group__input" readonly>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const inputId = document.querySelector(".form-group__input");
                            
                                inputId.addEventListener("click", function () {
                                    alert("Bạn không thể chỉnh sửa mã nhân viên!");
                                });
                            });
                            </script>
                
                        <div class="form-group">
                            <label for="username" class="form-group__label">Tên đăng nhập</label>
                            <input type="text" id="username" name="username" 
                                value="{{ old('username', $staff->username) }}" 
                                class="form-group__input">
                            @error('username')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="role_id" class="form-group__label">Chức vụ</label>
                            <select id="role_id" name="role_id" class="form-group__input form-group__input-role_id">
                                <option value="" disabled selected>Vui lòng chọn</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ old('role_id', $staff->role_id) == $role->id ? 'selected' : '' }}>
                                        {{ $role->role_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="customer-actions">
                        <button type="submit" class="btn-update">Cập nhật</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection
