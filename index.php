<?php 
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Document</title>
</head>
<body style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(235, 240, 247, 1));">

    <?php


        include_once("view/giaodien/header.php");
       
        include_once("view/SanPham/index.php");
               
        include_once("view/giaodien/footer.php");
        
    ?>
</body>
</html>
