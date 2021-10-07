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
require '../../connect.php';
$sql = "select * from tin_tuc where ma = '$ma'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
<form action="process_update.php" method="post">
    <input type="hidden" name="ma" value="<?php echo $ma ?>">
    Tiêu đề <textarea name="tieu_de" cols="30" rows="10"><?php echo $each['tieu_de']?></textarea>
    <br>
    Nội dung <textarea name="noi_dung" cols="30" rows="10"><?php echo $each['noi_dung']?></textarea>
    <br>
    <button>Sửa</button>
</form>
<?php mysqli_close($connect); ?>
</body>
</html>