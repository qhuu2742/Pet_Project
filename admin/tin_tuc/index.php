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
Quản lý tin tức:
<br>
<a href="view_insert.php">Thêm</a>
<?php
include '../../connect.php';
$sql = "select * from tin_tuc";
$result = mysqli_query($connect, $sql);
?>

<table width="100%" border="1">
    <tr>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($result as $each): ?>
    <tr>
        <td><?php echo $each['tieu_de']; ?></td>
        <td><?php echo $each['noi_dung']; ?></td>
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