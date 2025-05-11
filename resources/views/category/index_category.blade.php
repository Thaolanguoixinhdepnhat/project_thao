{{-- @extends('layout.app')
@section('title', 'Danh sách  loại sản phẩm')
@section('content')

<section class="index_category">
    <div class="container">
        <div class="content">
            <div class="sec-four">
                <h4>Danh sách loại sản phẩm</h4>
                <hr class="hr">
                <form class="category-form" method="GET" action="{{ route('category.index') }}">
                    <div class="form-field">
                        <label for="id">Mã loại sản phẩm</label>
                        <input type="text" id="id" name="id" value="{{ request('id') }}">
                    </div>

                    <div class="form-field">
                        <label for="category_name">Tên loại sản phẩm</label>
                        <input type="text" id="category_name" name="category_name" value="{{ request('category_name') }}">
                    </div>
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery">Tìm kiếm</button>
                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('category.create') }}"  class="register-maker-link" style="color: white; text-decoration: none;">
                                Đăng ký loại sản phẩm
                            </a>
                        </button>
                        
                    

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
                                            alert("Bạn không có quyền truy cập chức năng đăng ký loại sản phẩm!");
                                            event.preventDefault();
                                        }
                                    });
                                }
                            });
                        </script>
                    @endif
                    

                      
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
                                <th style="width:150px">Mã loại</th>
                                <th style="width:150px" >Tên loại</th>
                                <th style="width:10px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categorys as $index => $category)  
                            <tr>
                                <td style="text-align: center;">
                                   <a href="{{ route('category.edit', $category->id) }}"class="edit-id">
                                         {{ str_pad($category->id, 8, '0', STR_PAD_LEFT) }}
                                    </a>
                                </td>      
                                <td>{{ $category->category_name }}</td>
                            @if (auth('admin')->user() && auth('admin')->user()->role_id == 3)
                            <td>
                                <form action="{{ route('category.destroy', $category->id) }}"
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
                    {{ $categorys->links('vendor.pagination.default') }}
                </div>
                
                
            </div>
        </div>
    </div>
</section>
@endsection
     --}}





@extends('layout.app')
@section('title', 'Danh sách loại sản phẩm')
@section('content')

<section class="index_category">
    <div class="container">
        <div class="content">
            <div class="sec-four">
                <h4><i class="fas fa-list-alt" style="color: #0d6efd;"></i> Danh sách loại sản phẩm</h4>
                <hr class="hr">

                <form class="category-form" method="GET" action="{{ route('category.index') }}">
                    <div class="form-field">
                        <label for="id"><i class="fas fa-id-badge" style="color: #6c757d;"></i> Mã loại sản phẩm</label>
                        <input type="text" id="id" name="id" value="{{ request('id') }}">
                    </div>

                    <div class="form-field">
                        <label for="category_name"><i class="fas fa-tag" style="color: #6c757d;"></i> Tên loại sản phẩm</label>
                        <input type="text" id="category_name" name="category_name" value="{{ request('category_name') }}">
                    </div>

                    <div class="form-buttons">
                        <button type="submit" class="btn-primery" style="background-color: #198754; color: white;">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>

                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('category.create') }}" class="register-maker-link" style="color: white; text-decoration: none;">
                                <i class="fas fa-plus-circle"></i> Đăng ký loại sản phẩm
                            </a>
                        </button>
                    </div>
                </form>

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
                                    if (roleId === 1) {
                                        alert("Bạn không có quyền truy cập chức năng đăng ký loại sản phẩm!");
                                        event.preventDefault();
                                    }
                                });
                            }
                        });
                    </script>
                @endif

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
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="width: 150px;"><i class="fas fa-id-card" style="color:#0d6efd;"></i> Mã loại</th>
                                <th><i class="fas fa-tag" style="color: #ffc107;"></i> Tên loại</th>
                                <th><i class="fas fa-tools" style="color: #dc3545;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categorys as $category)
                            <tr>
                                <td style="text-align: center;">
                                    <a href="{{ route('category.edit', $category->id) }}">
                                        {{ str_pad($category->id, 8, '0', STR_PAD_LEFT) }}
                                    </a>
                                </td>
                                <td>{{ $category->category_name }}</td>
                                @if (auth('admin')->user() && auth('admin')->user()->role_id == 3)
                                <td>
                                    <form action="{{ route('category.destroy', $category->id) }}"
                                          method="POST"
                                          style="display: flex; justify-content: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="deleted"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                                style="background-color: transparent; border: none;">
                                            <i class="fas fa-trash-alt" style="color: red;"></i>
                                        </button>
                                    </form>
                                </td>
                                @else
                                <td></td>
                                @endif
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" style="text-align: center; color: red;">Không có dữ liệu</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="pagination-container">
                    {{ $categorys->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
