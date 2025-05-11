 {{-- @extends('layout.app')
@section('title', 'Chi tiết sản phẩm')
@section('content')

<section class="edit-productclass">
    <div class="container">
        <div class="content">
            <div class="sec-seven">
                <h4>Chi tiết sản phẩm</h4>
                <hr class="hr">
                <form method="GET" class="search-form" action="{{ route('productclass.search') }}">
                    <div class="form-field">
                        <label for="product_id"><i class="fas fa-barcode text-secondary"></i>Mã sản phẩm</label>
                        <select name="product_id" class="form-group__input form-group__input-maker_id1">
                            <option value="">Chọn mã sản phẩm</option>
                            @foreach($xxx as $product)
                                @if(isset($product->id) && isset($product->product_code)) 
                                    <option value="{{ $product->id }}" 
                                        {{ old('product_id', request('product_id')) == $product->id ? 'selected' : '' }}>
                                        {{ $product->product_code }}
                                    </option>
                                @else
                                    <option disabled>Lỗi dữ liệu: {{ json_encode($product) }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery" style="background-color: #198754; color: white;">
                            <i class="fas fa-search"></i>Tìm kiếm</button>
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

              
                <form method="POST" action="{{ route('productclass.update', $productClass->id) }}" class="edit-form">
                    @csrf
                    @method('PUT')

                    <div class="table-responsive">
                               <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Mã màu</th>
                                    <th>Màu sắc</th>
                                    <th>Kích cỡ</th>
                                    <th>Trị giá</th>
                                    <th>Đơn vị giá</th>
                                    <th>Số lượng</th>
                                    <th>Nhận xét</th>
                                    <th><i class="fas fa-tools" style="color:#dc3545;"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($productClasses as $product)
                                    <tr>
                                        <td>{{ $product->product_code }}</td>
                                        <td>{{ $product->color_code }}</td>
                                        <td>{{ $product->color }}</td>
                                        <td>{{ $product->size }}</td>

                                    
                                        <input type="hidden" name="product_classes[{{ $product->id }}][id]" value="{{ $product->id }}">

<td>
    <input type="text" name="product_classes[{{ $product->id }}][cost]" 
           value="{{ number_format(old("product_classes.$product->id.cost", $product->cost), 0, '.', ',') }}" 
           class="editable-input currency-format">
    @error("product_classes.{$product->id}.cost")
        <div class="error-message" style="color: red;">{{ $message }}</div>
    @enderror
</td>


<td>
    <input type="text" name="product_classes[{{ $product->id }}][price]" 
           value="{{ number_format(old("product_classes.$product->id.price", $product->price), 0, '.', ',') }}" 
           class="editable-input currency-format">
    @error("product_classes.{$product->id}.price")
        <div class="error-message" style="color: red;">{{ $message }}</div>
    @enderror
</td>


<td>
    <input type="text" name="product_classes[{{ $product->id }}][stock_quantity]" 
           value="{{ number_format(old("product_classes.$product->id.stock_quantity", $product->stock_quantity), 0, '.', ',') }}" 
           class="editable-input currency-format">
    @error("product_classes.$product->id.stock_quantity")
        <div class="error-message" style="color: red;">{{ $message }}</div>
    @enderror
</td>




<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".currency-format").forEach(function (input) {
            input.addEventListener("input", function () {
                let value = this.value.replace(/,/g, "").replace(/\D/g, ""); 
                if (value) {
                    this.value = new Intl.NumberFormat().format(value); 
                }
            });
        });
    });
    </script> 
     



                                      
                                        <td>
                                            <textarea name="product_classes[{{ $product->id }}][note]" class="editable-textarea">{{ old("product_classes.$product->id.note", $product->note) }}</textarea>
                                        </td>
                                        
                                       

                                        <td>
                                            @if(auth('admin')->user()->role_id == 3)
                                                <button type="button" class="deleted" onclick="deleteItem({{ $product->id }})"style="background-color: transparent; border: none;">  <i class="fas fa-trash-alt" style="color: red;"></i></button>
                                            @else
                                                <span></span> 
                                            @endif
                                        </td>
                                        



                                     
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" style="color: red; text-align: center;">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
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
                            const roleId = @json($adminRoleId); 
                
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
                <form id="delete-form" method="POST" style="display: none;" class="delete-form">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</section>



<script>
    function deleteItem(id) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            const form = document.getElementById('delete-form');
            form.action = '/productclass/' + id;
            form.submit();
        }
    }
</script>


@endsection   



 --}}





 @extends('layout.app')
@section('title', 'Chi tiết sản phẩm')
@section('content')

