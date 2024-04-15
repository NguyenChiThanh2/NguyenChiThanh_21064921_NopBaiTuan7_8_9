<?php
include_once("controller/ctrQuanLiSanPham.php");
$p = new CQuanLiSanPham();

// Xử lý khi người dùng nhấn nút Xóa sản phẩm
if(isset($_POST["btXoa"])) {
    $idsp = $_POST["btXoa"];
    $result = $p->deleteSP($idsp);
    if ($result === 1) {
        echo "<script>alert('Xóa sản phẩm thành công')</script>";
        echo "<script>window.location.href = window.location.href;</script>"; // Làm mới trang sau khi xóa thành công
    } elseif ($result === -1) {
        echo "Lỗi xảy ra khi xóa sản phẩm";
    } else {
        echo "Không có sản phẩm được xóa";
    }
}

// Lấy dữ liệu sản phẩm dựa trên tham số truyền vào từ URL
if(isset($_REQUEST["HieuGiay"])) {
    $tblSP = $p->getAllSByHieuGiayQuanLi($_REQUEST["HieuGiay"]);
} elseif(isset($_REQUEST["search"])) {
    $tblSP = $p->getAllSBySearchTen($_REQUEST["search"]);
} else {
    $tblSP = $p->getAllSPGiay();
}

// Hiển thị dữ liệu sản phẩm
if($tblSP == -1) {
    echo 'error';
} elseif(!$tblSP) {
    echo '<p style="margin-bottom: 900px;">Không có sản phẩm</p> ';
} else {
    echo '<h2>Quản Lý Sản Phẩm</h2>';
    echo '<div style="text-align:right; margin-right: 90px; margin-bottom: 10px;">
            <button style="color:white; background-color: #4aa14c; padding: 8px 12px; border: 2px solid black; border-radius: 5px;">
                <a href="quanly.php?page=addsp" style="text-decoration: none; color: inherit;">Thêm sản phẩm</a>
            </button>
            </div>';

    echo '<table width="80%" align="center" style="text-align:center">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Tên</th>

                <th style="text-align: center;">Giá</th>
                <th style="text-align: center;">Hiệu Giày</th>
                <th style="text-align: center;">Hình ảnh</th>
                <th style="text-align: center;" colspan=2 >Thao Tác</th>
            </tr>';

            while($r = $tblSP->fetch_assoc()) {    
                echo "<tr>";
                echo  "<td>".$r["IDGiay"]."</td>";
                echo  "<td>".$r["TenGiay"]."</td>";
                echo  "<td>".number_format($r["Gia"]) ."vnđ </td>";
                echo "<td>".$r["HieuGiay"]."</td>";
                echo "<td> <img  src ='img/".$r["HinhAnh"]."' width ='50px' style='padding: 10px'>";
            
                echo '<td align="center">
                        <form method="post" onsubmit="return confirm(\'Bạn có chắc muốn xóa sản phẩm này không?\')">
                            <input type="hidden" name="btXoa" value="'.$r["IDGiay"].'">
                            <button type="submit">Xóa</button>
                        </form>
                      </td>';   
            
                echo '<td align="center">
                        <button>
                            <a href="quanly.php?page=edit&&id='.$r["IDGiay"].'">Sửa</a>
                        </button>
                      </td>';
                  
                echo "</tr>";   
            }
            
    echo "</table>";
}
?>
