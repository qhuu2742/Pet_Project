<?php

$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

include "../connect.php";

$sql = "select * from admin
where email = '$email' and mat_khau = '$mat_khau' ";
$result = mysqli_query($connect, $sql);

// Trước tiên cần đếm số kết quả trả về
$so_ket_qua = mysqli_num_rows($result);

if ($so_ket_qua==1){
    session_start();
    $each = mysqli_fetch_array($result); // dù cho kết quả trả về chỉ có 1 thì nó vẫn lưu lại là dạng mảng, nên cta cần phải lấy kết quả trả về đầu tiên bằng hàm fetch array
    $_SESSION['ma'] = $each['ma'];
    $_SESSION['ten'] = $each['ten']; // khi mà đã đăng nhập thì sẽ lưu lại tên trong phiên
    $_SESSION['cap_do'] = $each['cap_do'];
    $_SESSION['admin'] = 1;
    header("location:common/index.php");
}else{
    header("location:index.php?error=Thông tin đăng nhập sai!");
}