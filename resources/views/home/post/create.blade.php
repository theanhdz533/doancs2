<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh sách đơn hàng | Quản trị Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    < @include('admin.layouts.lib') <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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

        <ul class="app-nav">


            <!-- User Menu-->
            <li><a class="app-nav__item" href="/"><i class='bx bx-log-out bx-rotate-180'></i> </a>

            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

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
                        <form class="row" action="{{ route('HomePost.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @foreach ($customer as $item)
                                @if (Auth::user()->user_id == $item->user_id)
                                    <div class="form-group  col-md-4">
                                        <label class="control-label">Người Đăng</label>
                                        <input class="form-control" value="{{ $item->username }}" name="email"
                                            readonly>
                                    </div>
                                @endif
                            @endforeach

                            <div class="form-group  col-md-4">
                                <label class="control-label">Tiêu Đề</label>
                                <input class="form-control" type="text" name="title" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Nội Dung</label>
                                <textarea class="form-control" rows="4" name="content" required></textarea>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Loại Xe(Mới/Cũ)</label>
                                <input class="form-control" type="text" name="type_car" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Năm Sản Xuất</label>
                                <input class="form-control" type="date" name="year_of_manufacture" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Quãng Đường Đã Di Chuyển</label>
                                <input class="form-control" type="text" name="mileage" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Nhiên Liệu</label>
                                <input class="form-control" type="text" name="fuel" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Kích Thước Động Cơ (CC)</label>
                                <input class="form-control" type="text" name="engine_size" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Mã Lực (HP)</label>
                                <input class="form-control" type="text" name="power" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Màu Sắc</label>
                                <input class="form-control" type="text" name="color"required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Số Ghế</label>
                                <input class="form-control" type="text" name="seat_count" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Giá</label>
                                <input class="form-control" type="text" id="money" name="price" required>
                            </div>
                            
                            <div class="form-group  col-md-4">
                                <label class="control-label">Số Lượng Hàng</label>
                                <input class="form-control" type="number" name="count" required>
                            </div>
                            <div class="form-group  col-md-4">
                                <label class="control-label">Hãng Xe</label>
                                <input class="form-control" type="text" name="the_firm" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label class="control-label">Ảnh </label>
                                <div id="myfileupload">
                                    <input type="file" id="uploadfile" name="ImageUpload[]" multiple
                                        onchange="readURL(this);" required />
                                </div>
                                <div id="thumbbox">
                                    <img height="300" width="300" alt="Thumb image" id="thumbimage"
                                        style="display: none" />
                                    <a class="removeimg" href="javascript:"></a>
                                </div>


                            </div>


                    </div>
                    <button class="btn btn-save" type="submit">Lưu lại</button>
                    <a class="btn btn-cancel" href="{{ route('HomePost.index') }}">Hủy bỏ</a>
                </div>
                </form>
    </main>

</body>

</html>
