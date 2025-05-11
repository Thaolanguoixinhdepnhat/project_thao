{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang Chủ')</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/js/app.js'])
    <link rel="shortcut icon" href="assets1/images/favicon.png" />
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


                        <ul class="custom_list">
                            <li class="custom_item">Trang chủ</li>
                        
                            @php $roleId = Auth::guard('admin')->user()->role_id; @endphp
                        
                            @if($roleId == 3)
                                <li class="custom_item">
                                    <a href="{{ route('admin.register_index') }}">Quản trị thành viên</a>
                                </li>
                            @endif
                
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
</body>
</html> --}}



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang Quản Trị')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets1/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    @vite(['resources/js/app.js'])

    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            transition: width 0.3s ease;
            z-index: 1000;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar .profile {
            text-align: center;
            padding: 1rem;
        }

        .sidebar .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .sidebar .profile h5 {
            font-size: 1rem;
            margin-top: 0.5rem;
            white-space: nowrap;
        }

        .sidebar.collapsed .profile h5 {
            display: none;
        }

        .sidebar .nav-link {
            color: #fff;
            padding: 0.75rem 1rem;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .sidebar.collapsed .nav-link span {
            display: none;
        }

        .toggle-btn {
            position: absolute;
            top: 1rem;
            right: -1.5rem;
            background-color: #343a40;
            border: none;
            color: #fff;
            padding: 0.5rem;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
        }

        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
            padding: 1rem;
        }

        .main-content.collapsed {
            margin-left: 80px;
        }

        .navbar-custom {
            background-color: #fff;
            padding: 0.75rem 1.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 999;
            transition: margin-left 0.3s ease;
        }

        .navbar-custom.collapsed {
            margin-left: 80px;
        }

        .navbar-custom .dropdown-toggle {
            color: #343a40;
            font-weight: 500;
        }

        .navbar-custom img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }
        /* Menu Icon */
.menu-icon {
    width: 30px;
    height: 25px;
    position: absolute;
    top: 2rem;
    right: -3.5rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    z-index: 1001;
}

.menu-icon span {
    display: block;
    height: 3px;
    background-color: white;
    border-radius: 2px;
    transition: 0.3s;
}
.sidebar.collapsed .menu-icon span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.sidebar.collapsed .menu-icon span:nth-child(2) {
    opacity: 0;
}

.sidebar.collapsed .menu-icon span:nth-child(3) {
    transform: rotate(-50deg) translate(10px, -10px);
}
.sidebar .nav-link .bi-house-door {
    color: #007bff;
}
.sidebar .nav-link .bi-people {
    color: #28a745; 
}
.sidebar .nav-link .bi-cart {
    color: #ffc107;
}
.sidebar .nav-link .bi-person-badge {
    color: #17a2b8; 
}

.sidebar .nav-link .bi-building {
    color: #dc3545; 
}

.sidebar .nav-link .bi-list {
    color: #6610f2; 
}


.sidebar .nav-link .bi-box {
    color: #fd7e14; 
}
.sidebar .nav-link .bi-bar-chart {
    color: #6f42c1; 
}

