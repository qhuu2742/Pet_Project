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
include "../../connect.php";
$sql ="select * from nha_san_xuat";
$result = mysqli_query($connect, $sql);
?>
<form action="process_insert.php" method="post" enctype="multipart/form-data">
    Tên: <input type="text" name="ten">
    <br>
    Giá: <input type="number" name="gia">
    <br>
    Mô tả: <textarea name="mo_ta" cols="30" rows="10"></textarea>
    <br>
    Ảnh: <input type="file" name="anh">
    <br>
    Nha san xuat:
    <select name="ma_nha_san_xuat">
        <?php foreach ($result as $each): ?>
        <option value="<?php echo $each['ma'] ?>">
            <?php echo $each['ten']; ?>
        </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Đăng</button>
</form>
<?php mysqli_close($connect); ?>
</body>
</html>