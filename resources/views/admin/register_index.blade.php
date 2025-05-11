@extends('layout.app')
@section('title', 'Quản lý thông tin nhân viên')
@section('content')
<section class="index_staff">
    <div class="container">
        <div class="content">
            <div class="sec-three">
                <h4><i class="fas fa-users-cog" style="color: #0d6efd;"></i> Quản lý thông tin nhân viên</h4>
                <hr class="hr">
                <form class="staff-form" method="GET" action="{{ route('admin.register_index') }}">
                    <div class="form-field">
                        <label for="username"><i class="fas fa-user" style="color: #6c757d;"></i> Tên đăng nhập</label>
                        <input type="text" id="username" name="username" value="{{ request('username') }}">
                    </div>
                    <div class="form-field">
                        <label for="role_id"><i class="fas fa-user-tag" style="color: #6c757d;"></i> Vai trò</label>
                        <input type="text" id="role_id" name="role_id" value="{{ request('role_id') }}">
                    </div>
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery" style="background-color: #198754; color: white;">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('staff.create') }}" style="color: white; text-decoration: none;">
                                <i class="fas fa-user-plus"></i> Đăng ký nhân viên
                            </a>
                        </button>
                    </div>
                </form>

                @if(session('success'))
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                title: "Thành công!",
                                text: "{{ session('success') }}",
                                icon: "success",
                                confirmButtonColor: "#8B3A3A", 
                                confirmButtonText: "OK"
                            });
                        });
                    </script>
                @endif

                <hr class="hr">
                <div class="table-responsive">
                    {{-- <table  border="1"> --}}
                      <table class="table table-bordered table-hover table-striped">


                        <thead>
                            <tr>
                                <th><i class="fas fa-id-badge" style="color:#0d6efd;"></i> ID</th>
                                <th><i class="fas fa-user-circle" style="color:#20c997;"></i> Tên đăng nhập</th>
                                <th><i class="fas fa-user-shield" style="color:#ffc107;"></i> Chức vụ</th>
                                <th><i class="fas fa-tools" style="color:#dc3545;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($staffs as $staff)
                                <tr>
                                    <td style="text-align: center;">
                                        <a href="{{ route('staff.edit', $staff->id) }}">
                                            {{ str_pad($staff->id, 8, '0', STR_PAD_LEFT) }}
                                        </a>
                                    </td> 
                                    <td>{{ $staff->username }}</td>
                                    <td>{{ $roles[$staff->role_id]->role_name ?? 'Không rõ' }}</td>
                                    <td>
                                        <form action="{{ route('staff.destroy', $staff->id) }}" method="POST" style="display: flex; justify-content: center;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="deleted" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="background-color: transparent; border: none;">
                                                <i class="fas fa-trash-alt" style="color: red;"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="text-align: center; color: red;">Không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="pagination-container">
                    {{ $staffs->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
