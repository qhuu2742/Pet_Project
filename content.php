<?php
include 'connect.php';
$sql = "select * from tin_tuc";
$result = mysqli_query($connect, $sql);
?>

<div id="content">
    <?php foreach ($result as $each) : ?>


    <div class="col1-3 element home tag2">
        <div class="images"><img src="images/pic08.jpg" alt="" /></div>
        <div class="white-bottom grey-area-last teaser">
            <h2><a href="view_details.php?ma=<?php echo $each['ma'] ?>"><?php echo $each['tieu_de'] ?></a></h2>
            <p class="small below-h3">by Admin</p>
            <p><?php echo substr($each['noi_dung'],0,50) ?>...</p>
            <div class="grey-area last smaller clearfix">
                <p class="small"><span class="alignleft">Nov 26, 2013</span> <span class="alignright"><a href="view_details.php?ma=<?php echo $each['ma'] ?>">Read More</a></span></p>
            </div>
        </div>
    </div>

</div>

<?php endforeach; ?>
<?php mysqli_close($connect)?>
