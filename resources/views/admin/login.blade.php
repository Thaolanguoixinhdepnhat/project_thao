<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/styleadmin.css') }}">
    <title>Admin</title>
</head>

<body>

    <div class="login-box" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="{{ route('admin.register.submit') }}">
                @csrf
                <h1>Tạo tài khoản</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="text" name="username" placeholder="Tên đăng nhập" value="{{ old('username') }}">
                <input type="password" name="password" placeholder="Mật khẩu">
                <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in">
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <h1>Đăng nhập</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <input type="text" name="username" placeholder="Tên đăng nhập" value="{{ old('username') }}">
            <div class="error-message">
                <x-input-error :messages="$errors->get('username')" />
            </div>
            <input type="password" placeholder="Mật khẩu" name="password">
            <div class="error-message">
                <x-input-error :messages="$errors->get('password')" />
            </div>
            @if ($errors->has('login_error'))
            <div class="alert alert-danger input-error-custom">{{ $errors->first('login_error') }}</div> 
        @endif
            <button>Đăng nhập</button>
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
                    <button class="hidden" id="register">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
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

