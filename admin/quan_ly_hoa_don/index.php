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
include '../../connect.php';
$sql = "select 
hoa_don.*,
khach_hang.ten,
khach_hang.dia_chi,
khach_hang.sdt
from hoa_don
join khach_hang on  khach_hang.ma = hoa_don.ma_khach_hang
ORDER BY ma desc";
$result = mysqli_query($connect, $sql);
?>
<table border="1" width="100%">
    <tr>
        <th>Thời gian</th>
        <th>Tình trạng</th>
        <th>Thông tin người nhận</th>
        <th>Thông tin người đặt</th>
        <th>Thao tác</th>
        <th>Xem</th>
    </tr>
<?php foreach ($result as $each): ?>
    <tr>
        <td> <?php echo date_format(date_create($each['thoi_gian_mua'] ), 'd-m-Y H:i:s') ?> </td>

        <td>
            <?php
            if ($each['tinh_trang']==1) {
                echo 'Đang chờ duyệt';
            }elseif ($each['tinh_trang']==2){
                echo 'Đã duyệt';
            }else{
                echo 'Đã hủy';
            }
            ?>
        </td>

        <td>
            <?php echo $each['ten_nguoi_nhan']; ?>
            <br>
            <?php echo $each['dia_chi_nguoi_nhan']; ?>
            <br>
            <?php echo $each['sdt_nguoi_nhan']; ?>
        </td>

        <td>
            <?php echo $each['ten']; ?>
            <br>
            <?php echo $each['sdt']; ?>
            <br>
            <?php echo $each['dia_chi']; ?>
        </td>
        <td>
            <?php if ($each['tinh_trang']==1){ ?>
            <a href="update_tinh_trang.php?ma=<?php echo $each['ma']; ?>&tinh_trang=2">Duyệt</a>
            <br>
            <a href="update_tinh_trang.php?ma=<?php echo $each['ma']; ?>&tinh_trang=3">Hủy</a>
            <?php } ?>
        </td>
        <td>
            <a href="xem_chi_tiet.php?ma=<?php echo $each['ma']; ?>">Xem chi tiết</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
</body>
</html>
