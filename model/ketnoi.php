<?php
    class clsKetNoi{
        public function moKetNoi(){
            return mysqli_connect('localhost','root','','webgiay');
        }

            public function dongKetNoi($con){
            $con->close();
        }

    }
        
?>