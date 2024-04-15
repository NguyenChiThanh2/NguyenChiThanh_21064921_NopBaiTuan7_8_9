<?php 
        if(!$_SESSION["dangnhap"]){
            include_once('view/dangnhap/index.php');
                exit(); // Kết thúc kịch bản để ngăn chặn 
        }
            
        include_once("controller/ctrThuongHieu.php");
        $obj = new CThuongHieu();
       
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
        <h3>Nhập Thông Tin Giày Muốn Thêm</h3>
        <table class="table_add" bgcolor='white' align='center' style="text-align: center;" border='1' width='0%'>
            
            <tr>
                <th style="width: 10%;" >Tên Giày</th>
                <td><input  width="100%"  type="text" name="tensp" placeholder="Tên Sản Phẩm"></td>
            </tr>
            <tr>
                <th style="width: 15%;" >Giá</th>
                <td><input type="text" name="gia" placeholder="Giá"></td>
            </tr>
            <tr>
                <th style="width: 10%;" >Hiệu Giày</th>
                <td>
            
                    <select name="mahieugiay">
                        <option value="">--Chọn mã giày--</option>
                        <?php 
                        $result = $obj->getAllTH();
                        if ($result !== -1 && $result !== 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['IDHieuGiay'] . "'>" . $row['HieuGiay'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                 <th style="width: 10%;" >Hình ảnh</th>
                <td><input type="file" name="img" value="Ảnh sản phẩm"></td>
            </tr>
            <tr>
                <td colspan='2'><input type="submit" name="submit" value="Thêm"><input type="reset" name="reset" value="Làm mới "></td>
            </tr>
            
        </table>
        <?php  include_once ("view/themSP/xuly.php"); ?>
    </form>
    
</body>

</html>
