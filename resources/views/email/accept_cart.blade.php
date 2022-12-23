<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
   <h1>Thư mời gặp trao đổi mua bán xe!</h1>
     <h3>Tên sản phẩm:{{ $information->title }}</h3>
     <h3>Vào lúc:{{ $time }}, ngày {{ $mailData->date }}</h3>
     <h3 style="color: blue;"><i>Địa chỉ:<a href="{{ $address }}"></a><i>{{ $address }}</b></i></i></h3>
     <h3>SDT: {{ $phone }}</h3>
    <h3 style="color: firebrick;"><i class="bi bi-arrow-through-heart-fill">Cảm ơn bạn đã tin tưởng ủng hộ!</i></h3>
</body>
</html>