<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin đơn hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    @include('admin.layouts.lib')
    <style>
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 15px;
            font-weight: 500;
        }


        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        @foreach ($customer as $data)
            <div class="row">

                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                            class="rounded-circle mt-5" width="100%"
                            @foreach ($product as $pro)
                                src="{{ url('admin/csdl/product/') }}{{ '/' }}{{ $pro->image }}"
                                @break @endforeach
                            style="border-radius: 0%!important;"><span class="font-weight-bold">Tên sản phẩm:
                            {{ $p->title }}</span><span class="text-black-50"></span><span>Người bán:
                            {{ $seller->name }} </span></div>
                </div>


                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Thông tin đơn hàng của bạn</h4>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6"><label class="labels">Họ và tên</label><input type="text"
                                    class="form-control" placeholder="first name" name="name"
                                    value="{{ $data->name }}" readonly></div>
                            <div class="col-md-6"><label class="labels">Giới tính</label><input type="text"
                                    class="form-control" name="gender" value="{{ $data->gender }}" readonly></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text"
                                    class="form-control" placeholder="" name="phone" value="{{ $data->phone }}"
                                    readonly></div>
                            <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text"
                                    class="form-control" placeholder="" name="address" value="{{ $data->address }}"
                                    readonly></div>
                            <div class="col-md-12"><label class="labels">Ngày sinh</label><input type="date"
                                    class="form-control" placeholder="" name="birthday" value="{{ $data->birthday }}"
                                    readonly></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span
                                class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;<a
                                    href="/HomePost">Quay lại</a> </span></div><br>
                        <div class="form-group col-md-12">
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Số lượng sản phẩm</label><input
                                        type="text" class="form-control" placeholder="" value="{{ $c->amount }}"
                                        readonly></div>
                                <div class="col-md-12"><label class="labels">Đơn Giá</label><input type="text"
                                        class="form-control" placeholder="" value="" id="money"  readonly>
                                     
                                    </div>
                                        <script>
                                            var x = {{ $c->total }};
                                            x = x.toLocaleString('it-IT', {
                                                style: 'currency',
                                                currency: 'VND'
                                            });
                                            document.getElementById('money').value = x;
                                            console.log(x);
                                        </script>
                                <div class="col-md-12"><label class="labels">Ngày mua hàng</label><input type="text"
                                        class="form-control" placeholder="" value="{{ $c->date }}" readonly></div>

                            </div>
                        </div>
                        <div id="thumbbox">
                            <img height="300" width="300" alt="Thumb image" id="thumbimage"
                                style="display: none" />
                            <a class="removeimg" href="javascript:">

                            </a>
                        </div>
                        <div id="boxchoice">

                            <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                            <p style="clear:both"></p>
                        </div>

                    </div>
                </div>
        @endforeach
    </div>
    </div>
    </div>
    </div>
    </div>
    
</body>

</html>
