<?php
$ma = $_POST['ma'];
$ten = $_POST['ten'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$anh = $_FILES['anh_moi'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

if($anh['size']==0){
    $ten_anh = $_POST['anh_cu'];
} else {
    $thu_muc_anh = '../../image/';
    $duoi_anh = explode('.', $anh['name'])[1];
    $ten_anh = time() . '.' . $duoi_anh;
    $duong_dan_anh = $thu_muc_anh . $ten_anh;
    move_uploaded_file($anh['tmp_name'], $duong_dan_anh);
}


include '../../connect.php';

$sql = "update san_pham
set
ten = '$ten',
gia = '$gia',
mo_ta = '$mo_ta',
anh = '$ten_anh',
ma_nha_san_xuat = '$ma_nha_san_xuat'    
where
ma = '$ma'";

mysqli_query($connect, $sql);
mysqli_close($connect);
header('location:index.php');