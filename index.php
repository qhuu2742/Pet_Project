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

<?php
include 'connect.php';
$sql = "select * from tin_tuc";
$result = mysqli_query($connect, $sql);
?>

<?php foreach ($result as $each) { ?>
    <a href="view_details.php?ma=<?php echo $each['ma'] ?>">
    <h1>
        <?php echo $each['tieu_de'] ?>
    </h1>
    </a>
<?php } ?>

<?php mysqli_close($connect)?>
</body>
</html>