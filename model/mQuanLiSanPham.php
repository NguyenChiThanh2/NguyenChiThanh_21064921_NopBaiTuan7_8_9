    <?php
        include_once('ketnoi.php');
        class MQuanliSanPham{
            public function selectAllSPGiay(){
                $p = new clsKetNoi();
                $con = $p->moKetNoi();
                if($con){
                    $str = "SELECT *FROM giay";
                    
                    $tblSP = $con->query($str);
                    $p->dongKetNoi($con);
                    return $tblSP;
                }else{
                    return false; 

                }
                
            }
            public function selectGiaybyID($id = ''){
                $p = new clsKetNoi();
                $con = $p->moKetNoi();
                if($con){
                    $str = "SELECT * FROM giay where IDGiay = $id";
                    
                    $tblSP = $con->query($str);
                    $p->dongKetNoi($con);
                    return $tblSP;
                }else{
                    return false; 

                }
                
            }

            public function selectAllSPHieuGiay(){
                $p = new clsKetNoi();
                $con = $p->moKetNoi();
                if($con){
                    $str = "SELECT * FROM hieugiay ";
                    
                    $tblSP = $con->query($str);
                    $p->dongKetNoi($con);
                    return $tblSP;
                }else{
                    return false; 
                    //khong the ket noi den csdl
                }
                
            }

            public function selectAllSPByHieuGiayQuanLi($HieuGiay){
                $p = new clsKetNoi();
                $con = $p->moKetNoi();
                
                if($con){
                    $str = "select * from giay where HieuGiay = $HieuGiay";
                    $tblSP = $con->query($str);
                    $p->dongKetNoi($con);
                    return $tblSP;
                }else{
                    return false; 
                    //khong the ket noi den csdl
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
                    //khong the ket noi den csdl
                }
                
            }
            //mQLSP
           public function themSanPham($tensp, $gia, $mahieugiay, $fileName) {
            $p = new clsKetNoi();
            $con = $p->moKetNoi();

            if (!$con) {
                die('Không thể kết nối đến cơ sở dữ liệu!');
            }

            $sql = $con->prepare("INSERT INTO giay (TenGiay, Gia, HieuGiay, HinhAnh) VALUES ('$tensp', '$gia', '$mahieugiay', '$fileName')");
            $success = $sql->execute();

            $sql->close();

            $p->dongKetNoi($con);

            return $success;
        }

        public function xuatdulieu($sql)
    {
        $arr = array();
        $p = new clsKetNoi();
        $con = $p->moKetNoi();
        $result=$con->query($sql);
        if($result->num_rows)
        {
            while($row=$result->fetch_assoc())
                $arr[]=$row;
            return $arr;
        }
        else
            return 0;
    }

        public function DeleteSP($id){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "Delete from giay where IDgiay='$id'  ";
                
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                //khong the ket noi den csdl
            }
            
        }   
        public function suaSanPham($idgiay, $tengiay, $gia, $thuonghieu,$filename) {
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
    
            if ($con) {
                $sql = "UPDATE `giay` SET `TenGiay` = '$tengiay', `Gia` = '$gia', `HieuGiay` = '$thuonghieu', `HinhAnh` = '$filename' WHERE `giay`.`IDGiay` = '$idgiay'";

                //$sql = "UPDATE giay SET TenGiay = '$tengiay', Gia = '$gia', HieuGiay = '$thuonghieu' ,HinhAnh = '$filename' WHERE giay.IDGiay = '$idgiay'";
                $success = $con->query($sql);

                $p->dongKetNoi($con);
                return $success;
            } else {
                return false; 

            }
        }
        public function dangnhaptaikhoan($username,$password)
        {
        $password=md5($password);
        $sql="select iduser from taikhoan where username='$username' and password='$password'";
        $p = new clsKetNoi();
        $con = $p->moKetNoi();
        $result=$con->query($sql);
        if($result->num_rows)
        {
            $row=$result->fetch_assoc();
            return 1;
        }
        else
            return 0;
        
        
        }


        
        }
    ?>