<?php
session_start();
if (empty($_SESSION)){
    header("location:../index.php?error=Mày phải đăng nhập đã!");
}