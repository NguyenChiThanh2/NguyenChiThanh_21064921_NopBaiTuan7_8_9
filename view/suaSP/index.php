<?php 
    if(!$_SESSION["dangnhap"])
    {
        include_once('view/dangnhap/index.php');
                exit(); 
    }
        
    include_once("controller/ctrThuongHieu.php");
    $ob = new CThuongHieu();
    include_once("controller/ctrQuanLiSanPham.php");
    $obj = new CQuanLiSanPham();
    $result = $obj->getspbyID($_GET['id']);
    $row = $result->fetch_assoc();
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form_add {
            width: 70%;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }
        .table_add {
            width: 100%;
            border-collapse: collapse;
            
            border-radius: 5px;
        }
        table tr td {
            padding: 10px;
            vertical-align: top;
        }
        input[type="text"],
        select,
        input[type="file"],
        input[type="submit"] {
            width: calc(100% - 6px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        input[type="reset"] {
            background-color: #666;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        .err{
            margin-bottom: 20px; color:red;
            text-align: center;
        }
    </style>
</head>

<body>

    <form class="form_add" action="" method="POST" enctype="multipart/form-data">
        <h3>Nhập Thông Tin Giày Muốn Sửa</h3>
        <table class="table_add" bgcolor='white' align='center' style="text-align: center;" border='1' width='0%'>
            
            <tr>
                <th style="width: 10%;" >Tên Giày</th>
                <td><input  width="100%"  type="text" name="tensp" placeholder="Tên Sản Phẩm" value='<?php  echo $row['TenGiay']; ?>'></td>
            </tr>
            <tr>
                <th style="width: 15%;" >Giá</th>
                <td><input type="text" name="gia" placeholder="Giá" value='<?php  echo $row['Gia']; ?>'></td>
            </tr>
            <tr>
                <th style="width: 10%;" >Hiệu Giày</th>
                <td>
                <select name="mahieugiay">
    <?php 
        $result = $ob->getAllTH();
        if ($result !== -1 && $result !== 0) {
            while ($brand = $result->fetch_assoc()) {
                $selected = ($brand['IDHieuGiay'] == $row['HieuGiay']) ? "selected" : "";
                echo "<option value='" . $brand['IDHieuGiay'] . "' $selected>" . $brand['HieuGiay'] . "</option>";
            }
        }
    ?>
</select>

                </td>
            </tr>
            <tr>
                 <th style="width: 10%;" >Hình ảnh</th>
                <td><input type="file" name="img" ></td>
            </tr>
            <tr>
                <td colspan='2'><input type="submit" name="btnedit" value="Sua">
            </tr>
            
        </table>
        <?php  include_once ("view/suaSP/xuly.php"); ?>
    </form>
    
</body>

</html>
