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
        p {
            margin-bottom: 100px;
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
            color: #333; /* Màu mặc định của văn bản */
        }
        .brand:hover {
            color: blue; /* Màu xanh khi hover */
            transform: scale(1.1); /* Phóng to văn bản khi hover */
        }
        .brand:focus {
            background-color: yellow; /* Màu nền khi được chọn */
            outline: none; /* Loại bỏ viền khi được chọn */
        }
        .menu {
            display: block;
            margin:  0 auto;
            
        }
    </style>
</head>
<body>
    <table border="1" width="80%" align="center">
        <tr style="background-color:#4aa14c;">
            <td colspan="2">
                <h2>Shoes Shop</h2>
            </td>
           
        </tr>
        <tr>
            <td>
                <form action="" method="POST">
                    <a href="?trangchu" name="trangchu" style="font-weight: 700;">Trang chủ</a>               
                    <a href="quanly.php" name="quanli" style="margin-left: 20px; font-weight: 700">Quản Lí</a>
                </form>
            </td>
            

            <td>
            

            <form action="<?php echo"index.php? TenGiay=" ?>" method="POST">            
                <input type="search" placeholder="Nhập tên sản phẩm muốn tìm" name="search" style="display: flex; float:right; margin-right: 10px;">
                <input type="submit" value="Search" name="btnsubmit" style="display: flex; float:right; margin-right: 10px;">
            </form>
            <form action="index.php?Gia=search" method="POST">   
                <input type="number" name="giamax" min="0" placeholder="Giá tối đa" style="display: flex; float:right;margin-right: 10px;">
                <input type="number" name="giamin" min="0" placeholder="Giá tối thiểu" style="display: flex; float:right;">

                <input type="submit" value="Search" name="searchbygia" style="margin:0; padding: 1px;background-color: #218cde; display: flex; float:right; margin-right: 10px;">         
            </form>
            </td>
        </tr>
        <tr>
            <td width="25%">
            
            <?php
    
    
        

        if(!isset($_POST['quanli'])){
            include_once("controller/ctrThuonghieu.php");
        $p = new CThuongHieu();
        $tblSP = $p->getAllTH();
        if ($tblSP === -1) {
            echo "error";
        } elseif (!$tblSP) {
            echo "0 result";
        } else {
            echo '<div style="position:Absolute; display:block; top: 150px;">';
            echo '<h4 class="brand" style="margin-bottom:-2px ;"> <a href="index.php">Tất Cả</a> </h4>'.'<br>';
            $dem = 0;
            
            while ($r = $tblSP->fetch_assoc()) {
                echo "<h4 class='brand menu'><a href='index.php?HieuGiay=".$r["IDHieuGiay"]."'>".$r["HieuGiay"]."</a></h4>" . "<br>";
            }
            echo '</td>';
            echo '</div>';
        }

        }else {
           
            if ($tblSP === -1) {
                echo "error";
            } elseif (!$tblSP) {
                echo "0 result";
            } else {
               
              
                
                while ($r = $tblSP->fetch_assoc()) {
                    echo "<h4 class='brand'><a href='index.php?bang=".$r[0]."'>".$r[0]."</a></h4>" . "<br>";
                }
                echo '</td>';
            }
        }
    

    
    
    
   
?>

            <h3>
              
            </td>
            <td width="75%">
