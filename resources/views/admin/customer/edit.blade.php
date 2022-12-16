@if (Auth::user())
@if (Auth::user()->username =="anhvt.21it@vku.udn.vn")
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chỉnh sửa khách hàng | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Main CSS-->
  @include("admin.layouts.lib")
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script>

    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#a2d2ff');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #a2d2ff;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/customer"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
        src="https://vku.udn.vn/uploads/no-image.png" width="50px"
        alt="User Image">
      <div>

        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item  " href="/manager"><i
                  class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh
                  thu</span></a>
      </li>
      <li><a class="app-menu__item active" href="/customer"><i class='app-menu__icon bx bx-task'></i><span
                  class="app-menu__label">Quản lý người dùng</span></a></li>
      <li><a class="app-menu__item" href="post"><i class='app-menu__icon bx bx-run'></i><span
                  class="app-menu__label">Quản lý bài đăng
              </span></a></li>
  </ul>
  </aside>
  <main class="app-content">
    @if ($errors->any())
  <div>
      @foreach ($errors->all() as $error)
          <h3 style="color: red;">
           {{ $error }}
      </h3>
      @endforeach
  </div>
     
 @endif
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách khách hàng</li>
        <li class="breadcrumb-item"><a href="#">Chỉnh Sửa Khách Hàng</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Chỉnh Sửa Khách Hàng</h3>
          <div class="tile-body">
            <!-- <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                      class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
              </div>

            </div> -->
            <form class="row" action="/customer/{{ $customer->user_id }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              {{-- <div class="form-group col-md-4">
                <label class="control-label">ID nhân viên</label>
                <input class="form-control" type="text">
              </div> --}}
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" name="name" type="text" value="{{ $customer->name }}" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" name="user" type="text" value="{{ $customer->username }}" required>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" name="phone" type="text" value="{{ $customer->phone }}" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" name="birthday" value="{{ $customer->birthday }}" type="date">
              </div>
      
              

              <div class="form-group col-md-3">
                <label class="control-label">Giới tính</label>
                <select class="form-control" id="exampleSelect2" name="gender"  required>
                  <option>{{ $customer->gender }} </option>
                  <option id="nam" >Nam</option>
                  <option id="nu">Nữ</option>
                </select>
              </div>
               
              <div class="form-group  col-md-3">
                <label class="control-label">Địa chỉ</label>
                <input class="form-control" type="text" name="address" value="{{ $customer->address }}" required>
              </div>
              

              <div class="form-group col-md-12">
                <label class="control-label">Avatar</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload"  onchange="readURL(this);"/>
                  <img class="img-card-person" id="edit_image" src="{{ url("admin/csdl/nguoidung/") }}{{ "/" }}{{ $customer->image }}" alt="" style="width:20%;height:100%;float:left;">
                </div>
                <div id="thumbbox">
                  <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:">
                  
                  </a>
                </div>
                <div id="boxchoice">
                 
                  <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                  <p style="clear:both"></p>
                </div>

              </div>

              

          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="{{ route('customer.index') }}">Hủy bỏ</a>
        </div>
    </form>
  </main>
  

  <!--
 
-->
{{-- ẩn ảnh --}}
<script language="javascript">

  document.getElementById("uploadfile").onclick = function () {
      document.getElementById("edit_image").style.display = 'none';
  };

</script>
</body>

</html>
@else
    <h1>Bạn không có quyền truy cập trang này!</h1>
@endif
@else
<h1>Bạn không có quyền truy cập trang này!</h1>
@endif
