<?php
$ma_san_pham = $_GET['ma']; // lấy mã sản phẩm trên thanh địa chỉ về

session_start();

// Kiểm tra xem có tồn tại hay không
if (isset($_SESSION['gio_hang'][$ma_san_pham])){
    $_SESSION['gio_hang'][$ma_san_pham]++;
}else{
    $_SESSION['gio_hang'][$ma_san_pham] = 1;
}

print_r($_SESSION);