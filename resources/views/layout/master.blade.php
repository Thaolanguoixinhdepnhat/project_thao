<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang Chủ')</title>
    <link rel="stylesheet" href="{{ asset('assets/styleindex.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/style-CyonPs-Z.css') }}">
    <link rel="stylesheet" type="text/css" href="style-slider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <link rel="shortcut icon" href="{{ asset('storage/product_images/S.jpg') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="./assets/scss/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Nhúng Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    @vite(['resources/js/app.js'])



    <link rel="stylesheet" href="./assets/scss/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>






    {{-- nhúng next  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">





<style>

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
<script>
    window.addEventListener('load', function () {
        setTimeout(function () {
            const loader = document.getElementById('loader');
            loader.classList.add('fade-out');
        }, 1000); // 1 giây
    });
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleMenuButton = document.getElementById('toggle-menu');
    const navMenu = document.querySelector('.nav-menu');

    toggleMenuButton.addEventListener('click', function (event) {
      event.stopPropagation();
      navMenu.classList.toggle('active');
      toggleMenuButton.classList.toggle('active');
    });

    // Optional: click outside to close
    document.addEventListener('click', function (event) {
      if (!navMenu.contains(event.target) && !toggleMenuButton.contains(event.target)) {
        navMenu.classList.remove('active');
        toggleMenuButton.classList.remove('active');
      }
    });
  });
</script>


<script>
    document.querySelectorAll('.faq-toggle').forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            // Toggle the 'active' class on the clicked element
            this.classList.toggle('active');

            // Find the corresponding .faq-item-ft and toggle its display
            const faqItemFt = this.closest('.faq-item').querySelector('.faq-item-ft');
            faqItemFt.style.display = faqItemFt.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleMenus = document.querySelectorAll(".toggle-menu");
        const arrows = document.querySelectorAll(".arrow");
        const menuContents = document.querySelectorAll(".menu-content");

        toggleMenus.forEach((toggleMenu, index) => {
            const menuContent = menuContents[index];
            const arrow = arrows[index];

            toggleMenu.addEventListener("click", function() {
                // Đóng tất cả các mục khác trước khi mở mục mới
                toggleMenus.forEach((otherMenu, otherIndex) => {
                    const otherMenuContent = menuContents[otherIndex];
                    const otherArrow = arrows[otherIndex];

                    if (otherIndex !== index) {
                        otherMenuContent.classList.remove("active");
                        otherArrow.classList.remove("up");
                        otherArrow.classList.add("down");
                        otherMenu.classList.remove(
                            "focused"); // Loại bỏ trạng thái "focused" của mục khác
                    }
                });

                // Toggle nội dung của mục hiện tại
                menuContent.classList.toggle("active");

                // Đổi mũi tên của mục hiện tại (up hoặc down)
                if (arrow.classList.contains("down")) {
                    arrow.classList.remove("down");
                    arrow.classList.add("up");
                } else {
                    arrow.classList.remove("up");
                    arrow.classList.add("down");
                }

                // Focus vào mục hiện tại và giữ outline chấm chấm
                toggleMenu.classList.add("focused");
                toggleMenu.focus(); // Thực hiện focus thực sự
            });

            // Thêm sự kiện blur để loại bỏ trạng thái focus khi mất focus
            toggleMenu.addEventListener("blur", function() {
                toggleMenu.classList.remove("focused");
            });
        });
    });
</script>

