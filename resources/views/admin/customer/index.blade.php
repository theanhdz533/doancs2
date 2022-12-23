@if (Auth::user())
    @if (Auth::user()->username == 'anhvt.21it@vku.udn.vn')
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Danh sách người bán | Quản trị Admin</title>
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
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

        </head>

        <body onload="time()" class="app sidebar-mini rtl">
            <!-- Navbar-->
            <header class="app-header">
                <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                    aria-label="Hide Sidebar"></a>
                <!-- Navbar Right Menu-->
                <ul class="app-nav">


                    <!-- User Menu-->
                    <li><a class="app-nav__item" href="/manager"><i class='bx bx-log-out bx-rotate-180'></i> </a>

                    </li>
                </ul>
            </header>
            <!-- Sidebar menu-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                        src="https://vku.udn.vn/uploads/no-image.png" width="50px" alt="User Image">
                    <div>

                        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
                    </div>
                </div>
                <hr>
                <ul class="app-menu">
                    <li><a class="app-menu__item  " href="/manager"><i
                                class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Thống
                                kê</span></a>
                    </li>
                    <li><a class="app-menu__item active" href="/customer"><i class='app-menu__icon bx bx-task'></i><span
                                class="app-menu__label">Quản lý người dùng</span></a></li>
                    <li><a class="app-menu__item" href="post"><i class='app-menu__icon bx bx-run'></i><span
                                class="app-menu__label">Quản lý bài đăng
                            </span></a></li>
                    <li><a class="app-menu__item" href="banner"><i class='app-menu__icon bx bx-run'></i><span
                                class="app-menu__label">Quản lý banner
                            </span></a></li>
                </ul>
            </aside>
            <main class="app-content">
                <div class="app-title">
                    <ul class="app-breadcrumb breadcrumb side">
                        <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
                    </ul>
                    <div id="clock"></div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">

                                <div class="row element-button">
                                    <div class="col-sm-2">

                                        <a class="btn btn-add btn-sm" href="{{ route('customer.create') }}"
                                            title="Thêm"><i class="fas fa-plus"></i>
                                            Tạo mới nhân viên</a>
                                    </div>

                                    <div class="col-sm-2">
                                        <a class="btn btn-delete btn-sm print-file" type="button" title="In"
                                            onclick="window.print()"><i class="fas fa-print"></i> In dữ liệu</a>

                                    </div>



                                </div>
                                <table class="table table-hover table-bordered js-copytextarea" cellpadding="0"
                                    cellspacing="0" border="0" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th width="150">Họ và tên</th>
                                            <th width="20">Ảnh</th>
                                            <th>Ngày sinh</th>
                                            <th>Giới tính</th>
                                            <th>SĐT</th>
                                            <th>Địa chỉ</th>
                                            <th width="100">Tính năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customer as $data)
                                            <tr>

                                                <td>{{ $data->username }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td><img class="img-card-person"
                                                        src="{{ url('admin/csdl/nguoidung/') }}{{ '/' }}{{ $data->image }}"
                                                        alt=""></td>
                                                <td>{{ $data->birthday }}</td>
                                                <td>{{ $data->gender }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td class="table-td-center">
                                                    <div
                                                        style="display: flex; flex-wrap: nowrap;
                   flex-direction: row;
                   justify-content: space-evenly;">
                                                        <a href="/customer/{{ $data['user_id'] }}/edit"><i
                                                                class="bi bi-tools"></i></a>
                                                        <form action="/customer/{{ $data['user_id'] }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"><i class="bi-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </main>

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

                                text: "Bạn có chắc chắn là muốn xóa nhân viên này?",
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

                //EXCEL
                // $(document).ready(function () {
                //   $('#').DataTable({

                //     dom: 'Bfrtip',
                //     "buttons": [
                //       'excel'
                //     ]
                //   });
                // });


                //Thời Gian
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
        </body>

        </html>
    @else
        <h1>Bạn không có quyền truy cập trang này!</h1>
    @endif
@else
    <h1>Bạn không có quyền truy cập trang này!</h1>
@endif
