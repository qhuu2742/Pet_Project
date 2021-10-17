<?php session_start(); ?>
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
include 'connect.php';
$thu_muc_anh = 'image/';

$tong = 0;
if (!empty($_SESSION['gio_hang'])){
?>
<table border="1" width="100%">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng</th>
        <th>Thao tác</th>
    </tr>
    <?php foreach ($_SESSION['gio_hang'] as $ma_san_pham => $so_luong): ?>
        <?php
        $sql = "select * from san_pham where ma = '$ma_san_pham'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        ?>
        <tr>
            <td><?php echo $each['ten']; ?></td>
            <td><img src="<?php echo $thu_muc_anh . $each['anh']?>" alt="" height="80"></td>
            <td>
                <a href="thay_doi_so_luong_san_pham_trong_gio_hang.php?ma=<?php echo $ma_san_pham ?>&kieu=tru">-</a>
                <?php echo $so_luong; ?>
                <a href="thay_doi_so_luong_san_pham_trong_gio_hang.php?ma=<?php echo $ma_san_pham ?>&kieu=cong">+</a>
            </td>
            <td><?php echo $each['gia']; ?></td>
            <td>
                <?php echo $each['gia'] * $so_luong; ?>
                <?php $tong += $each['gia'] * $so_luong; ?>
            </td>
            <td><a href="xoa_san_pham_theo_gio_hang.php?ma=<?php echo $ma_san_pham ?>">Xóa</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<h1>Tổng: <?php echo $tong?> </h1>
<br>
<a href="xoa_gio_hang.php">Xóa hết giỏ hàng</a>
<h1>
        Thông tin người nhận
</h1>
<?php

$ma = $_SESSION['ma'];
$sql = "select * from khach_hang where ma = '$ma'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
<form action="process_dat_hang.php" method="post">
        Tên: <input type="text" name="ten_nguoi_nhan" value="<?php echo $each['ten'] ?>">
        <br>
        SĐT: <input type="number" name="sdt_nguoi_nhan" value="<?php echo $each['sdt'] ?>">
        <br>
        Địa chỉ: <input type="text" name="dia_chi_nguoi_nhan" value="<?php echo $each['dia_chi'] ?>">
        <br>
        <button>Đặt hàng</button>
</form>
<?php } else{ ?>
    <h1>Chưa có hàng</h1>
    <a href="index.php">Quay lại mua hàng</a>
<?php } ?>
</body>
</html>