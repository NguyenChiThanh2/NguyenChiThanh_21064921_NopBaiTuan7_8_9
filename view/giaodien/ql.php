<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, h2, h3 {
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        input[type="search"], input[type="submit"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .image-container {
            text-align: right;
        }
        .image-container img {
            display: inline-block;
            max-width: 100%;
            height: auto;
        }
        img:hover{
            transform: scale(1.1) ;
        }
        .brand {
            transition: all 0.3s ease;
            color: #333;
        }
        .brand:hover {
            color: blue;
            transform: scale(1.1);
        }
        .brand:focus {
            background-color: yellow; 
            outline: none; 
        }
    </style>
</head>
<body >
    <table border="1" width="80%" align="center" style="position: relative;margin-top: 19px;">
    <tr style="background-color:#4aa14c;">
        
            <td colspan="2">
                <h2>Shoes Shop</h2>
            </td>
        </tr>
        <tr>
            <td style="margin: bottom 10px;">
            <form action="" method="POST">
                <a href="index.php" name="trangchu" style="font-weight: 700;">Trang chủ</a>
                <a href="?quanli" name="quanli" style="margin-left: 20px;  font-weight:700; ">Quản Lí</a>
                
                </form>
            </td>
            <!-- <form action="<?php echo"index.php? TenGiay=" ?>" method="POST">
            <td style><input type="search" name="search" style="display: flex; float:right; margin-right: 10px;">
            <input type="submit" value="Search" name="btnsubmit" style="display: flex; float:right; margin-right: 10px;">
            </form> -->
        </td>
        
        </tr>
        <tr>
            <td width="25%">
                <div style="position:Absolute;margin-bottom: 10px; top: 140px;">
                <h3><a href="quanly.php?page=qlsp">Quản lý Thương Hiệu</a></h3>
                <h3><a href="quanly.php?page=qlct">Quản lý sản phẩm</a></h3>
                </div>
            <h3>
              
            </td>
            <td width="75%">
                
            <?php
            if(!isset($_SESSION["dangnhap"])) {
                include_once('view/dangnhap/index.php');
               
            } 
            
            else {
               

                echo '<div style="text-align: right;"><button name="dangxuat" style="background:red; padding:5px; border-radius:5px;"><a href="view/dangxuat/index.php" style="color:white;">Đăng Xuất</a></button></div>';


                if(isset($_GET["page"])) {
                    if($_GET["page"] == "qlct") {
                        include_once("view/quanli/index.php");
                    } elseif($_GET["page"] == "qlsp") {
                        include_once("view/ThuongHieu/index.php");
                    } elseif($_GET["page"] == "addsp") {
                        include_once("view/themSP/index.php");                       
                    } else {
                        include_once("view/suaSP/index.php");   
                    }
                }else 
                {
                    echo '<h2 style="padding-bottom:50px;s">Chào mừng đến với trang quản lí</h2>';
                }
            }
            
           
        
               

            ?>