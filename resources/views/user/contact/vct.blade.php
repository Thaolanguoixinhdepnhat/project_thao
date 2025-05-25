@extends('layout.master')

@section('title', 'Về chúng tôi ')

@section('content')
<style>
             .d-flex {
  gap: 1rem;
}
.gap-3 {
    
    margin: 0 auto;
}
.d-flex a.btn {
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  
  color: inherit;
  font-size: initial; 

  i {
    font-size: 1.5rem;
    transition: color 0.3s ease, font-size 0.3s ease;
  }

  &:hover {
  color: #0d6efd; 
 background-color: #c0c0c0;
  text-decoration: none;
  }

  &:hover i {
    font-size: 1.75rem;  
 
  }
}
    </style>
    <div class="vct">
        <div class="container">
            <div class="content">
                <div class="carousel-item">
                       <img src="/storage/product_images/Contact_Us_KV_1440x640.jpg" alt="load,...">
                  
                    <div class="voucher-text">
                        <h2>Về chúng tôi</h2>
                        <p>Tất cả những sản phẩm của chúng tôi đều là hàng uy tín chất lượng cao .Lỗi 1 đổi 1 trong vòng 1
                            tháng</p>
                    </div>
                    <div class="mask">

                    </div>
                </div>
                <div class="hang2">
		<div class="cot1">
			<p>Samsung là một trong những tập đoàn đa quốc gia hàng đầu thế giới có trụ sở chính tại Seoul, Hàn Quốc. Được thành lập vào năm 1938 bởi ông Lee Byung-chul, Samsung bắt đầu là một công ty thương mại nhỏ, nhưng đã không ngừng phát triển và trở thành một trong những biểu tượng công nghệ toàn cầu, nổi bật với những đóng góp vượt trội trong lĩnh vực điện tử, công nghệ thông tin, sản xuất chip, điện thoại di động và thiết bị gia dụng.</p>
            <h2>Tầm Nhìn & Sứ Mệnh</h2>
			<p>Samsung luôn theo đuổi sứ mệnh “Inspire the World, Create the Future” (Truyền cảm hứng cho thế giới, sáng tạo tương lai). Với triết lý tập trung vào sự đổi mới công nghệ và tinh thần phục vụ cộng đồng, Samsung cam kết mang lại những sản phẩm, dịch vụ và giải pháp thông minh góp phần nâng cao chất lượng cuộc sống và kiến tạo một tương lai bền vững.</p>
			<h2>Các Lĩnh Vực Hoạt Động Chính</h2>
            <p>
               Điện tử tiêu dùng: Samsung là nhà sản xuất TV số 1 thế giới trong nhiều năm liên tiếp, đồng thời dẫn đầu thị trường điện thoại thông minh với dòng sản phẩm Galaxy nổi tiếng.
            </p>
            <p>Thiết bị gia dụng: Tủ lạnh, máy giặt, điều hòa Samsung nổi bật với thiết kế hiện đại, tính năng thông minh và tiết kiệm năng lượng.</p>
            <p>Công nghệ bán dẫn: Là nhà cung cấp hàng đầu thế giới về chip nhớ, bộ xử lý và các linh kiện điện tử tiên tiến.</p>
            <p>Giải pháp công nghệ: Cung cấp màn hình hiển thị, thiết bị mạng, giải pháp doanh nghiệp, nhà thông minh và nhiều hơn thế nữa.</p>
			        
                                   <figure style="width: 100%; height: 100%;" class="video--played"><video class="video-player"
                                    playsinline="" disableremoteplayback="" style="width: 100%; height: 100%;">
                                    <source
                                        src="//images.samsung.com/is/content/samsung/assets/vn/home-appliances/bespoke-home/2025-bespoke-home-n04-3-benefits-smartthings-pc.mp4"
                                        type="video/mp4">
                                </video></figure>
			<p>Samsung không chỉ tập trung vào kinh doanh mà còn đặc biệt quan tâm đến trách nhiệm xã hội. Thông qua các chương trình như Samsung Hope for Children, Samsung Innovation Campus, và các sáng kiến bảo vệ môi trường, tập đoàn nỗ lực đóng góp cho sự phát triển bền vững của xã hội và hành tinh.</p>
			<p>Samsung không đơn thuần là một tập đoàn công nghệ, mà còn là một biểu tượng của sự đổi mới, sáng tạo và cam kết không ngừng nâng cao cuộc sống con người. Với tinh thần "dẫn đầu để phụng sự", Samsung ngày càng khẳng định vị thế của mình trên bản đồ công nghệ toàn cầu.</p>
          
                         <!-- Bootstrap CSS -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                    <!-- Font Awesome -->
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

                    <div class="d-flex gap-3 justify-content-start p-3">
                    <a href="https://www.facebook.com/?locale=vi_VN" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/i/flow/login" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://mail.google.com/mail/u/0/#inbox" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://www.pinterest.com/" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="btn btn-outline-dark rounded-circle position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>

                    <!-- Bootstrap JS + Popper (for tooltips) -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                    <!-- Init tooltip -->
                    <script>
                    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el))
                    </script>
           
		</div>
		<div class="cot2">
			<div>
			       <figure style="width: 100%; height: 100%;" class="video--played"><video class="video-player"
                                    playsinline="" disableremoteplayback="" style="width: 100%; height: 100%;">
                                    <source
                                        src="//images.samsung.com/is/content/samsung/assets/vn/home-appliances/bespoke-home/2025-bespoke-home-n04-1-benefits-ai-home-pc.mp4"
                                        type="video/mp4">
                                </video></figure>
			</div>
			<div>
				<div>
					<p>SẢN PHẨM MỚI - VOUCHER</p>
				</div>
				<div>
					 <img  src="/storage/product_images/glxs25sss.jpg" alt="Ảnh nền">
					<span>Sau bao tháng ngày chờ đợi, cuối cùng Samsung cũng chính thức ra mắt siêu phẩm Galaxy S25 – chiếc smartphone cao cấp hội tụ tinh hoa công nghệ hiện đại, thiết kế đột phá và hiệu năng vượt trội.</span>
				</div>
				<div>
					   <img src="/storage/product_images/sl1.jpg" alt="Ảnh nền">
					<span>Ăn mừng cột mốc bạn mới đạt được với ưu đãi lên đến 50% từ
                                Samsung</span>
				</div>
				<div>
					<img src="/storage/product_images/vn-feature-filters-just-for-you-545212106.jpg" alt="">
					<span>Thỏa sức sáng tạo các bộ lọc màu đậm dấu ấn cá nhân và phong cách nghệ thuật riêng biệt.</span>
				</div>
			</div>
			<div>
				<p>CHUYÊN MỤC BÀI VIẾT</p>
				<ul>
					<li><a href="">Chưa được phân loại (1)</a></li>
					<li><a href="">Mua sắm (3)</a></li>
					<li><a href="">Tin tức (4)</a></li>
				</ul>
			</div>
		</div>
	</div>





            </div>
        </div>
    </div>



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
