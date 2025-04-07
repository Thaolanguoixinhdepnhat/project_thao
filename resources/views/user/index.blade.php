@extends('layout.master')

@section('title', '')

@section('content')

<div class="sec_one">
    <div class="container">
        <div class="content">
            <div class="carousel main-class">
                <div class="carousel-item">
                    <video id="main-video" autoplay muted name="media">
                        <source
                            src="https://images.samsung.com/is/content/samsung/assets/vn/2501/home/HOME_P3_Main-KV_1440x640_pc_LTR.mp4"
                            type="video/mp4">
                    </video>
                    <div class="video-main_txt">
                        <h3>Thu cũ đổi mới hỗ trợ thêm 2 triệu</h3>
                        <div class="btn-group">
                            <button class="btn-outline"><span>Tìm hiểu thêm</span></button>
                            <button class="btn-primary">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2024/PC_1.jpg?imwidth=1536"
                        alt="Samsung AI TV">
                    <div class="banner-text">
                        <h2>Samsung AI TV đỉnh cao<br>
                            AI toàn năng, thăng hạng toàn diện</h2>
                        <p>Combo quà tặng AI TV lên đến 40 triệu</p>
                        <button class="banner-button">Mua ngay</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/Handraiser_PC_1440x640_NT.jpg?imwidth=1536"
                        alt="Ưu đãi đăng ký sớm">
                    <div class="voucher-text">
                        <p>Đăng ký sớm nhận voucher 1 Triệu đồng.</p>
                        <p>Duy nhất từ 12.03 - 25.03</p>
                        <button class="register-btn">Đăng ký ngay</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="banner-image"
                        src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/1440x640Notext.jpg?imwidth=2560"
                        alt="Samsung Festival">
                    <div class="sale">
                        <h1>Sale hội tưng bừng<br>Mừng đời sang trang</h1>
                        <p>Ăn mừng cột mốc bạn mới đạt được với ưu đãi<br>lên đến 50% từ
                            Samsung<br>#AnMungVoiSamSung</p>
                        <button class="btn-register">Mua ngay</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/f1-web-kv-1440x640.jpg?imwidth=1536"
                        alt="E-Voucher">
                    <div class="voucher">
                        <h1>Săn E-Voucher 500k<br>Chỉ với 100k</h1>
                        <p>Áp dụng khi mua Galaxy A56 | A36</p>
                        <button class="btn-register">Mua ngay</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<section class="sec-product">
    <div class="container">
        <div class="content">
            <div class="content-head">
                <div class="text_block">
                    <h2>Sản Phẩm Nổi Bật</h2>
                </div>
                <div class="content-list__common">
                    <ul class="list">
                        <li class="item">
                            <button role="tab" class="tab__item-title active">
                                Ưu đãi<span class="tab__item-line"></span>
                            </button>
                        </li>
                        <li class="item">
                            <button role="tab" class="tab__item-title">
                                Điện Thoại<span class="tab__item-line"></span>
                            </button>
                        </li>
                        <li class="item">
                            <button role="tab" class="tab__item-title">
                                TV&AV<span class="tab__item-line"></span>
                            </button>
                        </li>
                        <li class="item">
                            <button role="tab" class="tab__item-title">
                                Gia Dụng<span class="tab__item-line"></span>
                            </button>
                        </li>
                        <li class="item">
                            <button role="tab" class="tab__item-title">
                                Màn hình-Bộ nhớ<span class="tab__item-line"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="content-body content-slider">
                <div class="item">
                    <div class="left-column">
                        <div class="image">
                            <span class="badge-icon">Mới</span>
                            <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/684x684_2.jpg?$684_684_JPG$"
                                alt="Ưu đãi">
                            <div class="text-image">
                                <span class="title">Săn E-Voucher 3TRIỆU chỉ với 100K.</span>
                                <span class="sub-text">Áp dụng cho sản phẩm GIA DỤNG AI MỚI 2025</span>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/TabS10_PC_0228.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/TabS10_MO_0228.jpg?$296_352_JPG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/TabS10_PC_0228.jpg?$330_330_JPG$">

                                <div class="txt-image">
                                    <span>Galaxy Tab 10 Ultra<br>ưu đãi 4TR</span>
                                </div>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_S25plus_PC_0310.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_S25plus_MO_0310.jpg?$296_352_JPG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_S25plus_PC_0310.jpg?$330_330_JPG$">
                            </div>
                            <div class="txt-image">
                                <span>Galaxy S25 |S25+<br>ưu đài 1 triệu</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_RS90F65D2FSV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_RS90F65D2FSV.png?$296_352_PNG$"
                                    alt="Ưu đãi 11%. Nhập AIDEAL giảm thêm 10%"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_RS90F65D2FSV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Ưu đãi mở bán giá chỉ từ 41.5TR*</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_QA65QE1DAKXXV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_QA65QE1DAKXXV.png?$296_352_PNG$"
                                    alt="av qe1d 65inch feb 2025"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_QA65QE1DAKXXV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Mua kèm Galaxy Buds3 giảm 10% trên combo</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="left-column">
                        <div class="image">
                            <span class="badge-icon">Mới</span>
                            <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_Ultra_PC.jpg?$684_684_JPG$"
                                data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_Ultra_MO.jpg?$624_352_JPG$"
                                alt="Galaxy S25 Ultra"
                                src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_Ultra_PC.jpg?$684_684_JPG$">
                            <div class="text-image">
                                <span class="title">Galaxy S25 Ultra 1TB<br>Màu Xanh Titan</span>
                                <span class="sub-text">Ưu đãi 5,8 triệu</span>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S24_Ultra_Ex_PC_0228.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S24_Ultra_Ex_MO_0228.jpg?$296_352_JPG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S24_Ultra_Ex_PC_0228.jpg?$330_330_JPG$">
                                <div class="txt-image">
                                    <span>Galaxy S24 Ultra 512GB<br>Ưu đãi đậm 10,5TR</span>
                                </div>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC-A06.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO-A062.jpg?$296_352_JPG$"
                                    alt="Galaxy A06 5G"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC-A06.jpg?$330_330_JPG$">
                            </div>
                            <div class="txt-image">
                                <span>Galaxy A06 5G Mới <br>Tặng củ sạc 25W</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/M35_Black_PC.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/M35_Black_MO.jpg?$296_352_JPG$"
                                    alt="Galaxy M35"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/M35_Black_PC.jpg?$330_330_JPG$">
                            </div>
                            <div class="txt-image">
                                <span>Galaxy M35<br>Tặng Galaxy Fit3</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/A16_PC.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/A16_MO.jpg?$296_352_JPG$"
                                    alt="Galaxy A16 Ưu đãi 800k, tặng sạc 25W"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/A16_PC.jpg?$330_330_JPG$">
                            </div>
                            <div class="txt-image">
                                <span>Galaxy A16<br>Ưu đãi 800k, tặng sạc 25W</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="left-column">
                        <div class="image">
                            <span class="badge-icon">Mới</span>
                            <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Big_Combo_QE1DBuds3.jpg?$684_684_JPG$"
                                data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_Big_ComboQE1DBuds3.jpg?$624_352_JPG$"
                                alt="55 Inch QLED QE1D 4K Smart TV"
                                src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Big_Combo_QE1DBuds3.jpg?$684_684_JPG$">
                            <div class="text-image">
                                <span class="title">Buds3 giá chỉ từ 3,2TR <br>khi mua kèm Tivi</span>
                                <span class="sub-text">55 Inch QLED QE1D 4K Smart TV</span>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2024/PC_Small_UA50DU7000KXXV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA50DU7000KXXV_MO.png?$296_352_PNG$"
                                    alt="dec small top left ua50du7000kxxv"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2024/PC_Small_UA50DU7000KXXV.png?$330_330_PNG$">
                                <div class="txt-image">
                                    <span>Mua kèm Buds 3 giảm 10% trên<br>combo</span>
                                </div>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA98S90DAKXXV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_Small_QA98S90DAKXXV.png?$296_352_PNG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA98S90DAKXXV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>TV S90D 65 Inch <br>Tặng miễn phí loa</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA75LS03DAKXXV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_Small_QA75LS03DAKXXV.png?$296_352_PNG$"
                                    alt="dec small bottom left qa65ls03dakxxv"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_Small_QA75LS03DAKXXV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>The Frame 75 Inch<br>Tặng khung viền</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA98DU9000KXXV-PC.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA98DU9000KXXV-MO.jpg?$296_352_JPG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/UA98DU9000KXXV-PC.jpg?$330_330_JPG$">
                            </div>
                            <div class="txt-image">
                                <span>TV DU9000 98 Inch<br>Tặng miễn phí loa</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="left-column">
                        <div class="image">
                            <span class="badge-icon">Mới</span>
                            <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/684x684_2.jpg?$684_684_JPG$"
                                alt="Ưu đãi">
                            <div class="text-image">
                                <span class="title">Săn E-Voucher 3TRIỆU chỉ với 100K.</span>
                                <span class="sub-text">Áp dụng cho sản phẩm GIA DỤNG AI MỚI 2025</span>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_DF24CB9900CRSV1.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_DF24CB9900CRSV1.png?$296_352_PNG$"
                                    alt="Tủ chăm sóc quần áo ưu đãi ngay 18%"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_DF24CB9900CRSV1.png?$330_330_PNG$">
                                <div class="txt-image">
                                    <span>Tủ chăm sóc quần áo ưu đãi ngay 18%</span>
                                </div>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_RF48A4010M9_SV_.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_RF48A4010M9_SV_.png?$296_352_PNG$"
                                    alt="Chỉ từ 17TR khi sử dụng E-voucher"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_RF48A4010M9_SV_.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Chỉ từ 22TR khi sử dụng E-Voucher</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_WA80F19B9BSV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_WA80F19B9BSV.png?$296_352_PNG$"
                                    alt="Ưu đãi mở bán nhận ngay Galaxy Fit3"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_WA80F19B9BSV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Ưu đãi mở bán nhận ngay Galaxy Fit3</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_F-AR09ASHZAW21.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_F-AR09ASHZAW21.png?$296_352_PNG$"
                                    alt="Chỉ từ 11TR khi sử dụng E-voucher"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_F-AR09ASHZAW21.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Chỉ từ 11TR khi sử dụng E-voucher</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="left-column">
                        <div class="image">
                            <span class="badge-icon">Mới</span>
                            <img src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/684x684_2.jpg?$684_684_JPG$"
                                alt="Ưu đãi">
                            <div class="text-image">
                                <span class="title">Săn E-Voucher 3TRIỆU chỉ với 100K.</span>
                                <span class="sub-text">Áp dụng cho sản phẩm GIA DỤNG AI MỚI 2025</span>
                                <button class="btn-register1">Mua ngay</button>
                            </div>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon_red">Sale</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/TabS10_PC_0228.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/TabS10_MO_0228.jpg?$296_352_JPG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/TabS10_PC_0228.jpg?$330_330_JPG$">

                                <div class="txt-image">
                                    <span>Galaxy Tab 10 Ultra<br>ưu đãi 4TR</span>
                                </div>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_S25plus_PC_0310.jpg?$330_330_JPG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_S25plus_MO_0310.jpg?$296_352_JPG$"
                                    alt=""
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/S25_S25plus_PC_0310.jpg?$330_330_JPG$">
                            </div>
                            <div class="txt-image">
                                <span>Galaxy S25 |S25+<br>ưu đài 1 triệu</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_RS90F65D2FSV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_RS90F65D2FSV.png?$296_352_PNG$"
                                    alt="Ưu đãi 11%. Nhập AIDEAL giảm thêm 10%"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_RS90F65D2FSV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Ưu đãi mở bán giá chỉ từ 41.5TR*</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                        <div class="item">
                            <div class="image">
                                <span class="badge-icon">Mới</span>
                                <img class="image__main responsive-img image--loaded" data-aem-asset-id=""
                                    data-desktop-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_QA65QE1DAKXXV.png?$330_330_PNG$"
                                    data-mobile-src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/MO_QA65QE1DAKXXV.png?$296_352_PNG$"
                                    alt="av qe1d 65inch feb 2025"
                                    src="//images.samsung.com/is/image/samsung/assets/vn/home/2025/PC_QA65QE1DAKXXV.png?$330_330_PNG$">
                            </div>
                            <div class="txt-image">
                                <span>Mua kèm Galaxy Buds3 giảm 10% trên combo</span>
                            </div>
                            <button class="btn-register1">Mua ngay</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="sec-two">
    <div class="container">
        <div class="content">
            <div class="content-head">
                <div class="text_block">
                    <h2>Gợi ý dành cho bạn</h2>
                
                
                </div>
            </div>
        </div>
    </div>

