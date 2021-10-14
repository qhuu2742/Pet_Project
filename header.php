<header id="wrapper">
    <div class="container clearfix">
        <h1 id="logo"><a href="index.html">MY FOLIO</a></h1>
        <!-- start navi -->
        <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
        <div id="options" class="clearfix">
            <ul id="main-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#" class="dead-link">Portfolio</a>
                    <ul class="other">
                        <li><a href="slideshow.html">Slideshow</a></li>
                        <li><a href="masonry.html">Masonry Grid</a></li>
                        <li><a href="slider.html">Slider</a></li>
                        <li><a href="classic.html">Classic</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html" class="current">Blog</a></li>
                <?php if (empty($_SESSION)) { ?>
                <li><a href="form_login.php">Đăng nhập</a></li>
                <?php }else{ ?>

               <li><a href="logout.php">Đăng xuất</a></li>

                <?php } ?>
            </ul>
            <ul id="homepage" class="option-set clearfix" data-option-key="filter">
                <li><a href="#filter=.home" class="selected">All</a>
                <li><a href="xem_gio_hang.php">Xem giỏ hàng</a></li>
                <li><a href="#filter=.tag2">Other Tag</a></li>
            </ul>
        </div>
        <!-- end nav -->
    </div>
</header>