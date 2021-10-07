<?php
$ma = $_GET['ma'];
require '../../connect.php';

$sql = "delete from tin_tuc
where  
ma = '$ma'
";

mysqli_query($connect, $sql);
mysqli_close($connect);