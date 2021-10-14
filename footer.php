<footer>
    <div class="container">
        <ul class="social clearfix alignleft">
            <li class="pinterest"><a href="#" onClick="return false">Visit our pinterest Account</a></li>
            <li class="dribble"><a href="#" onClick="return false">Visit our dribble Account</a></li>
            <li class="tweat"><a href="#" onClick="return false">Visit our twitter Account</a></li>
            <li class="instagram"><a href="#" onClick="return false">Visit our instagram Account</a></li>
        </ul>
        <?php if (empty($_SESSION)){ ?>
            <p class="small alignright">Xin chào bạn</p>
        <?php }else{ ?>
        <p class="small alignright">Xin chào bạn <?php echo $_SESSION['ten'] ?></p>
        <?php } ?>
    </div>
</footer>