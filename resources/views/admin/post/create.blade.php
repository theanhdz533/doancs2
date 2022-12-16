@if (Auth::user())
@if (Auth::user()->username =="anhvt.21it@vku.udn.vn")
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách đơn hàng | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <  @include('admin.layouts.lib')
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
      <li><a class="app-nav__item" href="/post"><i class='bx bx-log-out bx-rotate-180'></i> </a>

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
                  class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh
                  thu</span></a>
      </li>
      <li><a class="app-menu__item" href="/customer"><i class='app-menu__icon bx bx-task'></i><span
                  class="app-menu__label">Quản lý người dùng</span></a></li>
      <li><a class="app-menu__item active" href="post"><i class='app-menu__icon bx bx-run'></i><span
                  class="app-menu__label">Quản lý bài đăng
              </span></a></li>
  </ul>
  </aside>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Danh sách bài đăng</li>
          <li class="breadcrumb-item"><a href="#">Tạo Mới Bài Viết</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tạo Mới Bài Viết</h3>
            <div class="tile-body">
              <form class="row"  action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group  col-md-4">
                  <label class="control-label">Người Đăng</label>
                  <input class="form-control" type="text" value="anhvt.21it@vku.udn.vn" name="email">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Tiêu Đề</label>
                  <input class="form-control" type="text"  name="title">
                </div>
                <div class="form-group  col-md-4">
                    <label class="control-label">Nội Dung</label>
                    <textarea class="form-control" rows="4" name="content"></textarea>
                  </div>  
                <div class="form-group  col-md-4">
                  <label class="control-label">Loại Xe</label>
                  <input class="form-control" type="text" name="type_car">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Năm Sản Xuất</label>
                  <input class="form-control" type="date" name="year_of_manufacture">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Quãng Đường Đã Di Chuyển</label>
                  <input class="form-control" type="text" name="mileage">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Nhiên Liệu</label>
                  <input class="form-control" type="text" name="fuel" >
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Đông Cơ</label>
                  <input class="form-control" type="text" name="engine_size">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Mã Lực</label>
                  <input class="form-control" type="text" name="power">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Màu Sắc</label>
                  <input class="form-control" type="text" 	name="color">
                </div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Số Ghế</label>
                  <input class="form-control" type="text" name="seat_count">
                </div>
                <div class="form-group  col-md-4">
                    <label class="control-label">Giá</label>
                    <input class="form-control" type="text" name="price">
                  </div>
                  <div class="form-group  col-md-4">
                    <label class="control-label">Số Lượng Hàng</label>
                    <input class="form-control" type="number" name="count">
                  </div>
                  <div class="form-group  col-md-4">
                    <label class="control-label">Hãng Xe</label>
                    <input class="form-control" type="text" name="the_firm">
                  </div>
                  
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh </label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload[]" multiple onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                

              </div>
                
                
          </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="{{ route('post.index') }}">Hủy bỏ</a>
        </div>
        </form>
    </main>
  
  </body>
</html>
@else
    <h1>Bạn không có quyền truy cập trang này!</h1>
@endif
@else
<h1>Bạn không có quyền truy cập trang này!</h1>
@endif