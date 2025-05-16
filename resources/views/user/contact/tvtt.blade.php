
@extends('layout.master')

@section('title', 'Liên hệ zalo')

@section('content')
<div class="zalo-oa">
  <div class="zalo-header">
  <div class="zalo-header_left">
    <div class="img">
     <img src="https://s120-ava-talk.zadn.vn/5/4/c/c/5/120/4df50dc6f76c1b3e4be9067d3cee6c8e.jpg" alt="Samsung" class="logo">
    <div class="info">
      <h1>Samsung Vietnam <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24"><path fill="url(#a)" d="M23.236 10.913c.67.615.67 1.64 0 2.255l-.461.368a1.486 1.486 0 0 0-.42 1.722l.252.533c.335.82-.126 1.763-1.006 2.01l-.587.163a1.541 1.541 0 0 0-1.132 1.353l-.042.574c-.042.902-.88 1.558-1.803 1.394l-.587-.123a1.534 1.534 0 0 0-1.593.738l-.251.574c-.462.779-1.51 1.025-2.223.492l-.503-.328a1.606 1.606 0 0 0-1.802 0l-.503.328c-.755.533-1.803.287-2.223-.492l-.293-.533c-.293-.574-.964-.861-1.593-.78l-.587.083c-.922.164-1.761-.492-1.803-1.394l-.042-.574c-.042-.656-.461-1.189-1.09-1.353l-.587-.164c-.88-.246-1.341-1.189-1.006-2.009l.251-.533c.252-.574.084-1.27-.377-1.722l-.461-.41a1.515 1.515 0 0 1 0-2.254l.461-.37c.503-.41.671-1.106.42-1.721l-.252-.533c-.336-.82.126-1.763 1.006-2.01l.587-.163a1.541 1.541 0 0 0 1.132-1.353l.042-.574c.042-.902.88-1.558 1.803-1.394l.587.123c.629.123 1.3-.205 1.593-.738l.293-.533a1.51 1.51 0 0 1 2.222-.533l.504.328a1.606 1.606 0 0 0 1.802 0l.503-.328c.713-.492 1.761-.287 2.18.533l.294.533c.293.574.964.861 1.593.78l.587-.083c.923-.164 1.761.492 1.803 1.394l.042.574c.042.656.461 1.189 1.09 1.353l.587.164c.88.246 1.341 1.189 1.006 2.009l-.252.533c-.251.574-.083 1.27.378 1.722l.461.369Zm-5.786-1.19-2.054-2.05-4.78 4.633-1.97-1.926-2.096 2.008 1.97 1.968 2.055 2.05 2.096-2.009 4.78-4.673Z"></path><defs><linearGradient id="a" x1="19.875" x2="3.563" y1="2.438" y2="23.25" gradientUnits="userSpaceOnUse"><stop stop-color="#FFDA15"></stop><stop offset="1" stop-color="#C69B01"></stop></linearGradient></defs></svg></h1>
      <p class="category">Công nghệ & Thiết bị</p>
      <button class="btn-chat">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 24" width="24" height="24"><path fill="#ffffff" fill-rule="evenodd" d="M16.2 4.563a8.315 8.315 0 0 0-3.687-.863 8.315 8.315 0 0 0-7.217 4.198 8.294 8.294 0 0 0 .08 8.342c.141.238.198.516.16.79l-.27 1.88v.08a.28.28 0 0 0 .28.24l1.922-.27h.17c.218 0 .432.06.62.17a8.315 8.315 0 0 0 10.452-1.603 8.299 8.299 0 0 0 1.959-7.103A8.295 8.295 0 0 0 16.2 4.563Zm-8.473-.774A9.517 9.517 0 0 1 12.513 2.5a9.518 9.518 0 0 1 7.55 3.753 9.496 9.496 0 0 1-4.017 14.558 9.518 9.518 0 0 1-8.408-.641l-1.882.27h-.21a1.483 1.483 0 0 1-1.472-1.69l.27-1.88A9.493 9.493 0 0 1 7.728 3.789ZM7.739 10a.6.6 0 0 1 .6-.6h6.347a.6.6 0 1 1 0 1.2H8.339a.6.6 0 0 1-.6-.6Zm0 3.5a.6.6 0 0 1 .6-.6h2.933a.6.6 0 1 1 0 1.2H8.34a.6.6 0 0 1-.6-.6Z" clip-rule="evenodd"></path></svg>
       <a href="#" onclick="confirmRedirect(event)">Nhắn tin</a>
      </button>
      

<script>
function confirmRedirect(event) {
    event.preventDefault(); // Ngăn chặn chuyển hướng mặc định

    const userConfirmed = confirm("Bạn có muốn mở đến đường link này không?");
    if (userConfirmed) {
        // Thay bằng link Zalo chính thức của Samsung nếu có
        window.location.href = "https://zalo.me/samsungvietnam";
    }
}
</script>

    </div>
    </div>
    
        <div class="section_detail">
      <div class="row" style="  margin-bottom:1.5rem;">
        <h3>Thông tin chi tiết</h3>
        <span>🏠</span>
         <a style="color: #007bff;" href="{{ route('home') }}">http://www.samsung.com/vn/
        </a>
      </div>
   <hr class="hr9" style="border: none; border-top: 1px solid #ccc; width: 90%;margin-bottom: 1.5rem;">

      <p class="txt" style="  font-size: 2.3rem;
    color: #33485c; ">
        Chào mừng bạn đến với tài khoản Zalo chính thức của Samsung Vietnam. Chọn quan tâm để cập nhật những thông tin mới và hấp dẫn nhất từ Samsung. Website:
        <a style="color: #007bff;" href="https://www.samsung.com/vn/support">https://www.samsung.com/vn/support</a>
      </p>
    </div>
   
  </div>
     <div class="zalo-header_right">
<img src="https://page-photo-qr.zdn.vn/1747198053/7cc440035246bb18e257.jpg" alt="QR-Code">
      <p>Mở Zalo, bấm quét QR để quét và xem trên điện thoại</p>
    </div>
  </div>
</div>



@endsection