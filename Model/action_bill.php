<?php
         function Add_Bill($id_user,$id_address,$note,$tong_tien,$option){
            $sql ="INSERT INTO `hoa_don`( `id_kh`, `id_dia_chi`, `ghi_chu`, `tong_gia`, `phuong_thuc`) VALUES ('$id_user','$id_address','$note','$tong_tien','$option')";
            pdo_execute($sql);
        }
        function Add_Bill_Detail($id_bill,$quantity,$gia,$img,$ten_sp,$id_sp){
            $sql ="INSERT INTO `hoa_don_chi_tiet`(`id_hoa_don`, `quantity`, `img`,`gia`,`ten_sp`,`id_sp`) VALUES ('$id_bill','$quantity','$img','$gia','$ten_sp','$id_sp')";
            pdo_execute($sql);
        }
        function Latest_Id($id_user){
            $sql ="SELECT MAX(id_hoa_don) AS latest_id FROM hoa_don WHERE `id_kh` ='$id_user'";
            return pdo_query_one($sql);
        }

        function Load_Bill_Transport($id_user){
            $sql ="SELECT `id_hoa_don`,`tong_gia` FROM `hoa_don` WHERE `id_kh` = '$id_user' AND `trang_thai` = 0";
            return pdo_query($sql);
        }
        function Load_All_Bill(){
            $sql ="SELECT h.id_hoa_don, h.phuong_thuc, h.tong_gia, h.ngay_tao, h.trang_thai, da.ten_nguoi_nhan, da.sdt_nguoi_nhan, da.dia_chi_nguoi_nhan, kh.ho_ten, kh.sdt FROM hoa_don h JOIN dia_chi da ON h.id_dia_chi = da.id_dia_chi JOIN khach_hang kh ON h.id_kh = kh.id_kh";
            return pdo_query($sql);
        }

        function Load_Detail_Bill_Transport($id_bill){
            $sql ="SELECT * FROM `hoa_don_chi_tiet` WHERE `id_hoa_don` = '$id_bill'";
            return pdo_query($sql); 
        }

        function Load_Bill_Receive($id_user){
            $sql ="SELECT `id_hoa_don`,`tong_gia` FROM `hoa_don` WHERE `id_kh` = '$id_user' AND `trang_thai` = 1";
            return pdo_query($sql);
        }

        function Cancel_Bill($id_bill){
            $sql ="UPDATE `hoa_don` SET `trang_thai`='3' WHERE `id_hoa_don` = '$id_bill'";
            pdo_query_one($sql);
        }

        function Load_Cancel_Bill($id_user){
            $sql ="SELECT `id_hoa_don`,`tong_gia` FROM `hoa_don` WHERE `id_kh` = '$id_user' AND `trang_thai` = 3";
            return pdo_query($sql);
        }

        function Received_Success($id_bill){
            $sql ="UPDATE `hoa_don` SET `trang_thai`='2' WHERE `id_hoa_don` = '$id_bill'";
            pdo_query_one($sql);
        }

        function Load_Complete_Bill($id_user){
            $sql ="SELECT `id_hoa_don`,`tong_gia` FROM `hoa_don` WHERE `id_kh` = '$id_user' AND `trang_thai` = 2";
            return pdo_query($sql);
        }

        function Load_Bill_Current($id_bill){
            $sql ="SELECT h.id_hoa_don, h.phuong_thuc, h.tong_gia, h.ngay_tao, h.trang_thai, da.ten_nguoi_nhan, da.sdt_nguoi_nhan, da.dia_chi_nguoi_nhan, kh.ho_ten, kh.sdt FROM hoa_don h JOIN dia_chi da ON h.id_dia_chi = da.id_dia_chi JOIN khach_hang kh ON h.id_kh = kh.id_kh
             WHERE `id_hoa_don` = '$id_bill'";
            return pdo_query_one($sql);
        }

        function Update_Status_Bill($id_bill, $status){
            $sql ="UPDATE `hoa_don` SET `trang_thai`='$status' WHERE `id_hoa_don` = '$id_bill'";
            pdo_query_one($sql);
        }

?>