<body>
    <header id="header" class="header" >
        <div class="container">
            <div class="content">
                <nav class="navbar">
                    <div class="nav-left">
                        <div class="header_logo">
                            <a href="{{ route('home') }}">
                                <img src="/storage/product_images/Font-Samsung-Logo.jpg" alt="load,...">
                            </a>
                        </div>
                        <ul class="nav-menu">
                            {{-- <li class="dropdown"> 
                                   <div class="search-box1" id="searchForm">
                                <button type="button" class="btn-search" id="toggleSearch">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#666666">
                                        <path
                                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                    </svg>
                                </button>
                                <input type="text" name="keyword" id="searchInput"
                                    value="{{ request('keyword') }}" placeholder="Tìm kiếm..." autocomplete="off">
                            </div>
                            </li> --}}
                            <li class="dropdown">
                                <a href="#">Di Động</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-left">
                                        <div class="dropdown-left-main">
                                            <div class="dropdown-column">
                                                <h5>Di Động</h5>
                                                {{-- @foreach ($dt as $item)
                                                    <a href="">{{ $item->product_name }}</a>
                                                @endforeach --}}
                                               @foreach ($dt as $item)
                                                    <a href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                        {{ $item->product_name }}
                                                    </a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right">
                                        <h5 class="dropdown-right__title">MỚI & NỔI BẬT</h5>
                                        <div class="promo__list">
                                            @foreach ($dt as $item)
                                                <div class="promo__item">
                                                    {{-- <div class="promo">
                                                        <span class="promo__tag">Mới</span>
                                                        <img class="promo__image"
                                                            src="{{ asset('storage/' . $item->product_image) }}"
                                                            alt="load...">
                                                    </div> --}}
                                                    <div class="promo">
                                                        <span class="promo__tag">Mới</span>
                                                        <a class="s" href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                            <img class="promo__image"
                                                                src="{{ asset('storage/' . $item->product_image) }}"
                                                                alt="load...">
                                                        </a>
                                                    </div>
                                                     <p class="promo__text">
                                                        <a class="s" href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                            {{ $item->product_name }}
                                                        </a>
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="#">Tv&AV</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-left">
                                        <div class="dropdown-left-main">
                                            <div class="dropdown-column">
                                                <h5>Tivi</h5>
                                                {{-- @foreach ($tv as $item)
                                                    <a href="">{{ $item->product_name }}</a>
                                                @endforeach --}}
                                                @foreach ($tv as $item)
                                                    <a href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                        {{ $item->product_name }}
                                                    </a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right">
                                        <h5 class="dropdown-right__title">MỚI & NỔI BẬT</h5>
                                        <div class="promo__list">
                                            @foreach ($tv as $item)
                                                <div class="promo__item">
                                                    {{-- <div class="promo">
                                                        <span class="promo__tag">Mới</span>
                                                        <img class="promo__image"
                                                            src="{{ asset('storage/' . $item->product_image) }}"
                                                            alt="load...">
                                                    </div> --}}
                                                       <div class="promo">
                                                        <span class="promo__tag">Mới</span>
                                                        <a class="s" href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                            <img class="promo__image"
                                                                src="{{ asset('storage/' . $item->product_image) }}"
                                                                alt="load...">
                                                        </a>
                                                    </div>
                                                      <p class="promo__text">
                                                        <a class="s" href="{{ route('user.detail', ['id' => $item->id]) }}">
                                                            {{ $item->product_name }}
                                                        </a>
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="nav-menu__link nav-menu__link--support">Hỗ Trợ</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-left">
                                        <div class="dropdown-left-main">
                                            {{-- <div class="dropdown-column">
                                                <h5>Hỗ Trợ Sản Phẩm</h5>
                                                <a href="#">Trang chủ Hỗ Trợ</a>
                                                <a href="#">Hướng dẫn sử dụng & Software</a>
                                                <a href="#">Tìm kiếm</a>
                                                <a href="#">FAQ Hỗ trợ mua trực tuyến</a>
                                            </div> --}}
                                            <div class="dropdown-column">
                                                <h5>Liên Hệ</h5>
                                                 <a  class="business" href="{{ route('contact.tvtt') }}">Tư Vấn Trực Tuyến
                                                    <i class="fa-solid fa-arrow-up-long"></i>
                                                </a>
                                                
                                                  <a  class="business" href="{{ route('contact.dhlsc') }}">Đặt lịch sửa chữa
                                                    <i class="fa-solid fa-arrow-up-long"></i>
                                                  </a>
                                                  <a href="{{ route('home') }}">Bắt đầu mua hàng
                                                  
                                                  </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-left-side">
                                            <div class="dropdown-column">
                                                <h5>Dịch VỤ Bảo Hành Và <br>Sửa Chữa</h5>
                                                 <a href="{{ route('contact.bh') }}">Thông tin Bảo hành</a>
                                           
                                                <a href="{{ route('contact.bh') }}">Tìm Trung Tâm Bảo Hành</a>
                                              
                                            </div>
                                            <div class="dropdown-column">
                                                <h5> Tìm Thêm Thông Tin</h5>
                                               <a href="{{ route('contact.sane') }}">Tin Tức & Cảnh Báo</a>
                                                 <a href="{{ route('contact.dhlsc') }}">Dịch Vụ Sửa Chữa Tiết Kiệm </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right">
                                        <h5 class="dropdown-right__title">KHÁM PHÁ</h5>
                                        <div class="promo__list">
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <a href="{{ route('contact.index') }}">
                               
                                                    <img class="promo__image"
                                                        src="/storage/product_images/ht.jpg"
                                                        alt="load,...">
                                                     </a>
                                                </div>
                                                 
                                                <p class="promo__text">Liên Hệ</p>
                                                
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <a href="{{ route('contact.bh') }}">
                               
                                                    <img class="promo__image"
                                                        src="/storage/product_images/bh.jpg"
                                                        alt="load,...">
                                                     </a>
                                                </div>
                                                <p class="promo__text">Thông tin bảo hành</p>
                                            </div>


                                     
                                        </div>
                                    </div>
                                </div>
                            </li>
{{-- 
                            <li class="dropdown">
                                <a href="#" class="business">
                                    Liên hệ
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a>
                            </li> --}}
                            {{-- <li class="dropdown">
                                <a href="{{ route('contact.index') }}" class="business">
                                    Liên hệ
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a>
                            </li> --}}


                            <li class="dropdown">
                                <a href="{{ route('contact.vct') }}" class="dropdown">
                                    Về chúng tôi
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="nav-right" style="position: relative;">
                        <div class="search-wrapper" id="searchWrapper">
                            <div class="search-box" id="searchForm">
                                <button type="button" class="btn-search" id="toggleSearch">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#666666">
                                        <path
                                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                    </svg>
                                </button>
                                <input type="text" name="keyword" id="searchInput"
                                    value="{{ request('keyword') }}" placeholder="Tìm kiếm..." autocomplete="off">
                            </div>
                            
                        </div>
                        <div id="searchResults"
                            style="position: absolute; top: 100%;left: 0;background: #f5f5f5;width: 100%;overflow-y: scroll;height: 0;">
                        </div>
                        

                        <a href="{{ route('cart_index') }}" class="cart-number">
                            <svg id="cartIcon" xmlns="http://www.w3.org/2000/svg" height="24px"
                                viewBox="0 -960 960 960" width="24px" fill="#666666" style="cursor: pointer;">
                                <path
                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                            </svg>
                            @if (Auth::user())
                                @php
                                    $totalQuantity = 0;
                                    foreach ($count_cart as $item) {
                                        $totalQuantity += $item->quantity;
                                    }
                                @endphp
                                <span>{{ $totalQuantity }}</span>
                            @else
                                <span>0</span>
                            @endif
                        </a>

                        @if (Auth::user())
                            <a href="{{ route('home_user') }}">
                                <svg width="24px" xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#666666">
                                    <path
                                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                </svg>
                            </a>
                        @else
                            <a href="{{ route('index_login') }}">
                                <svg width="24px" xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#666666">
                                    <path
                                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                </svg>
                            </a>
                        @endif


                        <div role="button" id="toggle-menu">
                            <div class="wrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </header>


    @if (isset($breadcrumbs) && is_array($breadcrumbs))
    <div class="breadcrumb mb-4 text-sm text-gray-600">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$loop->last)
                <a href="{{ $breadcrumb['url'] }}" class="text-blue-600 hover:underline">
                    {{ $breadcrumb['label'] }}
                </a> /
            @else
                <span>{{ $breadcrumb['label'] }}</span>
            @endif
        @endforeach
    </div>
