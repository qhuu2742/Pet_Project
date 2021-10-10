<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="ppandp">
    <meta name="Description" content="FULLSCREEN – Photography Portfolio HTML5" />
    <title>Trang chủ</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/contact.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
    <!--[if gt IE 8]><!--><link href="css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /><!--<![endif]-->
    <!--[if !IE]> <link href="css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
    <!--[if gt IE 6]> <link href="css/styles-ie.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
    <link href="css/print.css" rel="stylesheet" type="text/css" media="print" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,600,800' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
$ma = $_GET['ma'];
include 'connect.php';
$sql = "select * from tin_tuc where ma = '$ma'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
<?php include 'header.php'; ?>


<?php include 'footer.php'; ?>
<h1>
    <?php echo $each['tieu_de']; ?>
</h1>

<p>
    <?php echo $each['noi_dung']; ?>
</p>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/retina.js" type="text/javascript"></script>
<!--<script src="js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>-->
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.load.js" type="text/javascript"></script>
<script src="js/jquery.isotope.perfectmasonry.js"></script>
<!--<script src="js/jquery.form.js" type="text/javascript"></script>
<script src="js/input.fields.js" type="text/javascript"></script>-->
<script src="js/responsive-nav.js" type="text/javascript"></script>
<script defer src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/image-hover_opacity1.js" type="text/javascript"></script>
<script src="js/scrollup.js" type="text/javascript"></script>
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/navi-slidedown.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>