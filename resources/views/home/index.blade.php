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
                        <h6>Lu??n lu??n l???ng nghe, lu??n lu??n th???u hi???u</h6>
                        <h4>Cung c???p nh???ng s???n ph???m <br> ch???t l?????ng</h4>
                        <p>N???u b???n c???n m???t n??i ????? t??m cho m??nh m???t chi???c xe ph?? h???p v???i b???n th??n
                            th?? ??? ????y l?? m???t l???a ch???n ????ng ?????n c???a b???n.</p>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>K???t n???i ??am m??!</h6>
                        <h4>N???i dung ???????c ki???m duy???t k??? <br> l?????ng b???i "Qu???n Tr??? Vi??n"</h4>
                        <p>B???n c?? th??? t??m ???????c nh???ng ng?????i b???n ??am m?? xe ??? ????y n???a ???? ^^.</p>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Ngu???n c???m h???ng ?????n t??? b???n!</h6>
                        <h4>G??p ?? ????? ch??ng t??i c?? th??? ph??t<br>tri???n h??n nh??! </h4>
                        <p>V??o ph???n li??n h??? ????? ????ng g??p cho ch??ng t??i nh???ng ?? ki???n c???a b???n nh??!.</p>
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
                    <h4>B???n mu???n li??n h??? v???i ch??ng t??i?</h4>
                    <span>Ch??ng t??i lu??n ????n nh???n s??? g??p ?? c???a b???n!.</span>
                </div>
                <div class="col-md-4">
                    <a href="/contact" class="border-button">Li??n H???</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>S???n ph???m <em>m???i nh???t</em></h2>

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
                                <i class="fa fa-cube"></i> S??? Gh???:{{ $data1->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> M??u S???c:{{ $data1->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $data1['id'] }}" class="filled-button">Xem Chi Ti???t</a>
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
                                <i class="fa fa-cube"></i> S??? Gh???:{{ $data2->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> M??u S???c:{{ $data2->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $data2['id'] }}" class="filled-button">Xem Chi Ti???t</a>
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
                                <i class="fa fa-cube"></i> S??? Gh???:{{ $data3->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> M??u S???c:{{ $data3->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $data3['id'] }}" class="filled-button">Xem Chi Ti???t</a>
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
                            <span>Ch??ng t??i l?? ai?</span>
                            <h2>Tr?????ng ?????i h???c C??ng ngh??? Th??ng tin <em>& Truy???n th??ng Vi???t - H??n</em></h2>
                            <br>
                            <a href="http://vku.udn.vn/tong-quan" class="filled-button">Gi???i thi???u</a>
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
                        <h2>G??p ?? cho ch??ng t??i<em> ??? ????y nh??! </em></h2>

                    </div>
                    <div class="col-md-12">
                        <div class="contact-form">
                            <form id="contact" action="{{ route('reportMail') }}" method="get">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="G??p ?? c???a b???n"
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            @if (Auth::user())
                                                <input style="display: none;" type="text"
                                                    value="{{ Auth::user()->username }}" name="mail">
                                                <button type="submit" id="form-submit" class="filled-button">G???i G??p
                                                    ??</button>
                                            @else
                                                <a href="/login" id="form-submit" class="filled-button">Vui l??ng
                                                    ????ng nh???p</a>
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
