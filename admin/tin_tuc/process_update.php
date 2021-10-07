<?php
$ma = $_POST['ma'];
$tieu_de = $_POST['tieu_de'];
$noi_dung = $_POST['noi_dung'];

require '../../connect.php';

$sql = "update tin_tuc
set 
tieu_de = '$tieu_de',
noi_dung = '$noi_dung'
where  
ma = '$ma';
";

mysqli_query($connect, $sql);
mysqli_close($connect);