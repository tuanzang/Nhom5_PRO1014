<?php 
    function Add_Cart($id_product,$id_user,$price,$so_luong){
        $sql = "INSERT INTO `gio_hang`( `id_sp`, `id_kh`, `gia`,`so_luong` ) VALUES ('$id_product','$id_user','$price','$so_luong')";
        pdo_execute($sql);
    }

    function Add_Cart_Btn($id_product,$id_user,$price,$quantity){
        $sql = "INSERT INTO `gio_hang`( `id_sp`, `id_kh`, `gia`, `so_luong` ) VALUES ('$id_product','$id_user','$price', '$quantity')";
        pdo_execute($sql);
    }
    function Load_All_Cart($id_user){
        $sql ="SELECT sp.ten_sp, sp.img, gh.so_luong, gh.gia, gh.id_sp, gh.status FROM gio_hang AS gh JOIN san_pham AS sp ON sp.id_sp = gh.id_sp WHERE `id_kh` = '$id_user'";
        return pdo_query($sql);
    }

    function Delete_Cart($id_product){
        $sql = "DELETE FROM `gio_hang` WHERE `id_sp` ='$id_product'";
        pdo_query($sql);
    }

    function Quantity_Product($id_product){
        $sql ="SELECT `so_luong` FROM `gio_hang` WHERE `id_sp` = '$id_product'";
        return pdo_query_one($sql);
    }
    function Update_Quantity_Product($id_product,$quantity){
        $sql = "UPDATE `gio_hang` SET `so_luong`='$quantity' WHERE `id_sp` = '$id_product' ";
        pdo_query($sql);
    }

    function Check_Exist_Product($id_product,$id_user){
        $sql ="SELECT * FROM `gio_hang` WHERE `id_sp` = '$id_product' AND `id_kh` = '$id_user' ";
        return pdo_query_one($sql);
    }

    function Status_Product($id_product){
        $sql = "SELECT  `status` FROM `gio_hang` WHERE `id_sp` = '$id_product'";
        return pdo_query_one($sql);
    }

    function Update_Status_Cart($id_product,$status){
        $sql =" UPDATE `gio_hang` SET  `status`='$status' WHERE `id_sp` ='$id_product'";
        pdo_query($sql);
    }
    function Total_Price($id_user){
        $sql ="SELECT SUM(gh.gia * gh.so_luong) as `tong_tien` FROM gio_hang AS gh JOIN san_pham AS sp ON sp.id_sp = gh.id_sp WHERE gh.id_kh = '$id_user' AND gh.status = 1";
        return pdo_query_one($sql);
    }
    
    function Load_Data_Checked($id_user){
        $sql ="SELECT sp.id_sp, sp.ten_sp, gh.so_luong, gh.gia,sp.img 
        FROM gio_hang AS gh JOIN san_pham AS sp ON sp.id_sp = gh.id_sp 
        WHERE `id_kh` = '$id_user' AND `status` = 1;";
        return pdo_query($sql); 
    }
    function Check_Login(){
        if(isset($_SESSION['user'])){
            $list_data_checked= Load_Data_Checked($_SESSION['user']['id_kh']);
            $list_cart = Load_All_Cart($_SESSION['user']['id_kh']);
            $tong_tien = Total_Price($_SESSION['user']['id_kh'])['tong_tien'];
        } else {
             echo '<script>elert("Bạn chưa đăng nhập. Vui lòng đăng nhập để mua hàng!!");window.location= "../../Du_an_1/View/User/login.php"</script>';
        } 
        include '../View/User/giohang/giohang.php';
    }
    
    function Delete_Cart_Checked($id_user){
        $sql="DELETE FROM `gio_hang` WHERE `id_kh` ='$id_user' AND `status` = 1";
        pdo_query($sql);
    }
    
 



    

?>