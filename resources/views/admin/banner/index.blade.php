@if (Auth::user())
@if (Auth::user()->username =="anhvt.21it@vku.udn.vn")
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách bài đăng | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  @include("admin.layouts.lib")
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
        src="https://vku.udn.vn/uploads/no-image.png" width="20px"
        alt="User Image">
      <div>

        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item" href="/manager"><i
                  class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Thống kê</span></a>
      </li>
      <li><a class="app-menu__item" href="/customer"><i class='app-menu__icon bx bx-task'></i><span
                  class="app-menu__label">Quản lý người dùng</span></a></li>
      <li><a class="app-menu__item" href="post"><i class='app-menu__icon bx bx-run'></i><span
                  class="app-menu__label">Quản lý bài đăng
              </span></a></li>
              <li><a class="app-menu__item active" href="banner"><i class='app-menu__icon bx bx-run'></i><span
                class="app-menu__label">Quản lý banner
            </span></a></li>
              
  </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Banner</b></a></li>
        
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
             {{-- tim kiem --}}
           
            <table  class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
            id="sampleTable">
              <thead>
                <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th></th>
                </tr>
              </thead>
              <tbody>
                <a href="" style="display: none">{{ $i = 1 }}</a>
                @foreach ($image as $data)
                
                <tr>
                    <td>{{ $i++ }}</td>
                    <td> <img class="img-card-person" src="{{ url('admin/csdl/banner/') }}{{ '/' }}{{ $data->img }}"></td>
                    {{-- <td><img class="img-card-person" src="data:image/jpeg;base64,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" alt=""></td> --}}
                    <td><i><a href="/banner/{{ $data['id'] }}/edit"><i
                        class="bi bi-tools"></i>Chỉnh sửa</a></i></td>
                </tr>
                 
                @endforeach
                
              </tbody>
            </table>
            {{-- <div> {{ $page->links('vendor/pagination/bootstrap-4') }}</div> --}}
          </div>
        </div>
        </div>
      </div>
    </div>
  </main>
  
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
  <script>
    function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
    jQuery(function () {
      jQuery(".trash").click(function () {
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
    $('#all').click(function (e) {
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
    var myApp = new function () {
      this.printTable = function () {
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
    $("#show-emp").on("click", function () {
      $("#ModalUP").modal({ backdrop: false, keyboard: false })
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