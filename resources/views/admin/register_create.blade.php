@extends('layout.app')
@section('title', 'Đăng ký nhân viên')
@section('content')
    <section class="maker-edit">
        <div class="container">
            <div class="content">
                <div class="maker-section">
                    <h4>Đăng ký nhân viên</h4>
                    <hr class="hr">
                    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group__row">
                            {{-- Tên đăng nhập --}}
                            <div class="form-group">
                                <label for="username" class="form-group__label">Tên đăng nhập</label>
                                <input type="text" id="username" name="username"
                                    class="form-group__input form-group__input--username"
                                    value="{{ old('username') }}">
                                @error('username')
                                    <div class="error-message_one">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Mật khẩu --}}
                            <div class="form-group">
                                <label for="password" class="form-group__label">Mật khẩu</label>
                                <input type="password" id="password" name="password"
                                    class="form-group__input form-group__input--password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <div class="error-message_one">{{ $message }}</div>
                                @enderror
                            </div>

                          
                            <div class="form-group">
                                <label for="role_id" class="form-group__label">Chức vụ</label>
                                <select id="role_id" name="role_id"
                                class="form-group__input form-group__input-staff_id"> 
                                    <option value="">Chọn chức vụ</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                            {{ $role->role_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <div class="error-message_one">{{ $message }}</div>
                                @enderror
                            </div>
                            


                        </div>

                  
                        <div class="customer-actions">
                            <button type="submit" class="btn-update">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Thông báo lỗi --}}
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
@endsection
