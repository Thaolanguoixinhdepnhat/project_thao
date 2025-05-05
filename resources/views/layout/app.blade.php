<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang Chủ')</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/js/app.js'])

</head>
@use('Illuminate\Support\Facades\Auth')

<body>
    <header class="header">
        <div class="container">
            <div class="content">
                <div class="sec">
                <div class="header_title">
                    <span>Quản trị</span>
                </div>
                <div class="btn">
                    <form method="POST" action="{{ route('admin.logout') }}">
                    <span>Chào bạn, {{ 	Auth::guard('admin')->user()->username}}</span>
                    @csrf   
                    <button type="submit" class="btn-red">Đăng xuất</button>
                </form>


                </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="sec-head">
            <div class="container">
                <div class="content">
                    <div class="sidebar">
                    <div class="left">
                        {{-- <ul class="custom_list">
                            <li class="custom_item">Trang chủ</li>

                            @if(Auth::guard('admin')->user()->role_id == 3)
                                <li class="custom_item">
                                    <a href="{{ route('admin.register_index') }}">
                                    Quản trị thành viên</a></li>
                            @endif
                           
                            <li class="custom_item">
                                <a href="{{ route('customer.index') }}">Thông tin khách hàng</a>
                            </li>
                            <li class="custom_item">
                                <a href="{{ route('maker.index') }}">Thông tin nhà sản xuất</a>
                            </li>
                            <li class="custom_item">
                                <a href="{{ route('category.index') }}">Loại sản phẩm</a>
                            </li>
                            <li class="custom_item">
                                <a href="{{ route('product.index') }}">Sản phẩm</a>
                            </li> 
                                               
                            <li class="custom_item">
                                <a href="{{ route('admin.change_password') }}">Đổi mật khẩu</a>
                            </li>
                            <li class="custom_item">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            
                        </ul> --}}

                        <ul class="custom_list">
                            <li class="custom_item">Trang chủ</li>
                        
                            @php $roleId = Auth::guard('admin')->user()->role_id; @endphp
                        
                            @if($roleId == 3)
                                <li class="custom_item">
                                    <a href="{{ route('admin.register_index') }}">Quản trị thành viên</a>
                                </li>
                            @endif
                        
                            {{-- @if(in_array($roleId, [2, 3])) --}}
                                <li class="custom_item">
                                    <a href="{{ route('admin.order.index') }}">Đơn hàng</a>
                                </li> 

                                <li class="custom_item">
                                    <a href="{{ route('customer.index') }}">Thông tin khách hàng</a>
                                </li>
                                <li class="custom_item">
                                    <a href="{{ route('maker.index') }}">Thông tin nhà sản xuất</a>
                                </li>
                                <li class="custom_item">
                                    <a href="{{ route('category.index') }}">Danh mục</a>
                                </li>
                                <li class="custom_item">
                                    <a href="{{ route('product.index') }}">Sản phẩm</a>
                                </li> 
                            {{-- @elseif($roleId == 1) --}}
                                {{-- <li class="custom_item">
                                    <a href="{{ route('customer.index') }}">Xem thông tin khách hàng</a>
                                </li>
                                <li class="custom_item">
                                    <a href="{{ route('maker.index') }}">Xem nhà sản xuất</a>
                                </li>
                                <li class="custom_item">
                                    <a href="{{ route('category.index') }}">Xem loại sản phẩm</a>
                                </li>
                                <li class="custom_item">
                                    <a href="{{ route('product.index') }}">Xem sản phẩm</a>
                                </li>
                            @endif
                         --}}
                         <li class="custom_item">
                            <a href="{{ route('chart') }}">Biểu đồ</a>
                        </li> 
                            <li class="custom_item">
                                <a href="{{ route('admin.change_password') }}">Đổi mật khẩu</a>
                            </li>
                            <li class="custom_item">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        
                        
                    </div>
                    <div class="right">
                        @yield('content') 
                    </div>
                    </div>
                </div>  
            </div>
        </section>
    </main>
    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
        </div>
    @endif

    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
    <!-- <footer>
        <p>&copy; 2025 - Tất cả quyền được bảo lưu.</p>
    </footer> -->
</body>
</html>
