<ul>
    <li>
        <a href="../tin_tuc">Quản lý tin tức</a>
    </li>
</ul>
<ul>
    <li>
        <a href="../san_pham">Quản lý sản phẩm</a>
    </li>
</ul>
<?php if ($_SESSION['cap_do']==1) { ?>
<ul>
    <li>
        <a href="../quan_ly_admin">Quản lý admin</a>
    </li>
</ul>
<?php } ?>

<ul>
    <li>
        <a href="../common/logout.php">Đăng xuất</a>
    </li>
</ul>