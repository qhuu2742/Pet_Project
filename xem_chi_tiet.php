<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$ma = $_GET['ma'];
include "connect.php";
$sql = "select
hoa_don_chi_tiet.*,
san_pham.ten,
san_pham.anh
from hoa_don_chi_tiet
join san_pham on san_pham.ma = hoa_don_chi_tiet.ma_san_pham
where ma_hoa_don = '$ma'";
$result = mysqli_query($connect, $sql);
$thu_muc_anh = 'image/';
$tong_tat_ca = 0;
?>

<table border="1" width="100%">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng</th>
    </tr>
    <?php foreach ($result as $each): ?>
        <tr>
            <td>
                <?php echo $each['ten']; ?>
            </td>
            <td>
                <img src="<?php echo $thu_muc_anh . $each['anh']; ?>" alt="" height="100px">
            </td>
            <td>
                <?php echo $each['so_luong']; ?>
            </td>
            <td>
                <?php echo $each['gia']; ?>
            </td>
            <td>
                <?php echo $each['so_luong'] * $each['gia']; ?>
                <?php $tong_tat_ca += $each['so_luong'] * $each['gia']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<h1>Tổng tiền tất cả: <?php echo $tong_tat_ca; ?> VNĐ</h1>
</body>
</html>