.sidebar .nav-link .bi-key {
    color: #20c997; 
}
.sidebar .nav-link .bi-box-arrow-right {
    color:blue; 
}
.nav-bar {
    width: 100%;
    background-color:  #343a40;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    .container {
        width: 100%;
        .content {
            .fluid-justify {
                align-items: center; 
                .main{
                    display: flex;
                    justify-content: flex-end;
                    gap: 5rem;
                .dropdown {
                    display: flex;
                    align-items: center;
                    
                    a {
                        display: flex;
                        align-items: center;
                        text-decoration: none;
                        color: white;
                        gap: 1rem;
                        
                        .avatar-wrapper1{
   position: relative;
      width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color:chocolate;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 18px;
  text-transform: uppercase
                        }

                        strong {
                            font-weight: 500;
                            font-size: 2rem;
                            color: white;
                           
                        }
                    }
                
                    .dropdown-menu {
  width: 100% !important;
  background-color: #343a40;
  border: none;
  padding: 0.5rem 0;

  li {
    .dropdown-item {
      color: white;
      padding: 0.5rem 1rem;
      transition: background-color 0.3s ease;

      &:hover {
        background-color:#2c2f33;
        color: white;
      }
     
    .bi-box-arrow-right{
        color:blue; 
    }
    }

    & + li {
        border-top: 1px solid rgba(255, 255, 255, 0.15); 

    }
   
    form {
      margin: 0;

      .dropdown-item {
        width: 100%;
        text-align: left;
        background: none;
        border: none;
      }
    }
  }
}

                }
                .icon-bar {
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;

.icon-item {
  position: relative;
  width: 4rem;
  height: 4rem;
  display: flex;
  justify-content: center;
  align-items: center;
  border-right: 1px solid rgba(255, 255, 255, 0.2); 

}

.icon-item:last-child {
  border-right: none;
}

.icon-grid::before,
.icon-mail::before,
.icon-bell::before {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 20px;
  color: white;
}

.icon-grid::before {
  content: "\f00a"; 
}

.icon-mail::before {
  content: "\f0e0";
}

.icon-bell::before {
  content: "\f0f3"; 
}

.dot {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
}

.green {
  background-color: #00cc66;
}

.red {
  background-color: #ff3b3b;
}
            }
            }
        }
        }
    }
}









.profile-box {
  border-radius: 10px; 
  color: white;
  font-family: 'Segoe UI', sans-serif;

  .profile-header {
    display: flex;
    align-items: center;
    margin-top:2rem;
    margin-bottom: 1.5rem;
    position: relative;

    .avatar-wrapper {
      position: relative;
      width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color:chocolate;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 18px;
  text-transform: uppercase

      .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

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

    .user-info {
      margin-left: 10px;
      flex-grow: 1;

      .username {
        font-weight: 600;
        font-size: 16px;
      }

      .role {
        font-size: 13px;
        color: #b0b0b0;
      }
    }

    .dots {
      font-size: 20px;
      cursor: pointer;
      color: #888;
    }
  }

  .profile-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    background-color: #262637;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);

    li {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 15px;
      font-size: 14px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      transition: background 0.3s;

      &:hover {
        background-color: #2f2f46;
        cursor: pointer;
      }

      .icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 14px;
        background-color: #111;

        &.blue {
          color: #00bfff;
        }

        &.purple {
          color: #a259ff;
        }

        &.green {
          color: #00d68f;
        }
      }
    }

    li:last-child {
      border-bottom: none;
    }

    &.hidden {
      display: none;
    }
  }
}

.sidebar.collapsed .profile-header .user-info,
.sidebar.collapsed .profile-header .dots {
  display: none;
}

.flex-column {
    gap: 2rem;
}





    </style>
</head>
<body>


    @php use Illuminate\Support\Facades\Auth; @endphp
<div class="nav-bar">
    <div class="container">
        <div class="content">
                <div class="fluid-justify">
                    <div class="main">
                        <div class="icon-bar">
                            <div class="icon-item">
                              <i class="icon-grid"></i>
                            </div>
                            <div class="icon-item">
                              <i class="icon-mail"></i>
                              <span class="dot green"></span>
                            </div>
                            <div class="icon-item">
                              <i class="icon-bell"></i>
                              <span class="dot red"></span>
                            </div>
                          </div>
                          <div class="dropdown">
                            <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar-wrapper1">
                @php
                $name = Auth::guard('admin')->user()->username;
                $words = explode(' ', trim($name));
                $initials = '';
                foreach ($words as $word) {
                    if (!empty($word)) {
                        $initials .= strtoupper(mb_substr($word, 0, 1));
                    }
                }
                $initials = mb_substr($initials, 0, 2); 
            @endphp
            
            {{ $initials }}
            
                <span class="status-indicator"></span>
              </div>
                                <strong>{{ Auth::guard('admin')->user()->username }}</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-small shadow">
                            
                                <li>
                                    <a class="dropdown-item" href="{{ route('homeadmin.index') }}">
                                        <i class="bi bi-person me-2"></i>Thông tin tài khoản
                                    </a>
                                </li>
                                
                              
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cài đặt</a></li>
                             
                                <li>
                                    <form action="{{ route('admin.logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Đăng xuất</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                 
                    
                      

                </div>
        </div>
    </div>
