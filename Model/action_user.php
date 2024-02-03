<?php 
    function Create_User($user_name, $phone_number, $email,$pass){
        $sql="INSERT INTO `khach_hang`( `ho_ten`, `sdt`, `gmail`,`mk`) VALUES ('$user_name','$phone_number','$email','$pass')";
        pdo_execute($sql);
    }
    function Check_User($phone,$pass){
        $sql ="SELECT * FROM `khach_hang` WHERE `sdt` = '$phone' AND `mk` = '$pass' ";
        return pdo_query_one($sql);
    }
    function Check_Account_Exist($user_name,$phone){
        $sql ="SELECT * FROM `khach_hang` WHERE `ho_ten` = '$user_name' OR `sdt` = '$phone'";
        return pdo_query_one($sql);
    }

    function Update_Account_User($user_name,$phone,$gmail){
        $sql="UPDATE `khach_hang` SET `ho_ten`= '$user_name', `gmail` = '$gmail' WHERE `sdt`='$phone'";
        pdo_query_one($sql);
    }
   
?>