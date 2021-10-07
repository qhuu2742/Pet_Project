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
include 'connect.php';
$sql = "select * from tin_tuc where ma = '$ma'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>

<h1>
    <?php echo $each['tieu_de']; ?>
</h1>

<p>
    <?php echo $each['noi_dung']; ?>
</p>
</body>
</html>