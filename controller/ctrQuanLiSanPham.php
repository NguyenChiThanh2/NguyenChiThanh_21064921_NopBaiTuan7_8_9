    <?php
        include_once('model/mQuanLiSanPham.php');
        class CQuanLiSanPham{
            public function getAllSPGiay(){
                $p= new MQuanliSanPham();
                $tblSP = $p->selectAllSPGiay();
                if(!$tblSP){
                    return -1;
                }else{
                    if($tblSP->num_rows >0)
                        return $tblSP;
                    else
                        return 0; 
                }
            }

            public function getspbyID($id){
                $p = new MQuanliSanPham();
                $tblSP = $p->selectGiaybyID($id); 
                if(!$tblSP){
                    return -1; 
                } else {
                    if($tblSP->num_rows > 0)
                        return $tblSP; 
                    else
                        return 0; 
                }
            }
            

            public function getAllSPHieuGiay(){
                $p= new MQuanliSanPham();

                $tblSP = $p->selectAllSPHieuGiay();
                if(!$tblSP){
                    return -1;
                }else{
                    if($tblSP->num_rows >0)
                        return $tblSP;
                    else
                        return 0; 
                }
            }
            public function getAllSByHieuGiayQuanLi($HieuGiay){
                $p= new MQuanliSanPham();

                $tblSP = $p->selectAllSPByHieuGiayQuanLi($HieuGiay);
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
                $p= new MQuanliSanPham();

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
                         
            
            public function deleteSP($id){
                $p= new MQuanliSanPham();

                $result = $p->DeleteSP($id);
                if (!$result) {
                    return -1; 
                } else {
                    return $result ? 1 : 0; 
                }
            }             
            public function xuatdulieu($id) {
                $p = new MQuanliSanPham();
                $result = $p->xuatdulieu($id);
                
                if ($result === -1) {
                    return -1;
                } elseif (empty($result)) {
                    return 0;
                } else {
                    return 1; 
                }
            }
            public function suaSanPham($id, $tengiay, $gia, $thuonghieu,$filename ){
                $p = new MQuanliSanPham();
                return $p->suaSanPham($id, $tengiay, $gia, $thuonghieu,$filename);
            }

            

            
            
            
            
        }


    ?>