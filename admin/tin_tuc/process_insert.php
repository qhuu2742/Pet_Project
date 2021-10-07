<?php
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];

include '../../connect.php';

$sql = "insert into tin_tuc(tieu_de, noi_dung)
values ('$tieu_de', '$noi_dung')";

mysqli_query($connect, $sql);
mysqli_close($connect);

header('location:index.php'); // điều hướng về index.php