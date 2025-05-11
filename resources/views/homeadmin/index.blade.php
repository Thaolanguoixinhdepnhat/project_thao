@extends('layout.app')
@section('title', 'Thông tin cá nhân')
@section('content')




    <section class="maker-edit">
        <div class="container">
            <div class="content">
                <div class="maker-section">
                    <h4>Thông tin cá nhân</h4>
                    <hr class="hr">
                    <form action="{{ route('homeadmin.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username" class="form-group__label">Họ và tên</label>
                            <input type="text" id="username" name="username" 
                               value="{{ old('username', $staff->username) }}"
                               >
                            @error('username')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                   
                        <div class="form-group__row">
                            <div class="form-group">
                                <label for="role_id" class="form-group__label">Chức vụ</label>
                                <input type="text" id="role_id" name="role_id" 
                                value="{{ $roles->find($staff->role_id)->role_name ?? 'Không rõ' }}" 
                                       class="form-group__input" readonly>
                            </div>
                            
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    const inputId = document.querySelector(".form-group__input");
                                
                                    inputId.addEventListener("click", function () {
                                        alert("Bạn không thể chỉnh sửa chức vụ!");
                                    });
                                });
                                </script>
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


