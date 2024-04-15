<?php
include_once('model/ketnoi.php');
include_once('model/mQuanLiSanPham.php');
if (isset($_POST['submit'])) {
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $mahieugiay = $_POST['mahieugiay'];

    $fileName = '';
    
    if (!empty($_FILES['img']['name'])) {
                    $file = $_FILES['img'];
                    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
                    $fileName = time() . "." . $extension;    

                    $fileTmpName = $file['tmp_name'];
                    $fileSize = $file['size'];
                    $fileError = $file['error'];
                    $fileType = $file['type'];


                    if ($fileError !== 0) {
                        echo '<h4 class="err">Lỗi khi tải file lên. Vui lòng thử lại</h4>';
                        exit();
                    }
                    if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                        echo '<h4 class="err">File nhập vào không phải hình ảnh!</h4>';
                        exit();
                    }
            
                    $targetDir = "img/";
                    $targetFilePath = $targetDir . $fileName;
                    if (!move_uploaded_file($fileTmpName, $targetFilePath)) {
                        echo '<h4 class="err">Lỗi khi di chuyển file đến thư mục đích.</h4>';
                       exit();
                    }
                }

    if (empty($tensp) || empty($gia) || empty($mahieugiay) || empty($fileName)) {
        echo '<h4 class="err">Vui lòng điền đầy đủ thông tin!</h4>';
        exit();
    } elseif (!is_numeric($gia) || $gia <= 0) {
        echo '<h4 class="err">Giá sản phẩm không đúng! </h4>';
        exit();
    }

    $xulySanPham = new  MQuanliSanPham();
    $success = $xulySanPham->themSanPham($tensp, $gia, $mahieugiay, $fileName);

    if ($success) {
        echo "<script>alert('Thêm sản phẩm thành công!')</script>";
    } else {
        echo "<script>alert('Thêm sản phẩm không thành công!')</script>";
    }
}
?>

<?php

