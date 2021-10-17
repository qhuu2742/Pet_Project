<?php
$thu_muc_anh = 'image/';
include 'connect.php';
$sql = "select * from san_pham";
$result = mysqli_query($connect, $sql);
?>

<div id="content">
    <?php foreach ($result as $each) : ?>


    <div class="col1-3 element home tag2">
        <div class="images"><img src="<?php echo $thu_muc_anh . $each['anh']?>" alt="" /></div>
        <div class="white-bottom grey-area-last teaser">
            <h2><a href="view_details.php?ma=<?php echo $each['ma'] ?>"><?php echo $each['ten'] ?></a></h2>
            <p class="small below-h3"><?php echo $each['gia']?> VNĐ</p>
            <p><?php echo substr($each['mo_ta'],0,50) ?>...</p>
            <div class="grey-area last smaller clearfix">
                <p class="small"><span class="alignleft"><?php echo date("Y/m/d") ?></span>
                    <?php if (isset($_SESSION['ma'])){ ?>
                    <span class="alignright"><a href="them_san_pham_vao_gio_hang.php?ma=<?php echo $each['ma'] ?>">Thêm vào giỏ hàng</a></span>
                    <?php } ?>
                    </p>
            </div>
        </div>
    </div>

</div>

<?php endforeach; ?>
<?php mysqli_close($connect)?>
