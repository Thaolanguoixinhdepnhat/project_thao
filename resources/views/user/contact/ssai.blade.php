@extends('layout.master')

@section('title', 'SamSung ai')

@section('content')
    <section class="ssai">
        <div class="container">
            <div class="content">
                <div class="carousel-item">
                    <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/Handraiser_PC_1440x640_NT.jpg?imwidth=1536"
                        alt="Ưu đãi đăng ký sớm">
                    <div class="voucher-text">
                        <p>Khởi nhịp Sống mới với ưu đãi đặc quyền</p>

                        <button class="register-btn"><a href="{{ route('user.products.index') }}" class="btn-primary">Mua
                                ngay</a></button>

                    </div>
                </div>
                <div class="lbl">
                    <h1>Khởi nhịp sống mới</h1>
                    <div class="video">
                        <div class="left">
                            <figure style="width: 100%; height: 100%;" class="video--played"><video class="video-player"
                                    playsinline="" disableremoteplayback="" style="width: 100%; height: 100%;">
                                    <source
                                        src="//images.samsung.com/is/content/samsung/assets/vn/home-appliances/bespoke-home/2025-bespoke-home-n04-2-benefits-bixby-pc.mp4"
                                        type="video/mp4">
                                </video></figure>
                        </div>
                        <div class="right">
                            <h1>Điều khiển bằng giọng nói với trợ lý Bixby</h1>
                            <span>Dễ dàng điều khiển nhiều thiết bị cùng lúc bằng giọng nói với trợ lý ảo Bixby</span>
                        </div>
                    </div>



                </div>
                <div class="lbl">
                    <div class="video">
                        <div class="right">
                            <h1>Kết nối SmartThings mọi lúc mọi nơi </h1>
                            <span>Theo dõi tình trạng và điều khiển các thiết bị mọi lúc mọi nơi qua<br> SmartThings, tiết
                                kiệm điện với AI Energy. Đồng thời tất cả thiết bị<br> đều được bảo mật bởi Knox.</span>
                        </div>
                        <div class="left">
                            <figure style="width: 100%; height: 100%;" class="video--played"><video class="video-player"
                                    playsinline="" disableremoteplayback="" style="width: 100%; height: 100%;">
                                    <source
                                        src="//images.samsung.com/is/content/samsung/assets/vn/home-appliances/bespoke-home/2025-bespoke-home-n04-3-benefits-smartthings-pc.mp4"
                                        type="video/mp4">
                                </video></figure>
                        </div>

                    </div>
                </div>
                <div class="lbl">
                    <div class="video">
                        <div class="left">
                            <figure style="width: 100%; height: 100%;" class="video--played"><video class="video-player"
                                    playsinline="" disableremoteplayback="" style="width: 100%; height: 100%;">
                                    <source
                                        src="//images.samsung.com/is/content/samsung/assets/vn/home-appliances/bespoke-home/2025-bespoke-home-n04-1-benefits-ai-home-pc.mp4"
                                        type="video/mp4">
                                </video></figure>
                        </div>
                        <div class="right">
                            <h1>Quản lý nhà thông minh với AI Home</h1>
                            <span>Với tủ lạnh, bạn có thể xem thời tiết, lịch trình, đề xuất công thức nấu ăn; hay theo dõi
                                quy trình giặt &amp; nhận báo cáo về lượng điện, nước, nước giặt xả tiêu thụ trên máy giặt.
                                Bạn còn có thể điều khiển các thiết bị thông minh khác qua màn hình AI Home.</span>
                        </div>
                    </div>
                </div>
                  <div class="text_book">
                <h1>Ưu đãi đặc quyền</h1>
                 <ul class="list">
                            <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/so1.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h2>Hoàn tiền Momo 500K</h2>
                                    <p>Duy nhất 100 suất, từ 24/03 - 30/05/2025</p>
                                </div>
                              
                            </li>
                                <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/so2.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h2>Trả góp 0%</h2>
                                <p>Áp dụng cho các thiết bị<br>trị giá trên 3 triệu đồng</p>
                                </div>
                              
                                </li>
                                     <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/so3.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h2>Thu Cũ Đổi Mới</h2>
                                <p>Giảm thêm đến 10%</p>
                                </div>
                              
                                </li>
                                    <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/so4.jpg" alt="">
                                </div>
                                <div class="text">
                                    <h2>Samsung Shop App</h2>
                                  <p>Mua Sắm Mọi Nơi Cùng Samsung Shop App</p>
                                </div>
                              
                                </li>
                          
                        </ul>
            </div>
            <div class="txt" >
                <h1>Thương hiệu gia dụng AI<br>hàng đầu Thế giới & Việt Nam</h1>
                <ul class="list">
                            <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/s1.jpg" alt="">
                                </div>
                                <div class="text">
                                    <p>Thương hiệu Tủ lạnh<br>Số 1 Thế giới</p>
                                </div>
                              
                            </li>
                                <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/s2.jpg" alt="">
                                </div>
                                <div class="text">
                                <p>Thương hiệu Tủ lạnh xuất sắc<br>6 năm liên tiếp</p>
                                </div>
                              
                                </li>
                                     <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/s3.jpg" alt="">
                                </div>
                                <div class="text">
                                <p>Thương hiệu Máy giặt xuất sắc <br>3 năm liên tiếp</p>
                                </div>
                              
                                </li>
                                    <li class="item1">
                                <div class="icon">
                                    <img src="/storage/product_images/s4.jpg" alt="">
                                </div>
                                <div class="text">
                                  <p>Bảo hành động cơ<br>20 năm<br></p>
                                </div>
                              
                                </li>
                          
                        </ul>
            </div>
          
            </div>
        </div>
        </div>
    </section>
  <section class="footer__link">
        <div class="container">
            <div class="content">
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">
                            Sản Phẩm & Dịch Vụ
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="https://www.samsung.com/vn/smartphones/" target="_blank">Điện Thoại Thông Minh</a></li>
                     <li><a href="https://www.samsung.com/vn/tablets/?product1=sm-x926bzaaxxv&product2=sm-x826bzaaxxv&product3=sm-x916bzaexxv" target="_blank" >Máy Tính Bảng</a></li>

                            <li><a href="https://www.samsung.com/vn/audio-sound/?product1=sm-r630nzaaxxv&product2=sm-r530nzaaxxv&product3=sm-r400nzaaxxv" target="_blank">Thiết Bị Âm Thanh</a></li>
                            <li><a href="https://www.samsung.com/vn/watches/?product1=sm-r930nzetxxv&product2=sm-r950nzsaxxv&product3=sm-r920nztaxxv" target="_blank">Thiết Bị Đeo</a></li>
                            <li><a href="http://samsung.com/vn/apps/smart-switch/" target="_blank">Smart Switch</a></li>
                            <li><a href="https://www.samsung.com/vn/mobile-accessories/"target="_blank">Phụ Kiện</a></li>
                            <li><a href="https://www.samsung.com/vn/tvs/"target="_blank">TVs</a></li>
                            <li><a href="https://www.samsung.com/vn/lifestyle-tvs/"target="_blank">Lifestyle TVs</a></li>
                            <li><a href="https://www.samsung.com/vn/audio-devices/"target="_blank">Thiết Bị Nghe Nhìn</a></li>
                            <li><a href="https://www.samsung.com/vn/refrigerators/"target="_blank">Tủ Lạnh</a></li>
                            <li><a href="https://www.samsung.com/vn/washers-and-dryers/"target="_blank">Máy Giặt & Máy Sấy</a></li>
                            <li><a href="https://www.samsung.com/vn/air-conditioners/"target="_blank">Giải Pháp Không Khí</a></li>
                            <li><a href="https://www.samsung.com/vn/cooking-appliances/all-cooking-appliances/"target="_blank">Gia Dụng Nhà Bếp</a></li>
                            <li><a href="https://www.samsung.com/vn/monitors/"target="_blank">Màn Hình</a></li>
                        </div>
                    </ul>
                </div>

                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Mua Trực Tuyến
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="https://www.samsung.com/vn/offer/"target="_blank">Ưu Đãi Độc Quyền</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/"target="_blank">Cửa hàng trực tuyến doanh nghiệp</a></li>
                            <li><a href="https://www.samsung.com/vn/store/samsung-68/"target="_blank">Samsung 68</a></li>
                            <li><a href="https://www.samsung.com/vn/samsung-experience-store/"target="_blank">Cửa Hàng Trải Nghiệm Samsung</a></li>
                            <li><a href="https://www.samsung.com/vn/shop-faq/"target="_blank">Câu hỏi thường gặp</a></li>
                            <li><a href="https://www.samsung.com/vn/storelocator/"target="_blank">Tìm Cửa Hàng</a></li>
                            <li><a href="http://samsung.com/vn/store-pickup-and-support/"target="_blank">Điểm tư vấn và nhận hàng trực tiếp</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/samsung-care-plus/"target="_blank">Samsung Care+</a></li>
                            <li><a href="https://www.samsung.com/vn/rewards/"target="_blank">Samsung Rewards</a></li>
                            <li><a href="https://www.samsung.com/vn/explore/"target="_blank">Khám Phá</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/terms_and_conditions/"target="_blank">Điều Khoản & Điều Kiện</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/samsung-club-affiliates/"target="_blank">Samsung Club Affiliates</a></li>
                            <li><a href="https://www.samsung.com/vn/education/"target="_blank">Giáo dục</a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Chương trình đặc quyền
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="https://www.samsung.com/vn/offer/uu-dai-sinh-vien/"target="_blank">Ưu đãi sinh viên</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/corporate-epp/"target="_blank">Ưu đãi Nhân viên đối tác (EPP)</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/uu-dai-chinh-phu/"target="_blank">Ưu đãi chính phủ</a></li>
                            <li><a href="https://www.samsung.com/vn/offer/vip-mall/"target="_blank"> VIP Mall</a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Bạn Cần Hỗ Trợ?
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="samsung.com/vn/mypage/myproducts/" target="_blank">Đặt hẹn lịch sửa chữa</a></li>
                            <li><a href="https://samsung-livechat.sprinklr.com/seao/vn/index.html" class="business" target="_blank">Tư Vấn Trực Tuyến
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="https://account.samsung.com/iam/oauth2/authorize?client_id=3hf187u246&redirect_uri=https%3A%2F%2Fwww.samsung.com%2Faemapi%2Fv6%2Fdata-login%2FafterLogin.vn.json&response_type=code&scope=&state=GLB29afq8a&locale=vi-VN"class="business" target="_blank">Thư điện tử
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="https://www.samsung.com/vn/support/contact/" class="business" target="_blank">Điện Thoại </a></li>
                            <li><a href="https://www.samsung.com/vn/support/service-center/" class="business"target="_blank">Trung Tâm Bảo Hành </a></li>
                            <li><a href="https://www.samsung.com/vn/support/sign-language/" class="business"target="_blank">Ngôn ngữ ký hiệu </a></li>
                         
                        </div>
                    </ul>
                    <ul class="nav-footer">
                        <p class="toggle-menu">Tài khoản & Cộng đồng
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="https://account.samsung.com/iam/oauth2/authorize?client_id=3hf187u246&redirect_uri=https%3A%2F%2Fwww.samsung.com%2Faemapi%2Fv6%2Fdata-login%2FafterLogin.vn.json&response_type=code&scope=&state=GLBdc8y1bu&locale=vi-VN" target="_blank">Tài Khoản Của Tôi</a></li>
                            <li><a href="https://shop.samsung.com/vn/mypage/orders" class="business" target="_blank">Đơn Hàng
                                </a></li>
                            <li><a href="https://shop.samsung.com/vn/mypage/wishlist"class="business"target="_blank">Danh Sách Yêu Thích
                                </a></li>
                            <li><a href="https://www.samsung.com/vn/members/" class="business" target="_blank">Samsung Members </a></li>
                            </a></li>
                        </div>
                    </ul>
                </div>
                <div class="footer-column">
                    <ul class="nav-footer">
                        <p class="toggle-menu">Sự bền vững
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="https://www.samsung.com/vn/sustainability/environment/" target="_blank">Môi trường</a></li>
                            <li><a href="http://samsung.com/vn/sustainability/security-and-privacy/"target="_blank">Bảo mật & Quyền riêng tư</a></li>
                            <li><a href="https://www.samsung.com/vn/sustainability/accessibility/overview/"target="_blank">Trợ năng</a></li>
                            <li><a href="https://www.samsung.com/vn/sustainability/diversity-and-inclusion/"target="_blank">Đa dạng · Công bằng · Hòa nhập</a></li>
                            <li><a href="https://csr.samsung.com/en/main.do"class="business" target="_blank">Công dân Doanh nghiệp
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="https://www.samsung.com/global/sustainability/"class="business"target="_blank">Tính bền vững của Doanh nghiệp
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                        </div>
                    </ul>
                    <ul class="nav-footer">
                        <p class="toggle-menu"> Giới thiệu về chúng tôi
                            <span class="arrow down"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                    viewBox="0 -960 960 960" width="24px" fill="#1f1f1f">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                                </svg></span>
                        </p>
                        <div class="menu-content">
                            <li><a href="https://www.samsung.com/vn/about-us/company-info/"target="_blank">Thông tin về Công ty</a></li>
                            <li><a href="https://www.samsung.com/vn/about-us/business-area/"target="_blank">Lĩnh vực kinh doanh</a></li>
                            <li><a href="https://www.samsung.com/vn/about-us/brand-identity/"target="_blank"> Nhận diện thương hiệu</a></li>
                            <li><a href="https://www.samsung.com/vn/about-us/careers/"target="_blank">Nghề nghiệp</a></li>
                            <li><a href="https://www.samsung.com/global/ir/"class="business"target="_blank">Quan hệ với nhà đầu tư
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="https://news.samsung.com/vn/" class="business"target="_blank">Newsroom
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="https://www.samsung.com/vn/about-us/ethics/"target="_blank">Đạo đức </a></li>
                            <li><a href="https://design.samsung.com/global/index.html" class="business"target="_blank">Samsung Design
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const videos = document.querySelectorAll('.video-player');

            videos.forEach(video => {
                video.muted = true; // Bắt buộc để autoplay không bị chặn
                video.loop = true; // Lặp lại video
                video.playsInline = true; // Phát nội tuyến trên mobile
                video.autoplay = true; // Autoplay nếu được hỗ trợ

                // Bắt đầu phát video
                video.play().catch(error => {
                    console.warn('Autoplay bị chặn bởi trình duyệt:', error);
                });
            });
        });
    </script>


@endsection
