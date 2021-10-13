<?php

$ten = $_POST['ten'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$anh = $_FILES['anh'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];

$thu_muc_anh = '../../image/';

$duoi_anh = explode('.', $anh['name'])[1]; // cắt chuỗi tại dấu . và truyển chuỗi $anh['name] tại vị trí số 1 trong mảng
//print_r($anh['name']);
//die();

// $ten_anh = $anh['name']; Nếu lưu thế này sẽ sinh ra bug 'ghi đè', khi ta đăng hai ảnh khác nhau, nhưng anh số 2 cùng  tên ảnh số 1 thì ảnh số 1 sẽ bị ghi đè bởi ảnh số 2.
// Cách khác phục bug này đó là thay đổi tên ảnh khi insert vào bằng cách lấy thời gian insert ảnh bằng hàm time() sau đó nối với đuôi của ảnh bằng cách tách ra bởi hàm explode bên trên
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