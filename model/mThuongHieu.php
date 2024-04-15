<?php
    include_once('ketnoi.php');
    class MThuongHieu{
        public function selectAllTH(){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "select * from hieugiay";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 

            }
            
        }
    }


?>