</div>



    <div class="sidebar" id="sidebar">
            <div class="menu-icon" id="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        <div class="profile-box">
            <div class="profile-header">
              <div class="avatar-wrapper">
                @php
                $name = Auth::guard('admin')->user()->username;
                $words = explode(' ', trim($name));
                $initials = '';
                foreach ($words as $word) {
                    if (!empty($word)) {
                        $initials .= strtoupper(mb_substr($word, 0, 1));
                    }
                }
                $initials = mb_substr($initials, 0, 2); 
            @endphp
            
            {{ $initials }}
            
                <span class="status-indicator"></span>
              </div>
              <div class="user-info">
                <div class="username">{{ Auth::guard('admin')->user()->username }}</div>
                <div class="role">Thành viên vàng</div>
              </div>
              <div class="dots" onclick="toggleMenu()">⋮</div>
            </div>
          
            <ul class="profile-menu hidden" id="profileMenu">
                <li onclick="window.location='{{ route('homeadmin.index') }}'">
                    <i class="bi bi-gear-fill icon blue"></i> Thông tin tài khoản
                  </li>
              {{-- <li><i class="bi bi-gear-fill icon blue"></i>Thông tin tài khoản</li> --}}
              <li onclick="window.location='{{ route('admin.change_password') }}'">
                <i class="bi bi-key icon purple"></i> Đổi mật khẩu
              </li>
            </ul>
          </div>
          
          
        <ul class="nav flex-column">
                 <li class="nav-item">
    <a class="nav-link" href="{{ route('order.summary') }}">
        <i class="bi bi-house-door me-2"></i><span>Trang chủ</span>
    </a>
                    </li>
    
</li>

            @php $roleId = Auth::guard('admin')->user()->role_id; @endphp
            @if($roleId == 3)
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.register_index') }}"><i class="bi bi-people me-2"></i><span>Quản trị thành viên</span></a></li>
            @endif
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.order.index') }}"><i class="bi bi-cart me-2"></i><span>Đơn hàng</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('customer.index') }}"><i class="bi bi-person-badge me-2"></i><span>Khách hàng</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('maker.index') }}"><i class="bi bi-building me-2"></i><span>Nhà sản xuất</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}"><i class="bi bi-list me-2"></i><span>Danh mục</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}"><i class="bi bi-box me-2"></i><span>Sản phẩm</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('chart') }}"><i class="bi bi-bar-chart me-2"></i><span>Biểu đồ</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.change_password') }}"><i class="bi bi-key me-2"></i><span>Đổi mật khẩu</span></a></li>
             
            <li class="nav-item">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-start"><i class="bi bi-box-arrow-right me-2"></i><span>Đăng xuất</span></button>
                </form>
            </li>
        </ul>
    </div>


   
    <div class="main-content" id="main-content">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const mainNavbar = document.getElementById('main-navbar');
    
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            mainNavbar.classList.toggle('collapsed');
        });
    </script>  
    <script>
        function toggleMenu() {
          const menu = document.getElementById('profileMenu');
          menu.classList.toggle('hidden');
        }
      </script>
        

    @if (session('error'))
    <script>Swal.fire('Lỗi', '{{ session('error') }}', 'error');</script>
    @endif
    @if (session('success'))
    <script>Swal.fire('Thành công', '{{ session('success') }}', 'success');</script>
    @endif
</body>
</html>

