<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
   <h1>Thông tin đơn hàng của bạn</h1>
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
   
     <h3 style="color: blue;"><i>Chúng tôi sẽ chịu hoàn toàn chi phí vận chuyển và ký hợp đồng mua bán khi sản phẩm được giao tới tay bạn!</i></h3>
    <h3 style="color: firebrick;"><i class="bi bi-arrow-through-heart-fill">Cảm ơn bạn đã tin tưởng ủng hộ!</i></h3>
</body>
</html>