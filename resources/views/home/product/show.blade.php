<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Car</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ URL('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL('css/owl.css') }}">
    <style>
        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */


        /* Position the "next button" to the right */


        /* On hover, add a black background color with a little bit see-through */
        /* Number text (1/3 etc) */


        /* Container for image text */


        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            margin-top: 20px;
            float: left;
            width: 16.66%;

        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
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
                    <ul class="left-info">
                        <li><a href="#"><i class="fa fa-envelope"></i>anhvt.21it@vku.udn.vn</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>0961735552</a></li>
                    </ul>
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
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: rgb(48, 224, 255);">SĐT: {{ $sdt }}</h1>
                    <h1 id="money"><sup>VND</sup></h1>
                    <script>
                        var x =  {{ $post->price }};
                        x = x.toLocaleString('it-IT', {
                            style: 'currency',
                            currency: 'VND'
                        });
                        document.getElementById("money").innerHTML = x;
                    </script>
                    <span>
                        {{ $post->title }}
                        
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                       
                        <div class="container">
                            @foreach ($img as $data)
                                <div class="mySlides">

                                    <img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $data->image }}"
                                        style="width:100%; max-height: 550px;">
                                </div>
                            @endforeach
                            <i style="display: none;">{{ $i = 1 }} </i>
                            <div class="row" style="border: 2px sloid black;">
                                @foreach ($img as $data)
                                    <div class="column">
                                        <img class="demo cursor"
                                            src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $data->image }}"
                                            style="width:100% ;max-height: 55px;"
                                            onclick="currentSlide({{ $i }})" alt="The Woods">
                                    </div>
                                    <i style="display: none;"> {{ $i++ }}</i>
                                @endforeach
                            </div>
                            @auth
                            @if ($rate == 1)
                                <div style="margin-top:20px;">
                                    <form action="{{ route('rate') }}" method="post">
                                        @csrf
                                        <input type="text" value="{{ $post->id }}" name="id"
                                            style="display:none;">
                                        <input type="text" name="rate" value="Hài lòng"
                                            id="rate"style="display:none;">
                                        <input type="text" name="username" value="{{ Auth::user()->username }}"
                                            style="display:none;">
                                        <select onChange="myNewFunction(this);" style="height: 43px;">
                                            <option>Hài lòng</option>
                                            <option>Không hài lòng</option>
                                        </select>
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="addtocard" style="width: 50%">Đánh giá</button>
                                        <script>
                                            function myNewFunction(sel) {
                                                document.getElementById('rate').value = sel.options[sel.selectedIndex].text;
                                            }
                                        </script>
                                    </form>
                                </div>
                            @endif
                            @endauth
                        </div>

                    </div>

                    <br>



                    <br>
                </div>
                  
                <div class="col-md-5">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Loại xe</span>

                                    <strong class="pull-right">{{ $post->type_car }}</strong>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Năm sản xuất</span>

                                    <strong class="pull-right">{{ $post->year_of_manufacture }}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Quãng đường đã di chuyển</span>

                                    <strong class="pull-right">{{ $post->mileage }} km</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Nhiên liệu sử dụng</span>

                                    <strong class="pull-right">{{ $post->fuel }}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Kích thước động cơ</span>

                                    <strong class="pull-right">{{ $post->engine_size }} cc</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Mã lực</span>

                                    <strong class="pull-right">{{ $post->power }} hp</strong>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Nhà sản xuất</span>

                                    <strong class="pull-right">{{ $post->the_firm }} </strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Màu sắc</span>

                                    <strong class="pull-right">{{ $post->color }}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Số ghế</span>

                                    <strong class="pull-right">{{ $post->seat_count }}</strong>
                                </div>
                            </li>



                        </ul>
                        <div class="col-auto">
                            <ul class="list-inline pb-3">
                                <li class="list-inline-item text-right">
                                    Số lượng:
                                <li class="list-inline-item text-right" style="color: rgb(245, 0, 41)">
                                    <b> {{ $post->count }} xe có sẵn </b>
                                    <input type="hidden" name="product-quanity" id="product-quanity"
                                        value="1">
                                </li>
                            </ul>
                        </div>
                        <div class="row pb-3">
                            @if ($post->count == 0)
                                <div class="col d-grid">
                                    <a class="btn btn-success btn-lg" onclick="function_hethang()"
                                        style="width: 100%;color:rgb(255, 255, 255);">Hết Hàng</a>
                                </div>
                            @else
                                @auth

                                    <div class="col d-grid">
                                        <form action="/HomeProduct/{{ $data['id'] }} " method="post">
                                            <input type="text" value="{{ Auth::user()->username }}" name="username"
                                                style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-success btn-lg" name="submit"
                                                value="addtocard" style="width: 100%">Thêm Vào Giỏ Hàng </button>
                                        </form>
                                    </div>
                                    @endauth
                                    @guest
                                    <div class="col d-grid">
                                        <a class="btn btn-success btn-lg" href="{{ route('login') }}"
                                            style="width: 100%;color:rgb(255, 255, 255);">Đăng Nhập Để Mua Hàng Ngay!</a>
                                    </div>

                                @endguest
                                @endif

                                    <div>
                                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                        <script>
                                            var xValues = ["Không hài lòng", "Hài lòng", ];
                                            var yValues = [{{ $post->bad }}, {{ $post->good  }}, ];
                                            var barColors = [
                                                "#b91d47",
                                                "#00aba9",
                                                "#2b5797",
                                                "#e8c3b9",
                                                "#1e7145"
                                            ];
            
                                            new Chart("myChart", {
                                                type: "doughnut",
                                                data: {
                                                    labels: xValues,
                                                    datasets: [{
                                                        backgroundColor: barColors,
                                                        data: yValues
                                                    }]
                                                },
                                                options: {
                                                    title: {
                                                        display: true,
                                                        text: "Thống kê đánh giá sản phẩm"
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                               
                                
                           

                        </div>
                    </form>

                    <br>
                </div>
            </div>

            <br>


        </div>

        <!-- Footer Starts Here -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-item">
                        <h4>Car Dealer Website</h4>
                        <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia
                            sapien
                            vitae.</p>
                        <ul class="social-icons">
                            <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-item">
                        <h4>Useful Links</h4>
                        <ul class="menu-list">
                            <li><a href="#">Vivamus ut tellus mi</a></li>
                            <li><a href="#">Nulla nec cursus elit</a></li>
                            <li><a href="#">Vulputate sed nec</a></li>
                            <li><a href="#">Cursus augue hasellus</a></li>
                            <li><a href="#">Lacinia ac sapien</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-item">
                        <h4>Additional Pages</h4>
                        <ul class="menu-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-item last-item">
                        <h4>Contact Us</h4>
                        <div class="contact-form">
                            <form id="contact footer-contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name"
                                                placeholder="Full Name" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message"
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="filled-button">Send
                                                Message</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Copyright © 2022 Company Name

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="margin-top: 70px;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" id="contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Pick-up location"
                                                required="">
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Return location"
                                                required="">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset>
                                            <input type="text" class="form-control"
                                                placeholder="Pick-up date/time" required="">
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Return date/time"
                                                required="">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Enter full name"
                                        required="">
                                </fieldset>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset>
                                            <input type="text" class="form-control"
                                                placeholder="Enter email address" required="">
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset>
                                            <input type="text" class="form-control" placeholder="Enter phone"
                                                required="">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="{{ URL('jquery/jquery.min.js') }}"></script>
        <script src="{{ URL('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Additional Scripts -->
        <script src=" {{ URL('js/custom.js') }}"></script>
        <script src=" {{ URL('js/owl.js') }} "></script>
        <script src=" {{ URL('js/slick.js') }}"></script>
        <script src="{{ URL('js/accordions.js') }}"></script>

        <!-- Start Script -->
        <script src="{{ URL('js/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ URL('js/jquery-migrate-1.2.1.min.js') }}"></script>
        <script src="{{ URL('js/templatemo.js') }}"></script>
        <script src="{{ URL('js/js/custom.js') }}"></script>


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
        <script>
            // thong bao het hang 
            function function_hethang() {
                alert("Sản phẩm đã hết hàng!!!");
            }
        </script>
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("demo");
                let captionText = document.getElementById("caption");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }
        </script>

</body>

</html>
