<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang Chủ')</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/app.js'])

</head>
@use('Illuminate\Support\Facades\Auth')

<body>
    <header class="header">
        <div class="container">
            <div class="content">
                <div class="sec">
                    <div class="header_title">
                        <span>Quản lý hồ sơ</span>
                    </div>
                    <div class="btn">
                        <form method="POST" action="{{ route('admin.logout') }}">
                            <span>Chào bạn, {{ Auth::guard('web')->user()->username }}</span>
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
                            <ul class="custom_list">
                                <li class="custom_item">
                                    <a href="{{ route('home') }}">Trang chủ</a>
                                </li>

                                <li class="custom_item">
                                    <a href="{{ route('home_user') }}">Hồ sơ</a>
                                </li>

                                <li class="custom_item">
                                    <a href="{{ route('user.cart') }}">Giỏ hàng</a>
                                </li>

                                <li class="custom_item">
                                    <a href="{{ route('user.order') }}">Lịch sử mua hàng</a>
                                </li>

                                <li class="custom_item">
                                    <a href="{{ route('admin.change_password') }}">Đổi mật khẩu</a>
                                </li>

                                <li class="custom_item">
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                        style="display: none;">
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

</body>

</html>
