@extends('layout.app')
@section('title', 'Danh sách  trạng thái')
@section('content')

<section class="index_category">
    <div class="container">
        <div class="content">
            <div class="sec-four">
                <h4>Danh sách trạng thái</h4>
                <hr class="hr">
                <form class="category-form" method="GET" action="{{ route('status.index') }}">
                    <div class="form-field">
                        <label for="id">Mã loại trạng thái</label>
                        <input type="text" id="id" name="id" value="{{ request('id') }}">
                    </div>

                    <div class="form-field">
                        <label for="status_name">Tên loại trạng thái</label>
                        <input type="text" id="status_name" name="status_name" value="{{ request('status_name') }}">
                    </div>
                    <div class="form-buttons">
                        <button type="submit" class="btn-primery">Tìm kiếm</button>
                        <button type="button" class="btn btn-danger">
                            <a href="{{ route('category.create') }}" style="color: white; text-decoration: none;">
                                Đăng ký trạng thái
                            </a>
                        </button>
                        
                        </button>
                    </div>
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
                                <th style="width:150px">Mã trạng thái</th>
                                <th style="width:150px" >Tên trạng thái</th>
                                <th style="width:10px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($status as $index => $status)  
                            <tr>
                                <td style="text-align: center;">
                                   <a href="{{ route('status.edit', $status->id) }}">
                                         {{ str_pad($status->id, 8, '0', STR_PAD_LEFT) }}
                                    </a>
                                </td>                                
                                <td>{{ $status->status_name }}</td>
                                <td>
                                    <form action="{{ route('status.destroy', $status->id) }}" method="POST" style="display: flex; justify-content: center;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="deleted" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
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
                    {{ $status->links('vendor.pagination.default') }}
                </div>
                
                
            </div>
        </div>
    </div>
</section>
@endsection
    