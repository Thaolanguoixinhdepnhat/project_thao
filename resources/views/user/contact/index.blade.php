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
                        </div>
                </div>
            </div>
        </div>
    </section>



@endsection
