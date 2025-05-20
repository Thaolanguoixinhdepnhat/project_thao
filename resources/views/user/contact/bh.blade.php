@extends('layout.master')

@section('title', 'Thông tin bảo hành')

@section('content')
    <div class="bh">
        <div class="container">
            <div class="content">
                <div class="carousel-item">
                    <img src="/storage/product_images/bh12.jpg" alt="load,...">
                    <div class="voucher-text">
                        <h2>Trung tâm bảo hành Samsung</h2>
                        <p>Tất cả trung tâm bảo hành ủy quyền Samsung trên toàn quốc đều được đào tạo và chỉ sử dụng linh
                            kiện chính hãng Samsung trong mọi hoạt động<br> sửa chữa.</p>
                        <div class="btn">
                            <button class="btn-primary"> <a class="business" href="{{ route('contact.dhlsc') }}">Đặt lịch sửa
                                    chữa
                                    <i class="fa-solid fa-arrow-up-long"></i>
                                </a><button>
                                    <button class="btn-primary">Giao nhận tận nơi(điện thoại )
                                        <button>
                        </div>

                    </div>
                </div>
                <div class="text_book">
                    <h1>Dịch vụ bảo hành ủy quyền</h1>
                </div>
                <div class="lbl">
                    <div class="video">
                        <div class="left">
                            <img src="/storage/product_images/Screenshot 2025-05-20 090407.png" alt="load,...">
                        </div>
                        <div class="right">
                            <h1>Thiết bị di động</h1>
                            <span>Tất cả sản phẩm di động sẽ được bảo hành tại trung tâm bảo hành Samsung trên toàn quốc<br>
                                * Vui lòng lưu ý, bạn nên liên hệ với Trung tâm Bảo Hành để đảm bảo rằng sản phẩm của bạn có
                                thể được sửa chữa tại địa điểm đó</span>
                            <span>Để đảm bảo an toàn thông tin cá nhân, vui lòng đừng quên kích hoạt Chế độ bảo trì trước
                                khi gửi thiết bị của bạn để sửa chữa. Khi Chế độ bảo trì được kích hoạt sẽ hạn chế việc truy
                                cập thông tin cá nhân trên thiết bị.</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="lbl">
                    <div class="video">
                        <div class="right">
                            <h1>TV</h1>
                            <span>Bảo hành tại nhà khách hàng cho tất cả sản phẩm TV</span>
                        </div>
                        <div class="left">
                            <img src="/storage/product_images/Screenshot 2025-05-20090455.png" alt="load,...">
                        </div>
                    </div>
                </div>
                <div class="text_book">
                    <h1>Tìm Trung tâm bảo hành</h1>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.732191163401!2d105.83762737585854!3d21.003859688636287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab75f8ff5697%3A0xff65d55dbd1be59!2zOSDEkMawxqFuZyBEdXkgQW5oLCBLaW0gTGnDqm4sIMSQw7RuZyDEkMO0LCBIw6AgTuG7mWkgMTAwMDAw!5e0!3m2!1svi!2s!4v1716200620161!5m2!1svi!2s"
                    width="100%" height="400" style="border:0; border-radius: 8px;margin: 0 auto;
    width: 80%;  margin-bottom: 5rem;"  
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
             


 <div class="contac-box">
                  <h2>Thông tin liên hệ</h2>
                        <div class="box">
                        <div class="group-box">
                              <div class="txt">
                                    <h2>Ứng Dụng Samsung Members</h2>
                              </div>
                              <div class="lbl">
                                    <span>Một ứng dụng chứa mọi giải đáp liên quan đến sản phẩm Samsung của bạn</span>
                              </div>
                               <div class="btn">
                                     {{-- <button  type="submit" class="btn_submit">Chat qua Zalo</button> --}}
                                     <a href="{{ route('contact.tvtt') }}">
                                          <button type="button" class="btn_submit">Tìm hiểu thêm</button>
                                    </a>

                              </div>
                        </div>
                        <div class="box">
                        <div class="group-box">
                              <div class="txt">
                                    <h2>Hỗ trợ trực tuyến</h2>
                              </div>
                              <div class="lbl">
                                    <span>Bạn cần trợ giúp? Hãy liên hệ với chúng tôi qua kênh Tư Vấn Trực Tuyến, Thư Điện Tử hoặc các kênh khác</span>
                              </div>
                               <div class="btn">
                                     {{-- <button  type="submit" class="btn_submit">Chat qua Zalo</button> --}}
                                    <a href="{{ route('contact.tvtt') }}">
                                          <button type="button" class="btn_submit">Chat qua ứng dụng zalo</button>
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

    @endsection
