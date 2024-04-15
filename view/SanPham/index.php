<?php
include_once("controller/ctrSanPham.php");
$p = new CSanPham();

if(isset($_REQUEST["HieuGiay"])) {
    $tblSP = $p->getAllSByHieuGiay($_REQUEST["HieuGiay"]);
} else if(isset($_REQUEST["search"])){
    $tblSP = $p->getAllSBySearchTen($_REQUEST["search"]);
} else if(isset($_REQUEST["searchbygia"]) && isset($_REQUEST["giamin"]) && isset($_REQUEST["giamax"])) {
    $tblSP = $p->getAllSBySearchGia($_REQUEST["giamin"],$_REQUEST['giamax']);

} else {
    $tblSP = $p->getAllSP();
}

if($tblSP == -1){
    echo 'Có lỗi xảy ra khi truy vấn cơ sở dữ liệu.';
} elseif($tblSP->num_rows == 0) {
    echo '<div style="margin-bottom: 300px;">Không có sản phẩm.</div>';
} else {
    echo '<h3>Sản Phẩm</h3>';
    echo "<table width='90%' align='center' style='text-align:center'>";
    echo "<tr>";
    $dem = 0;
    while($r = $tblSP->fetch_assoc()){
        echo "<td><img src='img/".$r["HinhAnh"]."' width='190px' style='padding: 10px'>"."<br>";
        echo $r["TenGiay"]."<br>";
        echo "<b>Giá bán:<b>".number_format($r["Gia"]) ."vnđ </td>";
        $dem++;
        if($dem % 4 == 0){
            echo "</tr><tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
}
?>
