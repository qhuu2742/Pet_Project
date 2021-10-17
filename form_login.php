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
Đăng nhập khách hàng:
<br>
<?php
if (isset($_COOKIE['ma'])){
    $ma = $_COOKIE['ma'];
    $ten = $_COOKIE['ten'];

    session_start();
    $_SESSION['ma'] =   $ma;
    $_SESSION['ten'] = $ten;

    header("location:index.php");
}
?>
<?php if (isset($_GET['error'])){ ?>
    <?php echo $_GET['error']; ?>
<?php } ?>
<form action="process_login.php" method="post">
    Email <input type="email" name="email">
    <br>
    Password <input type="password" name="mat_khau">
    <br>
    <input type="checkbox" name="ghi_nho">Ghi nhớ đăng nhập
    <br>
    <button>Đăng nhập</button>
</form>
</body>
</html>