</section>

<div class="product">
    <div class="container">
        <div class="content">
            <div class="carousel-slider">
                @foreach ($products as $item)
                    <div class="item">
                        <div class="product-image-wrap">
                            @if ($item->productImages->isNotEmpty())
                                <img src="{{ asset('storage/' . $item->productImages->first()->product_image) }}" 
                                     alt="load" class="active">
                            @endif
                        </div>
                        <div class="product-info">
                            <p class="product-name active">{{ $item->product_name }}</p>
                        </div>
                        <div class="my-recommended-product__card--color" style="height: 47px;"></div>
                        <div class="product-options">
                            @foreach ($item->productClasses as $index => $class)
                                <input type="radio" id="option-{{ $item->id }}-{{ $class->size }}" 
                                       name="product-size-{{ $item->id }}" 
                                       value="{{ $class->size }}" 
                                       data-price="{{ $class->price }}"
                                       data-product-class-id="{{ $class->id }}" 
                                       data-product-image-id="{{ $item->productImages->first()->id }}" 
                                       {{ $index === 0 ? 'checked' : '' }}>
                                <label for="option-{{ $item->id }}-{{ $class->size }}" class="option-label">{{ $class->size }}</label>
                            @endforeach
                        </div>
            
                        <div class="my-recommended-product__card--color" style="height: 30px;"></div>
            
                        <div class="product-price">
                            <span class="current-price" id="current-price-{{ $item->id }}">
                                {{ number_format($item->productClasses[0]->price, 0, ',', '.') }} VND
                            </span>
                        </div>
            
                        <div class="my-recommended-product__card-cta">
                            <form action="{{ route('cart.add') }}" method="POST" id="form-{{ $item->id }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                <input type="hidden" name="product_class_id" value="{{ $item->productClasses[0]->id }}" class="product-class-id">
                                <input type="hidden" name="product_images_id" value="{{  $item->productImages->first()->id }}">
                                <button type="submit" class="card-cta">Mua ngay</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Khởi tạo slider
        $('.carousel-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            arrows: true,
            autoplay: false,
            autoplaySpeed: 3000,
        });

    });
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("input[type='radio']").forEach(radio => {
        radio.addEventListener("change", function () {
            let productId = this.id.split('-')[1]; // Get product ID from radio button ID
            let price = this.dataset.price; // Get price from data-price attribute
            let productClassId = this.dataset.productClassId; // Get product_class_id from data-product-class-id
            let productImageId = this.dataset.productImageId; // Get product_image_id from data-product-image-id

            // Update the displayed price
            document.getElementById(`current-price-${productId}`).innerText = 
                new Intl.NumberFormat('vi-VN').format(price) + " VND";
            
            // Update the product_class_id in the corresponding form
            let form = document.getElementById(`form-${productId}`);
            form.querySelector('.product-class-id').value = productClassId;
        });
    });
});
</script>
<script>
    $(document).ready(function() {
        $('.content-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,

        });

        $('.tab__item-title').on('click', function() {
            let index = $(this).parent().index(); // Lấy vị trí của tab
            $('.tab__item-title').removeClass('active'); // Bỏ class active tất cả
            $(this).addClass('active'); // Thêm active cho tab được click

            $('.content-slider').slick('slickGoTo', index); // Chuyển đến slide tương ứng
        });
    });
