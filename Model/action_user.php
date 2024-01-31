<?php 
    function Create_User($user_name, $phone_number, $email,$pass){
        $sql="INSERT INTO `khach_hang`( `ho_ten`, `sdt`, `gmail`,`mk`) VALUES ('$user_name','$phone_number','$email','$pass')";
        pdo_execute($sql);
    }
    function Check_User($user_name,$pass){
        $sql ="SELECT * FROM `khach_hang` WHERE `ho_ten` = '$user_name' AND `mk` = '$pass' ";
        return pdo_query_one($sql);
    }
   
?>