@endif

    <main>
        @yield('content')
    </main>


    <section class="footer_logo">
        <div class="container">
            <div class="content">
                <div class="footer_logo__image">
                    <div class="footer_logo__image_right">
                        <p>Bản quyền ©1995-2025 Samsung bảo lưu mọi quyền.</p>
                        <p> Công ty TNHH Điện Tử Samsung Vina</p>
                        <p>Giấy CNĐT: 411043002319, do UBND TP HCM cấp ngày 28/8/2007</p>
                        <p>Địa chỉ: Số 2, đường Hải Triều, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh</p>
                        <p>Điện thoại: +84-2839157310</p>
                    </div>
                    <div class="footer_logo__image_left">
                        <a class="footer-language__anchor">Việt Nam/Tiếng Việt</a>
                        <img class="promo__image" src="/storage/product_images/logo1.avif" alt="load,...">
                        <img class="promo__image" src="/storage/product_images/logo2.avif" alt="load,...">
                        <img class="promo__image" src="/storage/product_images/logo3.avif" alt="load,...">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="footer__menu">
        <div class="container">
            <div class="content">
                <div class="footer__menu_item">
                    <div class="footer__menu_item_right">
                        <div class="footer-language">
                            <a class="footer-language__anchor">Việt Nam/Tiếng Việt</a>
                        </div>
                        <div class="footer-terms">
                            <ul class="footer-terms__list">
                                <li class="footer-terms__item" role="listitem">
                                    <a class="footer-terms__link">Bảo Mật</a>
                                </li>
                                <li class="footer-terms__item" role="listitem">
                                    <a class="footer-terms__link">Pháp Lý</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__menu_item_left">
                        <div class="footer-sns">
                            <span class="footer-sns__title">Kết Nối với Chúng Tôi</span>
                            <ul class="footer-sns__list">
                                <li class="footer-sns__item" role="listitem">
                                    <a class="footer-sns__link" href="https://www.facebook.com/SamsungVietnam"
                                        target="_blank" rel="noreferrer noopener"
                                        aria-label="Facebook - Mở trong một cửa sổ mới">
                                        <img class="footer-sns__icon" src="/storage/product_images/fb.jpg"
                                            alt="Facebook">
                                    </a>
                                </li>
                                <li class="footer-sns__item" role="listitem">
                                    <a class="footer-sns__link" href="https://www.YouTube.com/SamsungVietnam"
                                        target="_blank" rel="noreferrer noopener"
                                        aria-label="YouTube - Mở trong một cửa sổ mới">
                                        <img class="footer-sns__icon" src="/storage/product_images/ytb.png"
                                            alt="YouTube">
                                    </a>
                                </li>
                                <li class="footer-sns__item" role="listitem">
                                    <a class="footer-sns__link" href="https://www.instagram.com/samsung_vietnam/"
                                        target="_blank" rel="noreferrer noopener"
                                        aria-label="instagram - Mở trong một cửa sổ mới">
                                        <img class="footer-sns__icon" src="/storage/product_images/instagram.jpg"
                                            alt="instagram">
                                    </a>
                                </li>
                                <li class="footer-sns__item" role="listitem">
                                    <a class="footer-sns__link" href="https://zalo.me/598843366637438151"
                                        target="_blank" rel="noreferrer noopener"
                                        aria-label="zalo - Mở trong một cửa sổ mới">
                                        <img class="footer-sns__icon" src="/storage/product_images/zalo.jpg"
                                            alt="zalo">
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<a href="#top" class="arrow-up" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
  <i class="fa-solid fa-circle-arrow-up" style="font-size: 32px;"></i>
