 {{-- @extends('layout.user')

@section('title', 'Trang chủ')

@section('content')

<form action="{{ route('user.update') }}" method="POST">
    @csrf
    <section class="sec-user">
        <div class="container">
            <div class="content">
                <h2>Thông tin cá nhân</h2>
                <div class="user-form-group">
                    <div class="group">
                        <label for="">Họ và tên:</label>
                        <input type="text" value="{{$customer->username}}" name="username" readonly>
                    </div>

                    <div class="group">
                        <label for="">Địa chỉ:</label>
                        <input type="text" value="{{$customer->address}}" name="address">
                    </div>

                    <div class="group">
                        <label for="">Email:</label>
                        <input type="text" value="{{$customer->email}}" name="email">
                    </div>

                    <div class="group">
                        <label for="">Số điện thoại:</label>
                        <input type="text" value="{{$customer->phone}}" name="phone">
                    </div>
                </div>
                <div class="btn">
                    <button class="btn-primary" type="submit">Chỉnh sửa</button>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection 

 --}}


 <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

@extends('layout.user')

@section('title', 'Trang chủ')

@section('content')
<style>
    h2{
        font-size: 2rem;
        font-weight: 500;
        margin-bottom: 2rem;
    }
    .btn{
           text-align: left;
        width: 100%;
        .btn-primary{
   width: 100px;
    background-color: #007bff;
    color: white;
    font-size: 16px; 
    border: none;
    border-radius: 5px;
    cursor: pointer;
    height: 38px; 
   text-align: center;
   
        }
    }
    </style>
<section class="customer-edit">
    <div class="customer-container">
        <div class="customer-content">
            <div class="customer-section">
                     <h2>Thông tin cá nhân</h2>
                <form action="{{ route('user.update') }}" method="POST" class="customer-form">
                    @csrf
                    <div class="form-group-custom">
                        <label for="">Họ và tên:</label>
                        <input type="text" value="{{$customer->username}}" name="username"  class="input-id" readonly>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const inputId = document.querySelector(".input-id");
                        
                            inputId.addEventListener("click", function () {
                                alert("Bạn không thể chỉnh sửa Tên!");
                            });
                        });
                        </script>

                    <div class="form-group-row">
                        <div class="form-group-custom">
                            <label for="">Địa chỉ:</label>
                             <input type="text"  class="form-group__input-username" value="{{$customer->address}}" name="address">
                            @error('address')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="form-group-custom">
                             <label for="">Số điện thoại:</label>
                        <input type="text"  class="form-group__input-dc" value="{{$customer->phone}}" name="phone">
                            @error('phone')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group-custom">
                          <label for="">Email:</label>
                        <input type="text"  class="input-id"  value="{{$customer->email}}" name="email">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                           
                        @enderror
                        <span id="email-error" style="color: red; display: block; margin-top: 5px; "></span>
                    </div>
                    <script>
                        document.getElementById("email").addEventListener("invalid", function(event) {
                            event.preventDefault(); 
                            document.getElementById("email-error").textContent = "Email phải có ký tự '@' và đúng định dạng.";
                        });
                    </script>
                 
                    
                     <div class="btn">
                    <button class="btn-primary" type="submit">Chỉnh sửa</button>
                </div>
                   
                </form>
                
                
            </div>
        </div>
    </div>
</section>
@endsection
