@extends('layout.master')

@section('title', 'Liên hệ')

@section('content')
    <section class="contact">
        <div class="container">
            <div class="content">
                <div class="contac-font">
                    <img src="/storage/product_images/Contact_Us_KV_1440x640.jpg" alt="load,...">
                    <h2>Samsung sẵn sàng hỗ trợ<br> bạn!</h2>
                </div>
                <div class="contac-box">
                  <h2>Hỗ Trợ Trực Tuyến</h2>
                        <div class="box">
                        <div class="group-box">
                              <div class="txt">
                                    <h2>Tư Vấn Trực Tuyến</h2>
                              </div>
                              <div class="lbl">
                                    <span>Miễn phí, Hoạt động 24/7</span>
                              </div>
                               <div class="btn">
                                     {{-- <button  type="submit" class="btn_submit">Chat qua Zalo</button> --}}
                                     <a href="{{ route('contact.tvtt') }}">
                                          <button type="button" class="btn_submit">Chat qua Zalo</button>
                                    </a>

                              </div>
                        </div>
                        <div class="box">
                        <div class="group-box">
                              <div class="txt">
                                    <h2>Đặt Hẹn Lịch Sửa Chữa</h2>
                              </div>
                              <div class="lbl">
                                    <span>Ưu tiên phục vụ, Tiết kiệm thời gian của bạn</span>
                              </div>
                               <div class="btn">
                                     {{-- <button  type="submit" class="btn_submit">Chat qua Zalo</button> --}}
                                     <a href="{{ route('contact.dhlsc') }}">
                                          <button type="button" class="btn_submit">Bắt đầu </button>
                                    </a>

                              </div>
                        </div>
                        
                        </div>
                          <div class="box">
                        <div class="group-box">
                              <div class="txt">
                                    <h2>Cửa Hàng Trực Tuyến</h2>
                              </div>
                              <div class="lbl">
                                    <span>Tận hưởng chính sách giao hàng miễn phí và bảo hành chính hãng</span>
                              </div>
                               <div class="btn">
                                     {{-- <button  type="submit" class="btn_submit">Chat qua Zalo</button> --}}
                                        <a href="{{ route('home') }}">
                                          <button type="button" class="btn_submit">Bắt đầu </button>
                                    </a>

                              </div>
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
<style>
     .mb-4{
    padding-left: 3rem !important;
    display: flex;
    font-size: 2rem !important;
    gap: 1rem;
    a{
        color:black;
    text-decoration: none;
    }
    }
    </style>
  @php
    $breadcrumbs = [
        ['label' => 'Trang chủ', 'url' => route('home')],
        ['label' => 'Liên hệ', 'url' => route('contact.index')],
    ];
@endphp
@endsection
