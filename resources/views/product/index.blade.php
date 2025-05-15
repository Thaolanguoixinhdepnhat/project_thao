 @extends('layout.app')
@section('title', 'Danh sách sản phẩm')
@section('content')

<section class="index_product">
    <div class="container">
        <div class="content">
            <div class="sec-six">
               <h4><i class="fas fa-box-open text-primary"></i> Danh sách sản phẩm</h4>
                <hr class="hr">
                <form class="product-form" method="GET" action="{{ route('product.index') }}">
                    <div class="form-field">
                        <label for="maker_name"><i class="fas fa-barcode text-primary" style="color: #6c757d !important;"></i>Nhà sản xuất</label>
                        <select name="maker_id" name="maker_id"  class="form-group__input form-group__input-maker_id1">
                            <option value="">Chọn nhà sản xuất</option>
                            @foreach($makers as $maker)
                                <option value="{{ $maker->id }}" {{ request('maker_id') == $maker->id ? 'selected' : '' }}>
                                    {{ $maker->maker_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="product_name"><i class="fas fa-tags text-warning" style="color: #6c757d !important;"></i> Danh mục sản phẩm</label>
                        <select name="category_id" name="category_id"  class="form-group__input form-group__input-category_id9">
                            <option value="">Chọn danh mục</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                            </div>
                        <div class="form-field">
                            <label for="product_code"><i class="fas fa-industry text-info" style="color: #6c757d !important;"></i>Mã sản phẩm</label>
                            <input type="text" id="product_code" name="product_code" value="{{ request('product_code') }}">
                        </div>
                        <div class="form-field">
                            <label for="product_name"><i class="fas fa-box-open" style="color: #6c757d;"></i>Tên sản phẩm</label>
                            <input type="text" id="product_name" name="product_name" value="{{ request('product_name') }}">
                        </div>
                
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery" style="background-color: #198754; color: white;">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                         <button type="button" class="btn btn-danger">
                            <a href="{{ route('product.create') }}" style="color: white; text-decoration: none;">
                                 <i class="fas fa-user-plus"></i> Đăng ký nhà sản xuất
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
                 <table class="table table-bordered table-hover table-striped">
                       <thead>
    <tr>
        <th><i class="fas fa-id-badge text-primary"></i> ID</th>
        <th><i class="fas fa-industry text-success"></i> Nhà sản xuất</th>
        <th><i class="fas fa-list text-info"></i> Danh mục sản phẩm</th>
        <th><i class="fas fa-barcode text-secondary"></i> Mã sản phẩm</th>
        <th><i class="fas fa-box text-warning"></i> Tên sản phẩm</th>
<th><i class="fas fa-align-left text-muted"></i> Mô tả sản phẩm</th>
        <th><i class="fas fa-sticky-note text-muted"></i> Ghi chú</th>
        <th><i class="fas fa-image text-danger"></i> Hình ảnh</th>
      <th><i class="fas fa-tools" style="color:#dc3545;"></i></th>
    </tr>
</thead>

                        <tbody>
                            @forelse($products as $product)  
                            <tr>
                             
                                <td style="text-align: center;">
                                    <a href="{{ route('product.edit', $product->id) }}">
                                        {{ str_pad($product->id, 8, '0', STR_PAD_LEFT) }}
                                    </a>
                                </td>
                        
                                <td>
                                    {{ $product->maker->maker_name ?? 'Không có dữ liệu' }}
                                </td>
                        
                         
                                <td>
                                    {{ $product->category->category_name ?? 'Không có dữ liệu' }}
                                </td>
                        
                                <td>{{ $product->productClasses->first()->product_code ?? 'Không có dữ liệu' }}</td>
                        
                                <td>{{ $product->product_name }}</td>
                        
                        <td>{{ \Illuminate\Support\Str::limit($product->description, 20, '...') }}</td>

                                <td>{{ $product->note }}</td>
                        
                           
                              
                                    <td>
                                        @if($product->product_image)
                                            <img src="{{ asset('storage/' . $product->product_image) }}" width="50" height="50" style="margin-right: 5px;">
                                        @else
                                            Không có ảnh
                                        @endif
                                    </td>
                               
                             
                                @if (auth('admin')->user() && auth('admin')->user()->role_id == 3)
                                <td>
                                    <form action="{{ route('product.destroy', $product->id) }}"
                                        method="POST" style="display: flex; justify-content: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="deleted"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')"style="background-color: transparent; border: none;">  <i class="fas fa-trash-alt" style="color: red;"></i></button>
                                          
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
                    {{ $products->links('vendor.pagination.default') }}
                </div> 
                
                
            </div>
        </div>
    </div>
</section>
@endsection 
