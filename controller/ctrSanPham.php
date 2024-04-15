<?php
    include_once('model/mSanPham.php');
    class CSanPham{
        public function getAllSP(){
            $p= new MSanPham();
            $tblSP = $p->selectAllSP();
            if(!$tblSP){
                return -1;
            }else{
                if($tblSP->num_rows >0)
                    return $tblSP;
                else
                    return 0; 
            }
        }
        public function getAllSByHieuGiay($HieuGiay){
            $p= new MSanPham();
            $tblSP = $p->selectAllSPByHieuGiay($HieuGiay);
            if(!$tblSP){
                return -1;
            }else{
                if($tblSP->num_rows >0)
                    return $tblSP;
                else
                    return 0; 
            }
        }

        public function getAllSBySearchTen($TenGiay){
            $p= new MSanPham();
            $tblSP = $p->selectAllSPSearchByTen($TenGiay);
            if(!$tblSP){
                return -1;
            }else{
                if($tblSP->num_rows >0)
                    return $tblSP;
                else
                    return 0; 
            }
        }
        public function getAllSBySearchGia($giamin, $giamax){
           
            $p= new MSanPham();
            $tblSP = $p->selectAllSPSearchByGia($giamin, $giamax);
            if(!$tblSP){
                return -1;
            }else{
                if($tblSP->num_rows >0)
                    return $tblSP;
                else
                    return 0; 
            }
        }
        
     }
     

?>


<?php
