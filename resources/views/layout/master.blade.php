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

</head>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleMenuButton = document.getElementById('toggle-menu');
        const navMenu = document.querySelector('.nav-menu');

        toggleMenuButton.addEventListener('click', function(event) {
            event.stopPropagation();
            navMenu.classList.toggle('active');
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
    document.addEventListener("DOMContentLoaded", function () {
        const toggleMenus = document.querySelectorAll(".toggle-menu");
        const arrows = document.querySelectorAll(".arrow");
        const menuContents = document.querySelectorAll(".menu-content");
    
        toggleMenus.forEach((toggleMenu, index) => {
            const menuContent = menuContents[index];
            const arrow = arrows[index];
    
            toggleMenu.addEventListener("click", function () {
                // Đóng tất cả các mục khác trước khi mở mục mới
                toggleMenus.forEach((otherMenu, otherIndex) => {
                    const otherMenuContent = menuContents[otherIndex];
                    const otherArrow = arrows[otherIndex];
    
                    if (otherIndex !== index) {
                        otherMenuContent.classList.remove("active");
                        otherArrow.classList.remove("up");
                        otherArrow.classList.add("down");
                        otherMenu.classList.remove("focused");  // Loại bỏ trạng thái "focused" của mục khác
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
            toggleMenu.addEventListener("blur", function () {
                toggleMenu.classList.remove("focused");
            });
        });
    });
    
    
    
    
    
    
        </script>
<body>
    <header class="header">
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
                            <li class="dropdown">
                                <a href="#">Di Động</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-left">
                                        <div class="dropdown-left-main">
                                            <div class="dropdown-column">
                                                <h5>Di Động</h5>
                                                <a href="#">Khám phá các thiết bị di động</a>
                                                <a href="#">Điện thoại thông minh Galaxy</a>
                                                <a href="#">Galaxy Tab</a>
                                                <a href="#">Galaxy Watch</a>
                                                <a href="#">Galaxy Buds</a>
                                                <a href="#">Phụ kiện Galaxy</a>
                                                <a href="#">Galaxy AI</a>
                                                <a href="#">One UI</a>
                                                <a href="#">Samsung Health</a>
                                                <a href="#">Apps & Services</a>
                                                <a href="#">Why Galaxy</a>
                                                <a href="#">Chuyển sang Galaxy</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right">
                                        <h5 class="dropdown-right__title">MỚI & NỔI BẬT</h5>
                                        <div class="promo__list">
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <span class="promo__tag">Mới</span>
                                                    <img class="promo__image"
                                                        src="/storage/product_images/sss25ustra.jpg" alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy S25 Ultral</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <span class="promo__tag">Mới</span>
                                                    <img class="promo__image"
                                                        src="/storage/product_images/sss25+.avif" alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy S25 | S25+</p>
                                            </div>

                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/ssgalaxy fod6.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy Z Fold6</p>
                                            </div>

                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/ssgalaxyz6.avif" alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy Z Flip6</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <span class="promo__tag">Mới</span>
                                                    <img class="promo__image"
                                                        src="/storage/product_images/ssgalaxya565g.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy A56 5G</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/galaxyTabF10.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy Tab S10 series</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/galaxy_watch.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy Watch Ultra</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/galaxy_buds3_pro.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy Buds3 Pro</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/galaxy_watch7.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy Watch7</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/asset_galaxy_ai.avif"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Galaxy AI</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#">TV & AV</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-left">
                                        <div class="dropdown-left-main">
                                            <div class="dropdown-column">
                                                <h5>TVS</h5>
                                                <a href="#">Tất cả TVs</a>
                                                <a href="#">Neo QLED</a>
                                                <a href="#">OLED</a>
                                                <a href="#">Crystal UHD</a>
                                                <a href="#">The Frame</a>
                                                <a href="#">The Serif</a>
                                                <a href="#">Phụ kiện TV</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-left-side">
                                            <div class="dropdown-column">
                                                <h5>TVs Theo Kích Thước<br> Màn hình</h5>
                                                <a href="#">TV 98 inch</a>
                                                <a href="#">TV 85 inch</a>
                                                <a href="#">TV 75 inch</a>
                                                <a href="#">TV 65 inch</a>
                                                <a href="#">TV 55 inch</a>
                                                <a href="#">TV 50 inch</a>
                                                <a href="#">TV 43 inch</a>
                                                <a href="#">TV 32 inch</a>
                                            </div>
                                            <div class="dropdown-column">
                                                <h5>TV Theo Độ Phân Giải</h5>
                                                <a href="#">TV 8K</a>
                                                <a href="#">TV 4K</a>
                                                <a href="#">Full HD/ HD TV</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-left-side">
                                            <div class="dropdown-column">
                                                <h5> Loa Thanh & Loa Tháp</h5>
                                                <a href="#">Tất cả các thiết bị âm thanh</a>
                                                <a href="#">Loa Thanh Ultra Slim</a>
                                                <a href="#">Loa Thanh S-series</a>
                                                <a href="#">Loa Thanh B-series</a>
                                                <a href="#">Loa Tranh Music Frame</a>
                                                <a href="#">Loa Tháp Sound Tower</a>
                                                <a href="#">Phụ kiện loa</a>
                                            </div>
                                            <div class="dropdown-column">
                                                <h5>Máy Chiếu</h5>
                                                <a href="#">Tất cả Máy chiếu</a>
                                                <a href="#">The Premiere</a>
                                                <a href="#">The Freestyle</a>
                                                <a href="#">Phụ kiện Máy chiếu</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right">
                                        <div class="dropdown-container">
                                            <div class="dropdown-container-right">
                                                <div class="dropdown-right-main">
                                                    <div class="dropdown-column">
                                                        <h5>Khám Phá</h5>
                                                        <a href="#">Tại sao lựa chọn Samsung TV</a>
                                                        <a href="#">Tại sao lựa chọn TV 8K</a>
                                                        <a href="#">Tại sao lựa chọn TV Neo QLED</a>
                                                        <a href="#">Tại sao lựa chọn TV Samsung OLED</a>
                                                        <a href="#">Tại sao lựa chọn TV The Frame</a>
                                                        <a href="#">Tại sao lựa chọn Samsung Smart TV</a>
                                                        <a href="#">TV Chơi Game Tốt Nhất</a>
                                                        <a href="#">Tại sao lựa chọn TV màn hình cực đại</a>
                                                        <a href="#">Samsung TV thể thao tốt nhất</a>
                                                        <a href="#">MICRO LED</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown-right-side">
                                                    <div class="dropdown-column">
                                                        <h5> Hướng Dẫn Mua Hàng</h5>
                                                        <a href="#">Tìm TV Phù Hợp Cho Bạn</a>
                                                        <a href="#">Tìm Loa Thanh Phù Hợp Cho Bạn</a>
                                                        <a href="#">Hướng dẫn mua TV</a>
                                                        <a href="#">Hướng dẫn mua Loa Thanh</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="promo__grid">
                                                <div class="promo__item">
                                                    <div class="promo">
                                                        <img class="promo__image"
                                                            src="/storage/product_images/kptvs.avif" alt="load,...">
                                                    </div>
                                                    <p class="promo__text">Khám phá TVs</p>
                                                </div>
                                                <div class="promo__item">
                                                    <div class="promo">
                                                        <img class="promo__image"
                                                            src="/storage/product_images/kptvpcs.avif" alt="load,...">
                                                    </div>
                                                    <p class="promo__text">Khám phá TVs phong cách<br>sống</p>
                                                </div>
                                                <div class="promo__item">
                                                    <div class="promo">
                                                        <img class="promo__image"
                                                            src="/storage/product_images/kptbat.avif" alt="load,...">
                                                    </div>
                                                    <p class="promo__text">Khám phá thiết bị âm<br>thanh</p>
                                                </div>
                                                <div class="promo__item">
                                                    <div class="promo">
                                                        <img class="promo__image"
                                                            src="/storage/product_images/kpmc.avif" alt="load,...">
                                                    </div>
                                                    <p class="promo__text">Khám phá máy chiếu</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-menu__link nav-menu__link--support">Hỗ Trợ</a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-left">
                                        <div class="dropdown-left-main">
                                            <div class="dropdown-column">
                                                <h5>Hỗ Trợ Sản Phẩm</h5>
                                                <a href="#">Trang chủ Hỗ Trợ</a>
                                                <a href="#">Hướng dẫn sử dụng & Software</a>
                                                <a href="#">Tìm kiếm</a>
                                                <a href="#">FAQ Hỗ trợ mua trực tuyến</a>
                                            </div>
                                            <div class="dropdown-column">
                                                <h5>Liên Hệ</h5>
                                                <a href="#" class="business">Tư Vấn Trực Tuyến
                                                    <i class="fa-solid fa-arrow-up-long"></i>
                                                </a>
                                                <a href="#">Gọi Điện Thoại
                                                </a>
                                                <a href="#" class="business">Gửi Email
                                                    <i class="fa-solid fa-arrow-up-long"></i>
                                                </a>
                                                <a href="#" class="business">Ngôn Ngữ Ký Hiệu</a>
                                            </div>
                                        </div>
                                        <div class="dropdown-left-side">
                                            <div class="dropdown-column">
                                                <h5>Dịch VỤ Bảo Hành Và <br>Sửa Chữa</h5>
                                                <a href="#">Thông tin Bảo hành</a>
                                                <a href="#">Bảng giá linh kiện</a>
                                                <a href="#">Tìm Trung Tâm Bảo Hành</a>
                                                <a href="#">Tình Trạng Sửa Chữa</a>
                                            </div>
                                            <div class="dropdown-column">
                                                <h5> Tìm Thêm Thông Tin</h5>
                                                <a href="#">Tin Tức & Cảnh Báo</a>
                                                <a href="#">Dịch Vụ Sửa Chữa Tiết Kiệm </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right">
                                        <h5 class="dropdown-right__title">MỚI & NỔI BẬT</h5>
                                        <div class="promo__list">
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <span class="promo__tag">Mới</span>
                                                    <img class="promo__image"
                                                        src="/storage/product_images/ar12tyhqasinsv-1.jpg"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Ưu đãi điều hòa</p>
                                            </div>
                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/samsungshop2.png" alt="load,...">
                                                </div>
                                                <p class="promo__text">Samsung Shop App</p>
                                            </div>

                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image"
                                                        src="/storage/product_images/dtsamsung.jpg" alt="load,...">
                                                </div>
                                                <p class="promo__text">Mega Sale</p>
                                            </div>

                                            <div class="promo__item">
                                                <div class="promo">
                                                    <img class="promo__image" src="/storage/product_images/tulanh.jpg"
                                                        alt="load,...">
                                                </div>
                                                <p class="promo__text">Thu Cũ Đổi Mới</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="business">
                                    Liên hệ
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown">
                                    Về chúng tôi
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="nav-right">
                        <div class="search-wrapper" id="searchWrapper">
                            <form action="" method="GET" class="search-box" id="searchForm">
                                <button type="button" class="btn-search" id="toggleSearch">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                        fill="#666666">
                                        <path
                                            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                                    </svg>
                                </button>
                                <input type="text" name="keyword" id="searchInput"
                                       value="{{ request('keyword') }}"
                                       placeholder="Tìm kiếm..." autocomplete="off">
                            </form>
                        </div>
                        <a href="{{ route('cart_index')}}" class="cart-number">
                            <svg id="cartIcon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#666666" style="cursor: pointer;">
                                <path
                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
                            </svg>
                            @if (Auth::user())
                                @php
                                    $totalQuantity = 0;
                                    foreach($count_cart as $item) {
                                        $totalQuantity += $item->quantity;
                                    }
                                @endphp
                                <span>{{$totalQuantity }}</span>
                            @else
                                <span>0</span>
                            @endif
                        </a>
                        @if (Auth::user())
                            <a href="{{ route('home_user')}}">
                                <svg width="24px" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#666666">
                                    <path
                                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                </svg>
                            </a>
                        @else
                            <a href="{{route('index_login')}}">
                                <svg width="24px" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#666666">
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
    
    {{-- header cuộn --}}
    <script>
        window.addEventListener('scroll', function () {
          const header = document.querySelector('.header');
          if (window.scrollY > 10) {
            header.classList.add('scrolled');
          } else {
            header.classList.remove('scrolled');
          }
        });
      </script>
      


{{-- 
seacher co vào giãn ra --}}
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          const wrapper = document.getElementById("searchWrapper");
          const toggleSearch = document.getElementById("toggleSearch");
          const input = document.getElementById("searchInput");
      
          toggleSearch.addEventListener("click", function (e) {
            e.preventDefault();
            wrapper.classList.add("active");
            input.focus();
          });
      
          // Click ngoài để ẩn lại
          document.addEventListener("click", function (e) {
            if (!wrapper.contains(e.target)) {
              wrapper.classList.remove("active");
            }
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
