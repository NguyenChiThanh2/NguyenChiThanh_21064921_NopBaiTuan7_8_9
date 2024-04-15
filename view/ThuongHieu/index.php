<?php
    include_once("controller/ctrThuongHieu.php");
    $p = new CThuongHieu();
    $tblSP = $p->getAllTH();
    if($tblSP == -1){
        echo 'erro';
    }elseif(!$tblSP){
        echo '0 results';
    }else{
        echo '<h2>Quản Lí Thương Hiệu</h2>';
        echo '<table> 
        <tr>
            <th>ID thương hiệu</th>
            <th>Tên thương hiệu</th>
            <th>Ghi chú</th>
        </tr>';
        while($r = $tblSP -> fetch_assoc()){

            echo "
                <tr>
                    <td>
                        ". $r['IDHieuGiay']."
                    </td>
                    <td>
                        ".$r['HieuGiay']."
                    </td>
                    <td>
                        ".$r['GhiChu']."
                    </td>
                </tr>
            ";
        }
        echo "</table>";
       
    }
        

?>
