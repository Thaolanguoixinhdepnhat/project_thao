@extends('layout.master')

@section('title', 'sane')

@section('content')
    <section class="sane">
        <div class="container">
            <div class="content">
                <div class="san">
                    <figure class="video-container">
                        <video class="video-player" playsinline autoplay loop muted disableremoteplayback>
                            <source
                                src="//images.samsung.com/is/content/samsung/assets/vn/offer/galaxy-a56-a36-5g/kv-banner/HOME_Galaxy-A56_A36_Main-KV_1440x640_pc_LTR.mp4"
                                type="video/mp4">
                        </video>

                        <div class="video-text-overlay">
                            <h2>Galaxy A56 | A36 5G</h2>
                            <p>Khám phá ngay ưu đãi mua Galaxy A56 | A36 5G mới</p>
                        </div>
                    </figure>
                    <div class="text_book">
                        <div class="txt">
                            <h2>Ưu đãi độc quyền</h2>
                        </div>
                        <div class="group-item">
                            <div class="item">
                                <div class="left">
                                    <img src="/storage/product_images/s11.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>E-voucher ưu đãi 500k</h3>
                                    <span>
                                        Mua thêm E-Voucher chỉ với 100k, giảm ngay thêm 500k khi mua Galaxy A56 | A36
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="left">
                                    <img src="/storage/product_images/s12.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Thu cũ đổi mới</h3>
                                    <span>
                                        Thu cũ đổi mới tặng ngay Samsung <br>Care+ 1 năm
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="left">
                                    <img src="/storage/product_images/s13.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Ưu đãi khi mua kèm</h3>
                                    <span>
                                        Giảm 3 triệu khi mua kèm Galaxy <br>Watch Ultra và Watch7. Giảm 1,7 triệu<br> khi
                                        mua kèm Galaxy Buds3 Pro và 1,2 triệu khi mua kèm Galaxy Buds 3
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="left">
                                    <img src="/storage/product_images/s14.jpg" alt="">
                                </div>
                                <div class="right">
                                    <h3>Ưu đãi khi mua kèm</h3>
                                    <span>
                                        Giảm 50% khi mua kèm củ sạc 45W hoặc mua kèm củ sạc 25W với chỉ 149k
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                      <div class="carousel-item">
                      <img src="/storage/product_images/1440x640_PC-Notext.jpg" alt="">
                     
                    <div class="voucher-text">
                        <h2>Săn E-voucher 500k với<br> chỉ 100k</h2>
                        <p>Áp dụng khi mua Galaxy A56 | A36 5G mới</p>

                        <button class="register-btn"><a href="{{ route('user.products.index') }}" class="btn-primary">Mua
                                ngay</a></button>

                    </div>
                    
                    
                </div>
                    <div class="carousel-item1">
                      <img src="/storage/product_images/vn-feature-filters-just-for-you-545212106.jpg" alt="">
                     
                    <div class="voucher-text">
                        <h2>Bộ lọc màu mang đậm <br>dấu ấn cá nhân</h2>
                        <p>Thỏa sức sáng tạo các bộ lọc màu đậm dấu ấn cá nhân và phong cách nghệ<br> thuật riêng biệt.

</p>

                    

                    </div>
                    
                </div>
                   <div class="carousel-item2">
                      <img src="/storage/product_images/vn-feature-turn-photos-into-masterpieces-545212062.jpg" alt="">
                     
                    <div class="voucher-text">
                        <h2>Biến mọi ảnh chụp<br> thành tuyệt tác của<br> riêng bạn</h2>
                        <p>Tính năng Object Eraser tự động nhận diện và gợi ý xóa các đối tượng thừa<br> trong bức ảnh, giúp tạo ra bức ảnh hoàn hảo và ưng ý nhất.

</p>

                    

                    </div>
                    
                </div>

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
        window.addEventListener('DOMContentLoaded', function() {
            const video = document.querySelector('.video-player');
            if (video) {
                video.muted = true;
                video.play().catch(error => {
                    console.log("Không thể tự động phát video:", error);
                });
            }
        });
    </script>


@endsection
