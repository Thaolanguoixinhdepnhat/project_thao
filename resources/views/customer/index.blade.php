{{-- @extends('layout.app')
@section('title', 'Danh sách khách hàng')

@section('content')

    <section class="index">
        <div class="container">
            <div class="content">
                <div class="sec-two v3">
                    <h4>Danh sách khách hàng</h4>
                    <hr class="hr">
                    <form class="form-index" method="GET" action="{{ route('customer.index') }}">
                        <div class="form-group">
                            <label for="customer_id">Mã khách hàng</label>
                            <input type="text" id="customer_id" name="customer_id" value="{{ request('customer_id') }}">
                        </div>
                        <div class="form-group">
                            <label for="username">Tên khách hàng</label>
                            <input type="text" id="username" name="username" value="{{ request('username') }}">
                        </div>
                        <div class="search">
                            <button type="submit" class="btn-primery">Tìm kiếm</button>
                        </div>
                    </form>
           
                    @if (session('success'))
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
                                    <th style="width:120px">Mã khách hàng</th>
                                    <th style="width:120px">Tên tài khoản</th>
                                    <th style="width:150px">Email</th>
                                    <th style="width:120px">Địa chỉ</th>
                                    <th style="width:10px">Số điện thoại</th>
                                    <th style="width:10px"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($customers as $index => $customer)
                                    <tr>
                
                                        <td style="text-align: center;">
                                            <a href="{{ route('customer.edit', $customer->id) }}" class="edit-id">
                                                {{ str_pad($customer->id, 8, '0', STR_PAD_LEFT) }}
                                            </a>
                                        </td>
                    

                                        <td>{{ $customer->username }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td align="right">{{ $customer->phone }}</td>
                                        @if (auth('admin')->user() && auth('admin')->user()->role_id == 3)
                                        <td>
                                            <form action="{{ route('customer.destroy', $customer->id) }}"
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
                        {{ $customers->links('vendor.pagination.default') }}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection --}}
@extends('layout.app')
@section('title', 'Danh sách khách hàng')
@section('content')
<section class="index_staff">
    <div class="container">
        <div class="content">
            <div class="sec-three">
                <h4><i class="fas fa-users" style="color: #0d6efd;"></i> Danh sách khách hàng</h4>
                <hr class="hr">

                <form class="staff-form" method="GET" action="{{ route('customer.index') }}">
                    <div class="form-field">
                        <label for="customer_id"><i class="fas fa-id-card" style="color: #6c757d;"></i> Mã khách hàng</label>
                        <input type="text" id="customer_id" name="customer_id" value="{{ request('customer_id') }}">
                    </div>
                    <div class="form-field">
                        <label for="username"><i class="fas fa-user" style="color: #6c757d;"></i> Tên khách hàng</label>
                        <input type="text" id="username" name="username" value="{{ request('username') }}">
                    </div>
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery" style="background-color: #198754; color: white;">
                            <i class="fas fa-search"></i> Tìm kiếm
                        </button>
                    </div>
                </form>

                @if (session('success'))
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
                                <th><i class="fas fa-id-badge" style="color:#0d6efd;"></i> Mã khách hàng</th>
                                <th><i class="fas fa-user-circle" style="color:#20c997;"></i> Tên tài khoản</th>
                                <th><i class="fas fa-envelope" style="color:#0dcaf0;"></i> Email</th>
                                <th><i class="fas fa-map-marker-alt" style="color:#ffc107;"></i> Địa chỉ</th>
                                <th><i class="fas fa-phone-alt" style="color:#198754;"></i> Số điện thoại</th>
                                <th><i class="fas fa-tools" style="color:#dc3545;"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($customers as $index => $customer)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{ route('customer.edit', $customer->id) }}">
                                            {{ str_pad($customer->id, 8, '0', STR_PAD_LEFT) }}
                                        </a>
                                    </td>
                                    <td>{{ $customer->username }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td align="right">{{ $customer->phone }}</td>
                                    @if (auth('admin')->user() && auth('admin')->user()->role_id == 3)
                                        <td class="text-center">
                                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display: flex; justify-content: center;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="deleted" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="background-color: transparent; border: none;">
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
                                    <td colspan="6" style="text-align: center; color: red;">Không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="pagination-container">
                    {{ $customers->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
