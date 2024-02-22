<?php
    function Add_Comment($id_kh,$id_product,$comment){
        $sql = "INSERT INTO `binh_luan`(`id_kh`, `id_sp`, `noi_dung`) VALUES ('$id_kh','$id_product','$comment')";
        pdo_execute($sql);
    }

    function Load_Comment($id_product){
        $sql ="SELECT bl.noi_dung, bl.ngay_tao, kh.ho_ten FROM binh_luan as bl JOIN khach_hang as kh ON kh.id_kh = bl.id_kh AND `id_sp` = '$id_product' ";
        return pdo_query($sql);
    }

    function Manage_Comment(){
        $sql ="SELECT b.id_sp, sp.ten_sp, COUNT(b.id_sp) AS so_lan_comment, DATE(MAX(b.ngay_tao)) AS ngay_cuoi, DATE_SUB(DATE(MAX(b.ngay_tao)), INTERVAL 5 DAY) AS ngay_bat_dau FROM san_pham sp JOIN binh_luan b ON sp.id_sp = b.id_sp WHERE b.ngay_tao >= DATE_SUB(CURDATE(), INTERVAL 5 DAY) GROUP BY sp.id_sp, sp.ten_sp";
        return pdo_query($sql);
    }
    function Detail_Comment($id_product){
        $sql = "SELECT b.noi_dung,b.id_bl, b.id_sp, b.ngay_tao, sp.ten_sp, kh.ho_ten FROM binh_luan b JOIN san_pham sp ON b.id_sp = sp.id_sp JOIN khach_hang kh ON b.id_kh = kh.id_kh WHERE b.id_sp = '$id_product'";
        return pdo_query($sql);
    }
    function Delete_Comment($id_bl){
        $sql ="DELETE FROM `binh_luan` WHERE `id_bl` = '$id_bl'";
        pdo_query_one($sql);
    }

?>