<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css">

    <title>Car</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ URL('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL('css/owl.css') }}">
    <style>
        .hidden {
            display: none;
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
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: rgb(32, 185, 251)">Uy Tín Tạo Nên Thành Công!</h1>
                    {{-- <span>Chất lượng.</span> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- tim kiem --}}
    <div class="services">
        <div style="float: right; margin-right:20px;">
            <form action="">
                <input type="text" value="{{ $search }}" placeholder="Tìm kiếm ở đây nhé!^^" name="search"
                    size="" style="margin-bottom:30px; border: 3px solid darkslategray;">
                <button type="submit" style="background-color: rgba(9, 203, 9, 0.651)">Tìm Kiếm</button>
            </form>
        </div>
        <br>
        <br>
        <br>

        {{-- --------- --}}


        <div class="container">
            <div class="row">
                @foreach ($post as $item)
                    <div class="col-md-4" style="margin-top: 20px;" >
                        <div class="service-item" >
                            @foreach ($product as $data)
                                @if ($data->id_post == $item->id)
                                    <img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $data->image }}"
                                        alt="" style="height: 50%;width:100%; max-height: 250px; min-height: 250px;">
                                @break
                            @endif
                        @endforeach

                        <div class="down-content">
                            <h4>{{ $item->title }}</h4>
                            <div style="margin-bottom:10px;">
                                <span id="money">
                                    {{ $item->price }}<sup>VND</sup> &nbsp;
                                </span>
                                <script>
                                    var x =   {{ $item->price }};
                                    x = x.toLocaleString('it-IT', {
                                        style: 'currency',
                                        currency: 'VND'
                                    });
                                    document.getElementById("money").innerHTML = x;
                                   
                                </script>

                            </div>

                            <p>
                                <i class="fa fa-dashboard"></i> {{ $item->mileage }}KM &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> {{ $item->engine_size }}CC &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Số Ghế:{{ $item->seat_count }} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> Màu Sắc:{{ $item->color }} &nbsp;&nbsp;&nbsp;
                            </p>
                            <a href="/HomeProduct/{{ $item['id'] }}" class="filled-button">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach


            <br>




        </div>

        <br>
        <br>

        <nav>

            <ul class="pagination pagination-lg justify-content-center">
                <div> {{ $page->links() }}</div>

                {{-- <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li> --}}
            </ul>
        </nav>

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
