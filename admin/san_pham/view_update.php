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
$thu_muc_anh = '../../image/';
require '../../connect.php';
$sql_san_pham = "select * from san_pham where ma = '$ma'";
$sql_nha_san_xuat ="select * from nha_san_xuat";
$result_san_pham = mysqli_query($connect, $sql_san_pham);
$result_nha_san_xuat = mysqli_query($connect, $sql_nha_san_xuat);
$each_san_pham = mysqli_fetch_array($result_san_pham);
?>
<form action="process_update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ma" value="<?php echo $ma ?>">
    Tên: <input type="text" name="ten" value="<?php echo $each_san_pham['ten'] ?>">
    <br>
    Giá: <input type="number" name="gia" value="<?php echo $each_san_pham['gia'] ?>">
    <br>
    Mô tả: <textarea name="mo_ta" cols="30" rows="10" ><?php echo $each_san_pham['mo_ta'] ?></textarea>
    <br>
    Ảnh hiển thị hiện tại:
    <input type="hidden" name="anh_cu" value="<?php echo $each_san_pham['anh'] ?>">
    <img height="100" src="<?php echo $thu_muc_anh . $each_san_pham['anh'] ?>">
    <br>
    Muốn thay ảnh hiển thị? <input type="file" name="anh_moi">
    <br>
    Nha san xuat:
    <select name="ma_nha_san_xuat">
        <?php foreach ($result_nha_san_xuat as $each_nha_san_xuat): ?>
            <option value="<?php echo $each_nha_san_xuat['ma'] ?>"
            <?php
            if($each_nha_san_xuat['ma'] == $each_san_pham['ma_nha_san_xuat']) echo 'selected'; //chọn sẵn tên nhà sản xuất khi update
            ?>
            >
                <?php echo $each_nha_san_xuat['ten']; ?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Sửa</button>
</form>
<?php mysqli_close($connect); ?>
</body>
</html>