</script>

<script>
    $(document).ready(function() {
        var $carousel = $('.main-class');
        var defaultDuration = 5000;
        var videoDuration = defaultDuration;
        var isVideoPlaying = false;
        var $currentVideo = null;
        var interval;
        var isUserClicked = false;
        $carousel.slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: videoDuration,
            dots: true,
            pauseOnHover: false,
            arrows: true,
            prevArrow: '<button class="prev slick-arrow" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg></button>',
            nextArrow: '<button class="next slick-arrow" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg></button>'
        });

        function updateProgressBar(duration) {
            $('.slick-dots li::after').css({
                width: "0%",
                transition: "none"
            });

            setTimeout(function() {
                $('.slick-dots li.slick-active::after').css({
                    width: "100%",
                    transition: duration + "ms linear"
                });
            }, 10);
        }
        $carousel.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var $nextSlide = $(slick.$slides[nextSlide]);
            var $video = $nextSlide.find('video');

            clearInterval(interval);

            if ($video.length > 0) {
                isVideoPlaying = true;
                $currentVideo = $video[0];
                $carousel.slick('slickPause');
                $currentVideo.play().then(() => {
                    videoDuration = $currentVideo.duration * 1000;
                    updateProgressBar(videoDuration);
                }).catch(error => {
                    console.error("Không thể tự động phát video:", error);
                    isVideoPlaying = false;
                    videoDuration = defaultDuration;
                    updateProgressBar(videoDuration);
                    if (!isUserClicked) {
                        $carousel.slick('slickPlay');
                    }
                });
                $currentVideo.onended = function() {
                    isVideoPlaying = false;
                    isUserClicked = false;
                    $carousel.slick('slickNext');
                    $carousel.slick('slickPlay');
                };
            } else {
                isVideoPlaying = false;
                videoDuration = defaultDuration;
                updateProgressBar(videoDuration);
                if (!isUserClicked) {
                    $carousel.slick('slickPlay');
                }
            }
        });
        $carousel.on('afterChange', function(event, slick, currentSlide) {
            if (isVideoPlaying && $currentVideo) {
                interval = setInterval(function() {
                    var percent = ($currentVideo.currentTime / $currentVideo.duration) * 100;
                    $('.slick-dots li.slick-active::after').css("width", percent + "%");
                }, 500);
            } else {
                updateProgressBar(videoDuration);
            }
        });

        // 📌 **Xử lý click vào thanh slick-dots để chạy tiếp tục ảnh tiếp theo**
        $('.slick-dots li').on('click', function() {
            var index = $(this).index(); // Lấy index của ảnh được click
            isUserClicked = true; // Đánh dấu người dùng đã click

            $carousel.slick('slickGoTo', index, true); // Chuyển ngay lập tức đến ảnh được click

            // Sau khi ảnh/video chạy xong, tiếp tục autoplay từ ảnh tiếp theo
            setTimeout(function() {
                isUserClicked = false; // Bỏ trạng thái click sau khi ảnh chạy xong
                $carousel.slick('slickNext'); // Chuyển sang ảnh kế tiếp
                $carousel.slick('slickPlay'); // Tiếp tục autoplay chạy liên tục
            }, videoDuration);
        });

        // Cập nhật progress bar lần đầu
        updateProgressBar(videoDuration);
    });
</script>

@endsection