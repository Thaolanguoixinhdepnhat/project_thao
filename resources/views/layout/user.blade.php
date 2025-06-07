{{-- <!DOCTYPE html>
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

</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang Chủ')</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="shortcut icon" href="{{ asset('storage/product_images/S.jpg') }}">
    <!-- Vite -->
    @vite(['resources/js/app.js'])
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        body {
            background-color: #f8f9fa;
        }
        .txt{
            font-size: 1.8rem;
            font-weight: 600;
            color:#f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar .nav-link {
            white-space: nowrap;
            overflow: hidden;
        }

        .sidebar.collapsed .nav-link span {
            display: none;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .profile-circle {
            width: 40px;
            height: 40px;
            background-color: #ffc107;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
                .status-indicator {
                position: absolute;
                bottom: 2px;
                right: 2px;
                width: 12px;
                height: 12px;
                background-color: #00d68f;
                border: 2px solid #1e1e2f;
                border-radius: 50%;
            }
        }

        .toggle-btn {
            border: none;
            background: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .dropdown-menu {
            min-width: 180px;
        }
        .nav-link i {
            transition: color 0.3s ease;
        }

        .nav-link:hover i {
            color: #ff6347; 
        }

        .nav-link i.home-icon {
            color: #ff6347;
        }

        .nav-link i.profile-icon {
            color: #20b2aa; 
        }

        .nav-link i.cart-icon {
            color: #ff1493; 
        }

        .nav-link i.history-icon {
            color: #8a2be2; 
        }

        .nav-link i.password-icon {
            color: #ff4500;
        }

        .nav-link i.logout-icon {
            color: #dc143c; 
        }
        .px-3 {
    display: flex;
    gap: 2rem;
       padding-right: 0 !important;
    padding-left: 0 !important;
}
.align-items-center {
    align-items: center !important;
    padding-left: 2rem;
}
    .load{
            position: fixed;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    z-index: 999999999999;
    transition: 1s ease;
    }
.loader {
  width: 50px;
  height: 50px;
  display: flex;
  transform: rotate(45deg);
  animation: l3-0 1.5s infinite linear;
}
.loader:before,
.loader:after {
  content: "";
  width: 50%;
  background: pink;
  clip-path: polygon(0 50%,100% 0,100% 100%);
  animation: inherit;
  animation-name: l3-1;
}
.loader:after {
  clip-path: polygon(0 0,100% 50%,0% 100%);
  animation-name: l3-2;
}
@keyframes l3-0 {
  25% {width:50px;height:50px;transform:rotate(0)}
  50% {width:50px;height:50px}
  75% {width:70.70px;height:35.35px}
  100%{width:70.70px;height:35.35px;transform:rotate(0)}
}
@keyframes l3-1 {
  0%,25% {clip-path: polygon(0 50% ,100% 0,100% 100%);transform:translate(0.3px)}
  50%    {clip-path: polygon(0 50% ,100% 0,100% 100%);transform:translate(-5px)}
  75%    {clip-path: polygon(0 100%,0    0,100% 100%);transform:translate(-5px)}
  100%   {clip-path: polygon(0 100%,0    0,100% 100%);transform:translate(17.7px)}
}
@keyframes l3-2 {
  0%,25% {clip-path: polygon(0 0,100% 50%,0    100%);transform:translate(-0.3px) }
  50%    {clip-path: polygon(0 0,100% 50%,0    100%);transform:translate(5px) }
  75%    {clip-path: polygon(0 0,100% 0  ,100% 100%);transform:translate(5px)}
  100%   {clip-path: polygon(0 0,100% 0  ,100% 100%);transform:translate(-17.7px) }
}
.load.fade-out {
    opacity: 0;
    visibility: hidden;
}
    </style>
</head>

@use('Illuminate\Support\Facades\Auth')
<div class="load" id="loader">
    <div class="loader"></div>
</div>
<body>
    <nav class="navbar navbar-dark bg-dark px-3 d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <span class="toggle-btn me-3" onclick="toggleSidebar()"><i class="fas fa-bars"></i></span>
            <a href="{{ route('home') }}" class="txt">Thông tin người dùng</a>
        </div>
        <div class="dropdown">
            <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" role="button"
                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile-circle me-2">
                    {{ strtoupper(substr(Auth::guard('web')->user()->username, 0, 1)) }}
                    <span class="status-indicator"></span>
                </div>
                <strong>{{ Auth::guard('web')->user()->username }}</strong>
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                <li>
                    {{-- <a class="dropdown-item" href="{{ route('home_user') }}"><i class="fas fa-user me-2 text-warning"></i> Hồ sơ</a> --}}
                     <a class="dropdown-item" href="{{ route('home_user') }}">
                             <i class="fas fa-user me-2 text-warning"></i><span>Hồ sơ</span>
                            </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('user.change_password') }}">
                               <i class="fas fa-key me-2 text-info"></i><span>Đổi mật khẩu</span>
                            </a>
                    {{-- <a class="dropdown-item" href="{{ route('admin.change_password') }}"><i class="fas fa-key me-2 text-info"></i> Đổi mật khẩu</a> --}}
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    {{-- <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button class="dropdown-item text-danger"><i class="fas fa-sign-out-alt me-2"></i> Đăng xuất</button>
                    </form> --}}
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               <button class="dropdown-item text-danger">  <i class="fas fa-sign-out-alt me-2 logout-icon"></i>Đăng xuất</button>
                            </a> 
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar py-4 transition-all">
                <div class="position-sticky">
                    <ul class="nav flex-column px-3">
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-home me-2 home-icon"></i> <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('home_user') }}">
                                <i class="fas fa-user me-2 profile-icon"></i> <span>Hồ sơ</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('user.cart') }}">
                                <i class="fas fa-shopping-cart me-2 cart-icon"></i> <span>Giỏ hàng</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('user.order') }}">
                                <i class="fas fa-box-open me-2 history-icon"></i> <span>Lịch sử mua hàng</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('listComment') }}">
                                <i class="fas fa-box-open me-2 history-icon"></i> <span>Lịch sử đánh giá</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('user.change_password') }}">
                                <i class="fas fa-key me-2 password-icon"></i> <span>Đổi mật khẩu</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-2 logout-icon"></i> <span>Đăng xuất</span>
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 transition-all" id="main-content">
                @yield('content')
            </main>
        </div>
    </div>

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thành công',
                text: "{{ session('success') }}"
            });
        </script>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        }
    </script>
    <script>
    window.addEventListener('load', function () {
        setTimeout(function () {
            const loader = document.getElementById('loader');
            loader.classList.add('fade-out');
        }, 1000); // 1 giây
    });
</script>
</body>
</html>

