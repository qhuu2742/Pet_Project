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
Quản lý sản phẩm:
<br>
<a href="view_insert.php">Thêm</a>

<?php
$thu_muc_anh = '../../image/';
include '../../connect.php';
$sql = "select san_pham.*, nha_san_xuat.ten as 'ten_nha_san_xuat'
from san_pham
join nha_san_xuat on nha_san_xuat.ma = san_pham.ma_nha_san_xuat";
$result = mysqli_query($connect, $sql);
?>

<table width="100%" border="1">
    <tr>
        <th>Tên</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Nhà sản xuất</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($result as $each): ?>
        <tr>
            <td><?php echo $each['ten']; ?></td>
            <td><?php echo $each['gia']; ?></td>
            <td><?php echo $each['mo_ta']; ?></td>
            <td><img height="200" src="<?php echo $thu_muc_anh . $each['anh'] ?>"></td>
            <td><?php echo $each['ten_nha_san_xuat'] ?></td>
            <td>
                <a href="view_update.php?ma=<?php echo $each['ma']?>">Sửa</a>
                <a href="delete.php?ma=<?php echo $each['ma']?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php mysqli_close($connect)?>
</body>
</html>