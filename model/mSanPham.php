<?php
    include_once('ketnoi.php');
    class MSanPham{
        public function selectAllSP(){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "select * from giay";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                
            }
            
        }

        public function selectAllSPByHieuGiay($HieuGiay){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            
            if($con){
                $str = "select * from giay where HieuGiay = $HieuGiay";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                
            }
            
        }

        public function selectAllSPSearchByTen($TenGiay){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            
            if($con){
                $str = "select * from giay where TenGiay LIKE '%$TenGiay%'";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
               
            }
            
        }
        public function selectAllSPSearchByGia($giamin,$giamax){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            
            if($con){
                $str = "SELECT * FROM giay WHERE Gia BETWEEN $giamin AND $giamax";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                
            }
            
        }

        

        


 }


?>

