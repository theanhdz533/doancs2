@if (Auth::user())
@if (Auth::user()->username =="anhvt.21it@vku.udn.vn")
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách nhân viên | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    @include('admin.layouts.lib')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">


            <!-- User Menu-->
            <li><a class="app-nav__item" href="/"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="https://vku.udn.vn/uploads/no-image.png"
                width="50px" alt="User Image">
            <div>

                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li><a class="app-menu__item  active" href="/manager"><i
                        class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Thống kê</span></a>
            </li>
            <li><a class="app-menu__item" href="/customer"><i class='app-menu__icon bx bx-task'></i><span
                        class="app-menu__label">Quản lý người dùng</span></a></li>
            <li><a class="app-menu__item" href="post"><i class='app-menu__icon bx bx-run'></i><span
                        class="app-menu__label">Quản lý bài đăng
                    </span></a></li>
        </ul>
    </aside>
    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="app-title">
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><b>Thống kê</b></a></li>
                    </ul>
                    <div id="clock"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                    <div class="info">
                        <h4>Số bài viết</h4>
                        <p><b>Đã duyệt: {{ $total_post_acc  }} bài</b></p>
                        <p><b>Chưa duyệt: {{$total_post_hidden }} bài</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                    <div class="info">
                        <h4>Người dùng</h4>
                        <p><b>{{ $total_customer  }} Khách hàng</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x'></i>
                    <div class="info">
                        <h4>Tổng sản phẩm</h4>
                        <p><b>{{$total_product }} sản phẩm</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                    <div class="info">
                        <h4>Tổng đơn hàng</h4>
                        <p><b>{{ $total_cart }} đơn hàng</b></p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
           
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class='icon fa-3x bx bxs-user-badge'></i>
                    <div class="info">
                        <h4>lượt truy cập</h4>
                        <p><b>{{ $total_view }} lượt</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-tag-x'></i>
                    <div class="info">
                        <h4>Hết hàng</h4>
                        <p><b>{{ $total_product_Out }} sản phẩm</b></p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div>
                        <h3 class="tile-title">DANH SÁCH ĐƠN HÀNG</h3>
                    </div>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Ngày</th>
                                    <th>Khách hàng</th>
                                    <th>Đơn hàng</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $data)
                                <tr>
                                    <td>{{ $data->date }}</td>
                                    @foreach ($user as $item)
                                    @if ($data->user == $item->username)
                                    <td>{{ $item->name }}</td> 
                                    @break
                                    @endif
                                    @endforeach 
                                    @foreach ($product as $key)
                                    @if ($data->product_id == $key->id) 
                                    <td>{{ $key->title }}</td> 
                                    @endif
                                    @endforeach 
                                    <td>{{ $data->amount }} sản phẩm</td>
                                    <td id="money"> đ</td>
                                    <script>
                                        var x = {{ $data->total }};
                                        x = x.toLocaleString('it-IT', {
                                            style: 'currency',
                                            currency: 'VND'
                                        });
                                        document.getElementById("money").innerHTML = x;
                                    </script>
                                    @if ($data->status == 2)
                                        <td style="color: red"><b>Đơn bị hủy</b></td>
                                    @endif
                                    @if ($data->status == 1)
                                        <td style="color: rgb(47, 154, 255)"><b>Đang xác nhận</b></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                           
                        </table>
                        <div> {{ $cart->links() }}</div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div>
                        <h3 class="tile-title">SẢN PHẨM ĐÃ HẾT</h3>
                    </div>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Người đăng bài</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    @foreach ($product as $data)
                                    <tr>  
                                        @if ($data->count ==0)
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->title }}</td>
                                        @foreach ($user as $key)
                                        @if ($key->username == $data->email)
                                        <td>{{ $key->name }}</td>
                                        @break
                                        @endif
                                        @endforeach
                                       
                                        @endif
                                    </tr>
                                    @endforeach
                                   
                            </tbody>
                        </table>
                        <div> {{ $product->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
        


    </main>

    <script type="text/javascript">
        var data = {
            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9",
                "Tháng 10", "Tháng 11", "Tháng 12"
            ],
            datasets: [{
                    label: "Dữ liệu đầu tiên",
                    fillColor: "rgba(255, 255, 255, 0.158)",
                    strokeColor: "black",
                    pointColor: "rgb(220, 64, 59)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "green",
                    data: [20, 59, 90, 51, 56, 100, 40, 60, 78, 53, 33, 81]
                },
                {
                    label: "Dữ liệu kế tiếp",
                    fillColor: "rgba(255, 255, 255, 0.158)",
                    strokeColor: "rgb(220, 64, 59)",
                    pointColor: "black",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "green",
                    data: [48, 48, 49, 39, 86, 10, 50, 70, 60, 70, 75, 90]
                }
            ]
        };


        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);

        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
</body>

</html>
@else
    <h1>Bạn không có quyền truy cập trang này!</h1>
@endif
@else
<h1>Bạn không có quyền truy cập trang này!</h1>
@endif
