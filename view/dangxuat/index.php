<?php
session_start(); // Bắt đầu session

session_destroy();

// Chuyển hướng người dùng đến trang chủ
header('Location: ../../index.php');

?>
