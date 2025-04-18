
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/styleadmin.css') }}">
    <title>@yield('title', 'Đăng nhập')</title>
</head>

<body>

    <div class="login-box" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('store') }}" method="POST" class="registration-form-custom">
                @csrf
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
        
                <div class="form-group-custom">
                    <input id="username" type="text" placeholder=" " name="username" value="{{ old('username') }}">
                    <label for="username">Tên tài khoản</label>
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('username')" class="error-message" />
                    </div>
                </div>
        
                <div class="form-group-custom">
                    <input id="password" type="password" placeholder=" " name="password">
                    <label for="password">Mật khẩu</label>
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('password')" class="error-message" />
                    </div>
                </div>
        
                <div class="form-group-custom">
                    <input id="password_confirmation" type="password" placeholder=" " name="password_confirmation">
                    <label for="password_confirmation">Nhập lại mật khẩu</label>
                </div>
        
                <div class="form-group-custom">
                    <input id="email" type="email" placeholder=" " name="email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('email')" class="error-message" />
                    </div>
                </div>
        
                <div class="form-group-custom">
                    <input id="address" type="text" placeholder=" " name="address" value="{{ old('address') }}">
                    <label for="address">Địa chỉ</label>
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('address')" class="error-message" />
                    </div>
                </div>
        
                <div class="form-group-custom">
                    <input id="phone" type="text" placeholder=" " name="phone" value="{{ old('phone') }}">
                    <label for="phone">Số điện thoại</label>
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('phone')" class="error-message" />
                    </div>
                </div>
        
                <button type="submit" class="submit-btn-custom">Đăng ký</button>
            </form>
        </div>
        
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <h1>Đăng nhập</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                    <input id="username" type="text" name="username" value="{{ old('username') }}" placeholder="Tên tài khoản">
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('username')" />
                    </div>
                    <input id="password" type="password" name="password" placeholder="Mật khẩu">
                    <div class="error-message">
                        <x-input-error :messages="$errors->get('password')" />
                    </div>
        
                @if ($errors->has('login_error'))
                    <div class="alert alert-danger input-error-custom">{{ $errors->first('login_error') }}</div> 
                @endif
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
        
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Hãy nhập thông tin cá nhân để sử dụng đầy đủ chức năng của trang</p>
                    <button class="hidden" id="login">Đăng nhập</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Xin chào, bạn mới!</h1>
                    <p>Hãy đăng ký để sử dụng tất cả chức năng của trang web</p>
                    <button class="hidden" id="register" onclick="window.location='{{ route('register') }}'">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
{{-- 
    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script> --}}
</body>

</html>


