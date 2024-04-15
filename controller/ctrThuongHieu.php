<?php
    include_once('model/mThuongHieu.php');
    class CThuongHieu{
        public function getAllTH(){
            $p= new MThuongHieu();
            $tblSP = $p->selectAllTH();
            if(!$tblSP){
                return -1;
            }else{
                if($tblSP->num_rows >0)
                    return $tblSP;
                else
                    return 0; 
            }
        }
        public function selectcongty($selectedId = null) {
            $result = $this->getAllTH(); // Gọi phương thức để lấy danh sách Thương hiệu từ model
        
            $options = ''; // Chuỗi chứa các tag option
        
            while($row = $result->fetch_assoc()) {
                // Tạo tag option cho mỗi công ty
                $selected = ($row['idcty'] == $selectedId) ? 'selected' : ''; // Chọn giá trị đã chọn trước đó
                $options .= '<option value="' . $row['idcty'] . '" ' . $selected . '>' . $row['tencty'] . '</option>';
            }
        
            return $options; 
        }

        
    }

?>
