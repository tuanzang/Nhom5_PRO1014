<?php

function Add_Brand_Name($name){
        $sql = "INSERT INTO `danh_muc`(`ten_dm`) VALUES ('$name')";
        pdo_execute($sql);
    }

    function Load_All_Data_Categories(){
        $sql ="SELECT * FROM `danh_muc`";
        return pdo_query($sql);
    }

    function Load_One_Data_Categories($id_dm){
        $sql = "SELECT  * FROM `danh_muc` WHERE `id_dm` = ".$id_dm;
        return pdo_query_one($sql);
    }

    function Update_Category ($id_dm,$ten_dm){
        $sql ="UPDATE `danh_muc` SET `ten_dm`='$ten_dm' WHERE `id_dm` =".$id_dm;
        pdo_query($sql);
    }

    function Delete_Category($id_dm){
        $sql ="DELETE FROM `danh_muc` WHERE `id_dm` = ".$id_dm;
        pdo_query($sql);
    }
?>