<section class="edit-productclass">
    <div class="container">
        <div class="content">
            <div class="sec-seven">
                <h4>Chi tiết sản phẩm</h4>
                <hr class="hr">
                <form method="GET" class="search-form" action="{{ route('productclass.search') }}">
                    <div class="form-field">
                        <label for="product_id"><i class="fas fa-barcode text-secondary"></i>Mã sản phẩm</label>
                        <select name="product_id" class="form-group__input form-group__input-maker_id1">
                            <option value="">Chọn mã sản phẩm</option>
                            @foreach($xxx as $product)
                                @if(isset($product->id) && isset($product->product_code)) 
                                    <option value="{{ $product->id }}" 
                                        {{ old('product_id', request('product_id')) == $product->id ? 'selected' : '' }}>
                                        {{ $product->product_code }}
                                    </option>
                                @else
                                    <option disabled>Lỗi dữ liệu: {{ json_encode($product) }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery" style="background-color: #198754; color: white;">
                            <i class="fas fa-search"></i>Tìm kiếm</button>
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

                <form method="POST" action="{{ route('productclass.update', $productClass->id) }}" class="edit-form">
                    @csrf
                    @method('PUT')

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Mã màu</th>
                                    <th>Màu sắc</th>
                                    <th>Kích cỡ</th>
                                    <th>Trị giá</th>
                                    <th>Đơn vị giá</th>
                                    <th>Số lượng</th>
                                    <th>Nhận xét</th>
                                    <th><i class="fas fa-tools" style="color:#dc3545;"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($productClasses as $product)
                                    <tr>
                                        <td>{{ $product->product_code }}</td>
                                        <td>{{ $product->color_code }}</td>
                                        <td>{{ $product->color }}</td>
                                        <td>{{ $product->size }}</td>

                                        <input type="hidden" name="product_classes[{{ $product->id }}][id]" value="{{ $product->id }}">

                                        <td>
                                            <input type="text" name="product_classes[{{ $product->id }}][cost]" 
                                                   value="{{ number_format(old("product_classes.$product->id.cost", $product->cost), 0, '.', ',') }}" 
                                                   class="editable-input currency-format">
                                            @error("product_classes.{$product->id}.cost")
                                                <div class="error-message" style="color: red;">{{ $message }}</div>
                                            @enderror
                                        </td>

                                        <td>
                                            <input type="text" name="product_classes[{{ $product->id }}][price]" 
                                                   value="{{ number_format(old("product_classes.$product->id.price", $product->price), 0, '.', ',') }}" 
                                                   class="editable-input currency-format">
                                            @error("product_classes.{$product->id}.price")
                                                <div class="error-message" style="color: red;">{{ $message }}</div>
                                            @enderror
                                        </td>

                                        <td>
                                            <input type="text" name="product_classes[{{ $product->id }}][stock_quantity]" 
                                                   value="{{ number_format(old("product_classes.$product->id.stock_quantity", $product->stock_quantity), 0, '.', ',') }}" 
                                                   class="editable-input currency-format">
                                            @error("product_classes.$product->id.stock_quantity")
                                                <div class="error-message" style="color: red;">{{ $message }}</div>
                                            @enderror
                                        </td>

                                        <td>
                                            <textarea name="product_classes[{{ $product->id }}][note]" class="editable-textarea">{{ old("product_classes.$product->id.note", $product->note) }}</textarea>
                                        </td>

                                        <td>
                                            @if(auth('admin')->user()->role_id == 3)
                                                <button type="button" class="deleted" onclick="deleteItem({{ $product->id }})" style="background-color: transparent; border: none;">
                                                    <i class="fas fa-trash-alt" style="color: red;"></i>
                                                </button>
                                            @else
                                                <span></span> 
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" style="color: red; text-align: center;">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="customer-actions">
                        <button type="submit" class="btn-update">Cập nhật</button>
                    </div>
                </form>

                <form id="delete-form" method="POST" style="display: none;" class="delete-form">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</section>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    // Function to format currency
    document.querySelectorAll(".currency-format").forEach(function (input) {
        input.addEventListener("input", function () {
            let value = this.value.replace(/\./g, "").replace(/\D/g, ""); // Remove non-numeric characters and dots
            if (value) {
                // Format value with commas and then replace commas with dots
                this.value = new Intl.NumberFormat('de-DE').format(value).replace(/,/g, '.');
            }
        });
    });
});


    function deleteItem(id) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            const form = document.getElementById('delete-form');
            form.action = '/productclass/' + id;
            form.submit();
        }
    }
</script>

@endsection
