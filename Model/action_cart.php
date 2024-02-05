<?php 
    function Load_All_Cart($id_user){
        $sql ="SELECT sp.ten_sp, sp.img, gh.so_luong, gh.gia, gh.id_sp, gh.status FROM gio_hang AS gh JOIN san_pham AS sp ON sp.id_sp = gh.id_sp WHERE `id_kh` = '$id_user'";
        return pdo_query($sql);
    }
?>