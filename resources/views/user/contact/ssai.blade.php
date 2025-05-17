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
                            <li><a href="#">Điện Thoại Thông Minh</a></li>
                            <li><a href="#">Máy Tính Bảng</a></li>
                            <li><a href="#">Thiết Bị Âm Thanh</a></li>
                            <li><a href="#">Thiết Bị Đeo</a></li>
                            <li><a href="#">Smart Switch</a></li>
                            <li><a href="#">Phụ Kiện</a></li>
                            <li><a href="#">TVs</a></li>
                            <li><a href="#">Lifestyle TVs</a></li>
                            <li><a href="#">Thiết Bị Nghe Nhìn</a></li>
                            <li><a href="#">Tủ Lạnh</a></li>
                            <li><a href="#">Máy Giặt & Máy Sấy</a></li>
                            <li><a href="#">Giải Pháp Không Khí</a></li>
                            <li><a href="#">Gia Dụng Nhà Bếp</a></li>
                            <li><a href="#">Màn Hình</a></li>
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
                            <li><a href="#">Ưu Đãi Độc Quyền</a></li>
                            <li><a href="#">Cửa hàng trực tuyến doanh nghiệp</a></li>
                            <li><a href="#">Samsung 68</a></li>
                            <li><a href="#">Cửa Hàng Trải Nghiệm Samsung</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                            <li><a href="#">Tìm Cửa Hàng</a></li>
                            <li><a href="#">Điểm tư vấn và nhận hàng trực tiếp</a></li>
                            <li><a href="#">Samsung Care+</a></li>
                            <li><a href="#">Samsung Rewards</a></li>
                            <li><a href="#">Khám Phá</a></li>
                            <li><a href="#">Điều Khoản & Điều Kiện</a></li>
                            <li><a href="#">Samsung Club Affiliates</a></li>
                            <li><a href="#">Giáo dục</a></li>
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
                            <li><a href="#">Ưu đãi sinh viên</a></li>
                            <li><a href="#">Ưu đãi Nhân viên đối tác (EPP)</a></li>
                            <li><a href="#">Ưu đãi chính phủ</a></li>
                            <li><a href="#"> VIP Mall</a></li>
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
                            <li><a href="#">Đặt hẹn lịch sửa chữa</a></li>
                            <li><a href="#" class="business">Tư Vấn Trực Tuyến
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#"class="business">Thư điện tử
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#" class="business">Điện Thoại </a></li>
                            <li><a href="#" class="business">Trung Tâm Bảo Hành </a></li>
                            <li><a href="#" class="business">Ngôn ngữ ký hiệu </a></li>
                            <li><a href="#" class="business">Gửi ý kiến phản hồi</a></li>
                            <li><a href="#" class="business"> Gửi thư cho Ban Giám đốc
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
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
                            <li><a href="#">Tài Khoản Của Tôi</a></li>
                            <li><a href="#" class="business">Đơn Hàng
                                </a></li>
                            <li><a href="#"class="business">Danh Sách Yêu Thích
                                </a></li>
                            <li><a href="#" class="business">Samsung Members </a></li>
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
                            <li><a href="#">Môi trường</a></li>
                            <li><a href="#">Bảo mật & Quyền riêng tư</a></li>
                            <li><a href="#">Trợ năng</a></li>
                            <li><a href="#">Đa dạng · Công bằng · Hòa nhập</a></li>
                            <li><a href="#"class="business">Công dân Doanh nghiệp
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#"class="business">Tính bền vững của Doanh nghiệp
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
                            <li><a href="#">Thông tin về Công ty</a></li>
                            <li><a href="#">Lĩnh vực kinh doanh</a></li>
                            <li><a href="#"> Nhận diện thương hiệu</a></li>
                            <li><a href="#">Nghề nghiệp</a></li>
                            <li><a href="#"class="business">Quan hệ với nhà đầu tư
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#" class="business">Newsroom
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a></li>
                            <li><a href="#">Đạo đức </a></li>
                            <li><a href="#" class="business">Samsung Design
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
