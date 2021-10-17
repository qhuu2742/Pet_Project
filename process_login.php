<?php

$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

include "connect.php";

$sql = "select * from khach_hang
where email = '$email' and mat_khau = '$mat_khau'";
$result = mysqli_query($connect, $sql);

$dem_ket_qua = mysqli_num_rows($result);

if ($dem_ket_qua==1){
    session_start();
    $each = mysqli_fetch_array($result);

    $_SESSION['ma'] = $each['ma'];
    $_SESSION['ten'] = $each['ten'];

    if (isset($_POST['ghi_nho'])){
        setcookie('ma',$each['ma'], time() + 60 * 60 * 24 * 60);
        setcookie('ten',$each['ten'], time() + 60 * 60 * 24 * 60);
    }

        header("location:index.php");
}else{
    header("location:form_login.php?error=Thông tin đăng nhập sai!");
}