<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách bài đăng của bạn</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    @include('admin.layouts.lib')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
    <!-- Navbar-->
    <li style="list-style: none;"><a class="app-nav__item" href="/"><i class='bx bx-log-out bx-rotate-180'></i> </a>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @if (empty(Auth::user()->name))
        <h1>Vui lòng hãy đăng nhập</h1>
    @else
        <main class="app-content">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item active"><a href="#"><b>Danh sách tin của bạn</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="row element-button">
                                <div class="col-sm-2">

                                    <a class="btn btn-add btn-sm" href="{{ route('HomePost.create') }}"
                                        title="Thêm"><i class="fas fa-plus"></i>
                                        Tạo mới tin</a>
                                </div>

                            </div>
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>


                                        <th>Tiêu đề</th>
                                        <th>Hình ảnh</th>
                                        <th>Tài khoản đăng bài</th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th>Tính năng</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($posts as $data)
                                        @foreach ($customer as $item)
                                            @if (Auth::user()->user_id == $item->user_id && $data->email == $item->username)
                                                <tr>
                                                    <td>{{ $data->title }}</td>
                                                    @foreach ($product as $item)
                                                        @if ($data->id == $item->id_post)
                                                            <td><img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $item->image }}"
                                                                    style="height:50px;"></td>
                                                        @break
                                                    @endif
                                                @endforeach

                                                @foreach ($customer as $cus)
                                                    @if ($cus->username == $data->email)
                                                        <td>{{ $cus->name }}</td>
                                                    @break
                                                @endif
                                            @endforeach

                                            <td id="mone">{{ $data->price }}</td>
                                            <script>
                                                var x =  {{ $data->price }} ;
                                                x = x.toLocaleString('it-IT', {
                                                    style: 'currency',
                                                    currency: 'VND'
                                                });
                                                console.log(x);
                                                document.getElementById("mone").innerHTML = x;
                                            </script>
                                            @if ($data->status == 1)
                                                <td style="color: green;"><b> Đã duyệt</b></td>
                                            @else
                                                <td style="color: red;"><b> Chưa duyệt</b></td>
                                            @endif
                                            <td>
                                                <button class="btn btn-primary btn-sm edit" type="button"
                                                    title="Sửa" id="show-emp" data-toggle="modal"
                                                    data-target="#ModalUP"><i class="fas fa-edit"></i><a
                                                        href="/HomePost/{{ $data['id'] }}/edit">Sửa</a></button>
                                            <td>
                                                <form action="/HomePost/{{ $data['id'] }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"><i class="bi-trash"></i></button>
                                                </form>
                                            </td>
                                            </td>
                                            <td>
                                                <a href="/post/{{ $data['id'] }}"
                                                    style="text-decoration:block;"><b><u><i>
                                                                Xem chi tiết</i></u></b></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
{{-- danh sach don hang cho xac nhan --}}
<main class="app-content" style="margin-top: -50px;">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Đơn hàng chờ xác nhận</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                        </div>

                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>


                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>Tài khoản mua hàng</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cart as $data)
                                <tr>
                                    {{-- an 1 , hien thi 2 --}}
                                    @foreach ($posts as $key)
                                        @if ($data->product_id == $key->id && $key->email == Auth::user()->username)
                                            <td>{{ $key->title }}</td>
                                            @foreach ($product as $i)
                                                @if ($key->id == $i->id_post)
                                                    <td><img src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $i->image }}"
                                                            style="height:50px;"></td>
                                                @break
                                            @endif
                                        @endforeach
                                        @foreach ($customer as $cus)
                                            @if ($cus->username == $data->user)
                                                <td>{{ $cus->name }}</td>
                                            @break
                                        @endif
                                    @endforeach
                                    <td id="money">{{ $data->total }}</td>
                                    <script>
                                        var x =  {{ $data->total}} ;
                                        x = x.toLocaleString('it-IT', {
                                            style: 'currency',
                                            currency: 'VND'
                                        });
                                        document.getElementById("money").innerHTML = x;
                                    </script>
                                    <td>{{ $data->amount }}</td>
                                     @if ($data->status != 3) 
                                    <td>
                                        <form action="/confirm/{{ $data['id'] }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="text" value="{{ $data->id }}"
                                                name="id" style="display: none;">
                                            <input type="text" value="{{ $data->user }}"
                                                name="username" style="display: none;">
                                            <button type="submit"
                                                style="background-color: aquamarine;color:red; width: 100%;"><b><i>Xác
                                                        nhận đơn hàng</i></b></button>
                                        </form>
                                    </td>
                                   
                                    <td>
                                        <form action="/enter_reason" method="post">
                                            @csrf
                                            <input type="text" value="{{ $data->id }}"
                                                name="id" style="display: none;">
                                            <input type="text" value="{{ $data->user }}"
                                                name="username" style="display: none;">
                                            <button type="submit"
                                                style="background-color: aquamarine;color:red; width: 100%;"><b><i>Hủy
                                                        đơn hàng</i></b></button>
                                        </form>
                                    </td>
                                     @else 
                                     <td><button style="background-color: aquamarine;color:red; width: 100%;"><b><i>Đã giao!</i></b></button></td>
                                     <td></td>
                                       
                                    @endif
                                    <td>
                                        <a href="/HomeCart/{{ $data['id'] }}"
                                            style="text-decoration:block;"><b><u><i> Xem chi tiết đơn
                                                        hàng</i></u></b></a>
                                    </td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</main>
@endif

<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
<script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function() {
        jQuery(".trash").click(function() {
            swal({
                    title: "Cảnh báo",

                    text: "Bạn có chắc chắn là muốn xóa đơn hàng này?",
                    buttons: ["Hủy bỏ", "Đồng ý"],
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Đã xóa thành công.!", {

                        });
                    }
                });
        });
    });
    oTable = $('#sampleTable').dataTable();
    $('#all').click(function(e) {
        $('#sampleTable tbody :checkbox').prop('checked', $(this).is(':checked'));
        e.stopImmediatePropagation();
    });


    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + " giờ " + m + " phút " + s + " giây";
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<span class="date"> ' + today + ' - ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
    //In dữ liệu
    var myApp = new function() {
        this.printTable = function() {
            var tab = document.getElementById('sampleTable');
            var win = window.open('', '', 'height=700,width=700');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
    //     //Sao chép dữ liệu
    //     var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    // copyTextareaBtn.addEventListener('click', function(event) {
    //   var copyTextarea = document.querySelector('.js-copytextarea');
    //   copyTextarea.focus();
    //   copyTextarea.select();

    //   try {
    //     var successful = document.execCommand('copy');
    //     var msg = successful ? 'successful' : 'unsuccessful';
    //     console.log('Copying text command was ' + msg);
    //   } catch (err) {
    //     console.log('Oops, unable to copy');
    //   }
    // });


    //Modal
    $("#show-emp").on("click", function() {
        $("#ModalUP").modal({
            backdrop: false,
            keyboard: false
        })
    });
</script>
<!--
Modal -->




</div>
</div>
</div>
</body>

</html>
