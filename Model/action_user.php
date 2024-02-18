<?php 
    function Create_User($user_name, $phone_number, $email,$pass){
        $sql="INSERT INTO `khach_hang`( `ho_ten`, `sdt`, `gmail`,`mk`) VALUES ('$user_name','$phone_number','$email','$pass')";
        pdo_execute($sql);
    }
    function Create_Admin($user_name,$pass,$email,$phone,$role){
        $sql="INSERT INTO `khach_hang`( `ho_ten`, `mk`,`gmail`,`sdt`,`id_vaitro`) VALUES ('$user_name', '$pass','$email','$phone','$role')";
        pdo_execute($sql);
    }
    function Check_User($phone_number,$pass){
        $sql ="SELECT * FROM `khach_hang` WHERE `sdt` = '$phone_number' AND `mk` = '$pass' ";
        return pdo_query_one($sql);
    }

    function Check_Account_Exist($phone_number){
        $sql ="SELECT * FROM `khach_hang` WHERE `sdt` = '$phone_number'";
        return pdo_query_one($sql);
    }
    function Update_Pass_User($user_name, $pass){
        $sql ="UPDATE `khach_hang` SET `mk`='$pass' WHERE `ho_ten` = '$user_name'";
        pdo_query_one($sql);
    }
    function Update_Account_User($id_user,$user_name,$pass,$email,$phone,$role){
        $sql="UPDATE `khach_hang` SET `ho_ten`='$user_name',`mk` ='$pass',`gmail`='$email',`sdt`='$phone',`id_vaitro`='$role' WHERE `id_kh` = '$id_user'";
        pdo_query_one($sql);
    }
    function Load_All_Users(){
        $sql ="SELECT * FROM `khach_hang`";
        return pdo_query($sql);
    }

    function Delete_User($id_user){
        $sql =" DELETE FROM `khach_hang` WHERE `id_kh` ='$id_user'";
        pdo_query($sql);
    }
    
    function Load_One_Data_User($id_user){
        $sql =" SELECT * FROM `khach_hang` WHERE `id_kh` = '$id_user'";
        return  pdo_query_one($sql);
    }

   
?>