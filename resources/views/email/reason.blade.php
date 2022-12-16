<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <h1 style="color: red">Đơn hàng của bạn đã bị hủy!</h1>
   <h2>Thông tin đơn hàng của bạn</h2>
     <table border="1">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ngày đặt hàng</th>
                <th>Giá 1 sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr style="text-align: center;">
                <td>{{ $information->title }}</td>
                <td>{{ $mailData->date }}</td>
                <td>{{ $information->price }}VND</td>
                <td>{{ $mailData->amount }}</td>
                <td>{{ $mailData->total }}VND</td>
            </tr>
        </tbody>
     </table>
     <h2 style="color: red">Lý do: {{ $reason }} </h2>
</body>
</html>