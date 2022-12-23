<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<style>
    .nav-link {
        font-weight: 900;
    }

    .infor p {
        color: rgb(106, 255, 0);
        font-size: 20px;
    }

    #login {
        font-weight: bold;
        background-color: rgba(29, 230, 22, 0.3);
        border-radius: 200px;
    }

    body {
        font-family: Arial;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }
</style>
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h2>Car Dealer</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Trang Chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('HomeProduct.index') }}">Sản Phẩm</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">About</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/about">About</a>
                            <a class="dropdown-item" href="/blog">Blog</a>
                            <a class="dropdown-item" href="/team">Team</a>
                            <a class="dropdown-item" href="/testimonials">Testimonials</a>
                            <a class="dropdown-item" href="/faq">FAQ</a>
                            <a class="dropdown-item" href="/terms">Terms</a>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Liên hệ</a>
                    </li>
                    @auth
                        {{-- <li class="nav-item">
              <a class="nav-link" href="/HomeCart"><i class="bi bi-cart-check">Giỏ Hàng</i></a>
            </li> --}}
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="/HomeCart" role="button"
                                aria-haspopup="true" aria-expanded="false">Mua Sắm</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="HomeCart">Lịch hẹn</i></a>
                                <a class="dropdown-item" href="/MyBill">Lịch sử</a>
                            </div>
                        </li>
                    @endauth


                    @auth
                   
                        <li class="nav-item dropdown">
                           
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="/HomeCart" role="button"
                                aria-haspopup="true" aria-expanded="false"
                                style="color: aqua"><i><b><i class="bi bi-person-circle"> {{ Auth::user()->name }}</i></i></b></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/HomeProfile/{{ Auth::user()->user_id }}/edit">Thông tin tài
                                    khoản</a>
                                <a class="dropdown-item" href="/HomePost">Bài đăng của tôi</a>
                                <a class="dropdown-item" href="{{ route('password') }}">Đổi mật khẩu</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất    <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            </div>
                        </li>



                    @endauth
                    @guest
                        <li class="nav-item" id="login">
                            <a class="nav-link" href="{{ route('login') }}"><b>Đăng Nhập</b></a>
                        </li>
                        <li class="nav-item" id="login">
                            <a class="nav-link" href="{{ route('register') }}"><b>Đăng Ký</b></a>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
</header>
