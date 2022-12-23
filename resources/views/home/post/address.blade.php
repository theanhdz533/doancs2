<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin cá nhân</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    @include('admin.layouts.lib')
    <style>

    </style>
</head>
<div id="map" style="margin-top: 50px;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.7470405883555!2d108.250090314724!3d15.974581146210923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421088e365cc75%3A0x6648fdda14970b2c!2zNDcwIMSQxrDhu51uZyBUcuG6p24gxJDhuqFpIE5naMSpYSwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1670514168429!5m2!1svi!2s"
        width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<div style="display:flex;justify-content: center;">
    <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Thông tin về địa điểm</h4>
        </div>
        <form action="{{ route('address') }}" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control"
                        placeholder="" name="address" placeholder="Nhập địa chỉ cụ thể hoặc link google map"></div>
                <div class="col-md-12"><label class="labels">Thời gian</label><input type="time" class="form-control"
                        placeholder="" name="time"></div>
                <div class="col-md-12"><label class="labels">Ngày hẹn(Khách hẹn: {{ $date }} )</label><input
                        type="date" class="form-control" placeholder="" name="date"></div>
                <div class="col-md-12"><label class="labels">SĐT liên hệ</label><input
                        type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone"></div>
            </div>
            <input type="text" name="date_old" value="{{ $date }}" style="display: none">
            <input type="text" name="id" value="{{ $id_cart }}" style="display: none;">
            <input type="text" name="mailData" value="{{ $mailData }}" style="display: none;">
            

            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" style="color: blue"
                    type="submit">Xác nhận</button>
                <a href="/HomePost" style="background-color: red;margin-left:5px;color:aquamarine"
                    class="btn btn-primary profile-button">Hủy bỏ</a>
            </div>
        </form>

    </div>
</div>
