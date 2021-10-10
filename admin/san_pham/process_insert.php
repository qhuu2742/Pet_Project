<?php

$ten = $_POST['ten'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$anh = $_FILES['anh'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

$thu_muc_anh = '../../image/';
$duoi_anh = explode('.', $anh['name'])[1];
//print_r($anh['name']);
//die();

$ten_anh = time() . '.' . $duoi_anh;
//print_r($ten_anh);
//die();
$duong_dan_anh = $thu_muc_anh . $ten_anh;
move_uploaded_file($anh['tmp_name'], $duong_dan_anh); // tmp_name là tên lưu đường dẫn ảnh mặc định, ta di chuyển từ đó sang đường dẫn của mình

include '../../connect.php';

$sql = "insert into san_pham(ten, gia, mo_ta, anh, ma_nha_san_xuat)
values('$ten', '$gia', '$mo_ta', '$ten_anh', '$ma_nha_san_xuat')";

mysqli_query($connect, $sql);
mysqli_close($connect);
header('location:index.php');