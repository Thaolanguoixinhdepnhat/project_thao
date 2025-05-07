@extends('layout.app')
@section('title', 'Danh sách nhà sản xuất')
@section('content')

<section class="index_maker">
    <div class="container">
        <div class="content">
            <div class="sec-three">
                <h4>Danh sách nhà sản xuất</h4>
                <hr class="hr">
                <form class="maker-form" method="GET" action="{{ route('maker.index') }}">
                    <div class="form-field">
                        <label for="maker_id">Mã nhà sản xuất</label>
                        <input type="text" id="maker_id" name="maker_id" value="{{ request('maker_id') }}">
                    </div>

                    <div class="form-field">
                        <label for="maker_name">Tên nhà sản xuất</label>
                        <input type="text" id="maker_name" name="maker_name" value="{{ request('maker_name') }}">
                    </div>
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery">Tìm kiếm</button>
                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('maker.create') }}" class="register-maker-link" style="color: white; text-decoration: none;">
                                Đăng ký nhà sản xuất
                            </a>
                        </button>
                    </div>
                    
                    @if (auth('admin')->check())
                    @php
                        $adminRoleId = auth('admin')->user()->role_id;
                    @endphp
                
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const roleId = @json($adminRoleId);
                
                            const registerLink = document.querySelector(".register-maker-link");
                
                            if (registerLink) {
                                registerLink.addEventListener("click", function (event) {
                                    if (roleId === 1) { // 1 = Nhân viên
                                        alert("Bạn không có quyền truy cập chức năng đăng ký nhà sản xuất !");
                                        event.preventDefault();
                                    }
                                });
                            }
                        });
                    </script>
                @endif
                
                    
                </form>
                            {{-- thông báo @if(session('success'))
                            <p>{{ session('success') }}</p>
                        @endif --}} 
                {{-- thông báo --}}
                @if(session('success'))
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                title: "Thành công!",
                                text: "{{ session('success') }}",
                                icon: "success",
                                confirmButtonColor: "#8B3A3A", 
                                confirmButtonText: "OK",
                                customClass: {
                                    popup: 'custom-popup'
                                }
                            });
                        });
                    </script>
                @endif
                
                <hr class="hr">
                <div class="table-responsive">
                    <table border="1">
                        <thead>
                            <tr>
                                <th style="width:150px">Mã nhà sản xuất</th>
                                <th style="width:150px" >Tên nhà sản xuất</th>
                                <th style="width:150px" >Số điện thoại</th>
                                <th style="width:200px">Email</th>
                                <th style="width:150px">Ghi chú</th>
                                <th style="width:10px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($makers as $index => $maker)  
                            <tr>
                                <td style="text-align: center;">
                                   <a href="{{ route('maker.edit', $maker->id) }}" class="edit-id">
                                         {{ str_pad($maker->id, 8, '0', STR_PAD_LEFT) }}
                                    </a>
                                </td> 
                                {{-- <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        // Lấy thông tin người dùng hiện tại từ hệ thống (trong ví dụ này, sử dụng Blade để truyền role_id vào JavaScript)
                                        const roleId = @json(Auth::guard('admin')->user()->role_id); // Truyền role_id từ PHP sang JS
                                
                                        // Chọn liên kết có class 'edit-id'
                                        const editLink = document.querySelector(".edit-id");
                                        
                                        // Lắng nghe sự kiện 'click' vào liên kết
                                        editLink.addEventListener("click", function (event) {
                                            // Nếu người dùng là Nhân viên (role_id = 1), ngừng hành động và hiển thị thông báo
                                            if (roleId === 1) {
                                                alert("Bạn không có quyền vào trang này!");
                                                
                                                // Ngừng hành động mặc định của liên kết (không chuyển hướng)
                                                event.preventDefault();
                                            }
                                        });
                                    });
                                </script>                                --}}
                                <td>{{ $maker->maker_name }}</td>
                                <td align="right">{{ $maker->tel }}</td>
                                <td align="left"> {{ $maker->email }}</td>
                                <td>{{ $maker->note }}</td>
                                {{-- <td>
                                    <form action="{{ route('maker.destroy', $maker->id) }}" method="POST" style="display: flex; justify-content: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="deleted" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td> --}}
                                @if (auth('admin')->user() && auth('admin')->user()->role_id == 3)
                                <td>
                                    <form action="{{ route('maker.destroy', $maker->id) }}"
                                        method="POST" style="display: flex; justify-content: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="deleted"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
                            @else
                                <td></td>
                            @endif

                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" style="text-align: center; color: red;">Không có dữ liệu</td>
                            </tr>
                            @endforelse
                        </tbody>
                        
                    </table>
                </div>
                
                <div class="pagination-container">
                    {{ $makers->links('vendor.pagination.default') }}
                </div>
                
                
            </div>
        </div>
    </div>
</section>
@endsection
    