</a>



    {{-- header cuộn --}}
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

    {{-- seacher co vào giãn ra --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const wrapper = document.getElementById("searchWrapper");
            const toggleSearch = document.getElementById("toggleSearch");
            const input = document.getElementById("searchInput");
            const searchResults = document.getElementById("searchResults");
    
            // Mở ô tìm kiếm khi nhấn nút kính lúp
            toggleSearch.addEventListener("click", function (e) {
                e.preventDefault();
                wrapper.classList.add("active");
                input.focus();
            });
    
            // Ẩn ô tìm kiếm nếu click ra ngoài
            document.addEventListener("click", function (e) {
                if (!wrapper.contains(e.target)) {
                    wrapper.classList.remove("active");
                    searchResults.style.height = "0"; // Ẩn kết quả tìm kiếm
                }
            });
    
            // Khi input mất focus thì ẩn kết quả
            input.addEventListener("blur", function () {
                // Delay để cho phép click vào kết quả trước khi ẩn
                setTimeout(() => {
                    searchResults.style.height = "0";
                }, 200);
            });
    
            // Khi input được focus lại thì hiện kết quả (nếu có nội dung)
            input.addEventListener("focus", function () {
                if (searchResults.innerHTML.trim() !== '') {
                    searchResults.style.height = "50vh";
                }
            });
        });
    </script>
    

    {{-- ajax tìm kiếm  --}}
    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                let query = $(this).val();
                const detailBaseUrl = "{{ url('details') }}/";
    
                if (query.length === 0) {
                    $('#searchResults').empty().css('height', '0');
                    return;
                }
    
                $.ajax({
                    url: '{{ route('search') }}',
                    method: 'GET',
                    data: {
                        keyword: query
                    },
                    success: function(response) {
                        let html = '';
    
                        if (response.products.length === 0) {
                            html = '<p style="padding:1rem;">Không tìm thấy sản phẩm.</p>';
                            $('#searchResults').html(html).css('height', 'auto');
                        } else {
                            response.products.forEach(function(product) {
                                html += `
                                    <a href="${detailBaseUrl}${product.id}" class="product-item" style="border-bottom:1px solid #ccc;padding:1rem;display:flex;">
                                        <img class="image__main responsive-img image--loaded"
                                            src="/storage/${product.product_image}"
                                            alt="${product.product_name}" style="max-width: 15rem; width:100%;">
                                        <h4 style="margin-left: 1rem;">${product.product_name ?? ''}</h4>
                                    </a>
                                `;
                            });
    
                            $('#searchResults').html(html).css('height', '50vh');
                        }
                    },
                    error: function() {
                        $('#searchResults').html('<p style="padding:1rem;">Có lỗi xảy ra!</p>').css('height', 'auto');
                    }
                });
            });
        });
    </script>
    
    {{-- check login  --}}
    <script>
        document.querySelectorAll('.formAddToCart').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                @if (!Auth::check())
                    e.preventDefault();
                    alert('Bạn phải đăng nhập để mua hàng!');
                    window.location.href = "{{ route('login') }}";
                @endif
            });
        });
    </script>


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
