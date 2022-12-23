<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Car</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ URL('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ URL('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL('css/owl.css') }}">
    <link rel="stylesheet" href="{{ URL('css/edit.css') }}">
    <style>
        /* banner  */
        .Modern-Slider .item-1 .img-fill {
            background-image: url('{{ url('admin/csdl/banner/') }}{{ "/" }}{{ $banner1->img }}');
        }

        .Modern-Slider .item-2 .img-fill {
           background-image: url('{{ url('admin/csdl/banner/') }}{{ "/" }}{{ $banner2->img }}');
        }

        .Modern-Slider .item-3 .img-fill {
           background-image: url('{{ url('admin/csdl/banner/') }}{{ "/" }}{{ $banner3->img }}');
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">

                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @include('nav')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Luôn luôn lắng nghe, luôn luôn thấu hiểu</h6>
                        <h4>Cung cấp những sản phẩm <br> chất lượng</h4>
                        <p>Nếu bạn cần một nơi để tìm cho mình một chiếc xe phù hợp với bản thân
                            thì ở đây là một lựa chọn đúng đắn của bạn.</p>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Kết nối đam mê!</h6>
                        <h4>Nội dung được kiểm duyệt kỹ <br> lưởng bởi "Quản Trị Viên"</h4>
                        <p>Bạn có thể tìm được những người bạn đam mê xe ở đây nữa đó ^^.</p>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Nguồn cảm hứng đến từ bạn!</h6>
                        <h4>Góp ý để chúng tôi có thể phát<br>triển hơn nhé! </h4>
                        <p>Vào phần liên hệ để đóng góp cho chúng tôi những ý kiến của bạn nhé!.</p>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Bạn muốn liên hệ với chúng tôi?</h4>
                    <span>Chúng tôi luôn đón nhận sự góp ý của bạn!.</span>
                </div>
                <div class="col-md-4">
                    <a href="/contact" class="border-button">Liên Hệ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Sản phẩm <em>mới nhất</em></h2>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $img1->image }}" alt=""
                            style="height: 50%;width:100%; max-height: 250px; min-height: 250px;">
                        <div class="down-content">
                            <h4>{{ $data1->title }}</h4>
                            <div style="margin-bottom:10px;">
                                <span id="money">

                                </span>
                                <script>
                                    var x = {{ $data1->price }};
                                    x = x.toLocaleString('it-IT', {
                                        style: 'currency',
                                        currency: 'VND'
                                    });
                                    document.getElementById("money").innerHTML = x;
                                </script>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> {{ $data1->mileage }} KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> {{ $data1->engine_size }}CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Số Ghế:{{ $data1->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Màu Sắc:{{ $data1->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $data1['id'] }}" class="filled-button">Xem Chi Tiết</a>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $img2->image }}"
                            alt="" style="height: 50%;width:100%; max-height: 250px;min-height: 250px;">
                        <div class="down-content">
                            <h4>{{ $data2->title }}</h4>
                            <div style="margin-bottom:10px;">
                                <span id="money2">

                                </span>
                                <script>
                                    var x = {{ $data2->price }};
                                    x = x.toLocaleString('it-IT', {
                                        style: 'currency',
                                        currency: 'VND'
                                    });
                                    document.getElementById("money2").innerHTML = x;
                                </script>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> {{ $data2->mileage }} KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> {{ $data2->engine_size }}CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Số Ghế:{{ $data2->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Màu Sắc:{{ $data2->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $data2['id'] }}" class="filled-button">Xem Chi Tiết</a>
                        </div>
                    </div>

                    <br>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $img3->image }}"
                            alt="" style="height: 50%;width:100%; max-height: 250px;min-height: 250px;">
                        <div class="down-content">
                            <h4>{{ $data3->title }}</h4>
                            <div style="margin-bottom:10px;">
                                <span id="money3">

                                </span>
                                <script>
                                    var x = {{ $data3->price }};
                                    x = x.toLocaleString('it-IT', {
                                        style: 'currency',
                                        currency: 'VND'
                                    });
                                    document.getElementById("money3").innerHTML = x;
                                </script>
                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> {{ $data3->mileage }} KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> {{ $data3->engine_size }}CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Số Ghế:{{ $data3->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Màu Sắc:{{ $data3->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $data3['id'] }}" class="filled-button">Xem Chi Tiết</a>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="more-info-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left-image">
                            <img src="http://vku.udn.vn/uploads/2020/07/24/1595545939_Media-61.JPG" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="right-content">
                            <span>Chúng tôi là ai?</span>
                            <h2>Trường Đại học Công nghệ Thông tin <em>& Truyền thông Việt - Hàn</em></h2>
                            <br>
                            <a href="http://vku.udn.vn/tong-quan" class="filled-button">Giới thiệu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="callback-form contact-us" style="margin-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Góp ý cho chúng tôi<em> ở đây nhé! </em></h2>

                    </div>
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form id="contact" action="{{ route('reportMail') }}" method="get">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Góp ý của bạn"
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            @if (Auth::user())
                                                <input style="display: none;" type="text"
                                                    value="{{ Auth::user()->username }}" name="mail">
                                                <button type="submit" id="form-submit" class="filled-button">Gửi Góp
                                                    Ý</button>
                                            @else
                                                <a href="/login" id="form-submit" class="filled-button">Vui lòng
                                                    đăng nhập</a>
                                            @endif

                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>
    </div>

    <!-- Footer Starts Here -->
    @include('footer');



    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL('jquery/jquery.min.js') }}"></script>
    <script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src=" {{ URL('js/custom.js') }}"></script>
    <script src=" {{ URL('js/owl.js') }} "></script>
    <script src=" {{ URL('js/slick.js') }}"></script>
    <script src="{{ URL('js/accordions.js') }}"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>
