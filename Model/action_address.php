<?php 
         function Add_Address_User($id_user,$name_receiver,$phone_receiver,$address_receiver,$list_address_user){

            if(empty($list_address_user)){
                $sql="INSERT INTO `dia_chi`( `id_kh`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`,`status`) VALUES ('$id_user','$name_receiver','$phone_receiver','$address_receiver',1)";
                pdo_execute($sql);
            }else{
                $sql="INSERT INTO `dia_chi`( `id_kh`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`) VALUES ('$id_user','$name_receiver','$phone_receiver','$address_receiver')";
                pdo_execute($sql);
            }
            
        }
        
        function Load_All_Address($id_user){
            $sql = "SELECT `id_dia_chi`, `id_kh`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `status` FROM `dia_chi` WHERE `id_kh` = '$id_user'";
            return pdo_query($sql);
        }
    
        function Address_Checked($id_user){
            $sql ="SELECT * FROM  `dia_chi` WHERE `id_kh` = '$id_user' AND `status` = 1";
            return pdo_query_one($sql);
        }

        function Delete_Address($id_dia_chi){
            $sql= "DELETE  FROM `dia_chi` WHERE `id_dia_chi`= '$id_dia_chi' ";
            pdo_query_one($sql);
        }

        function Status_Address($id_dia_chi){
            $sql = "SELECT * FROM `dia_chi` WHERE `id_dia_chi` = '$id_dia_chi'";
            return pdo_query_one($sql);
        }
        
        function Change_Status_Address($id_dia_chi, $status,$id_user){
            if($status === 1){
                $sql_1 = "UPDATE `dia_chi` SET `status`= 0 WHERE `id_dia_chi` = '$id_dia_chi'";
                pdo_query_one($sql_1);
                $sql_2 = "UPDATE `dia_chi` SET `status`= 0 WHERE `id_dia_chi` != '$id_dia_chi' AND `id_kh` ='$id_user'";
                pdo_query($sql_2);
            }else{
                $sql_1="UPDATE `dia_chi` SET `status`= 1 WHERE `id_dia_chi` = '$id_dia_chi'";
                pdo_query_one($sql_1);
                $sql_2 = "UPDATE `dia_chi` SET `status`= 0 WHERE `id_dia_chi` != '$id_dia_chi' AND `id_kh` ='$id_user'";
                pdo_query($sql_2);
            }
        }


?>