<?php
session_start();
session_destroy();

setcookie('ma','',-1);

header("location:index.php");
