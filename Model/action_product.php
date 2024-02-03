<?php 
    function Upload_Images($file_name){
        $target_dir = "../img/";
        $target_file = $target_dir. basename($file_name);
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
    }

    function Add_Data_Product ($name_product,$id_dm, $img, $price_product,$des,$detail,$quantity){
        $sql="INSERT INTO `san_pham`( `ten_sp`, `id_dm`, `img`, `gia`,`mo_ta`,`chi_tiet`,`so_luong`) VALUES ('$name_product','$id_dm','$img','$price_product','$des','$detail','$quantity')";
        pdo_query($sql);
    }
    
    function Load_All_Data_Products(){
       $sql ="SELECT san_pham.id_sp, san_pham.ten_sp, san_pham.gia, san_pham.img, danh_muc.ten_dm, san_pham.ngay_tao
        FROM san_pham 
        JOIN danh_muc ON san_pham.id_dm = danh_muc.id_dm;";
        return pdo_query($sql);
    }

    function Delete_Product($id_sp){
    $sql ="DELETE FROM `san_pham` WHERE `id_sp` =".$id_sp;
    pdo_query($sql);
    }

    function Load_One_Data_Product($id_sp){
        $sql ="SELECT sp.`id_sp`, sp.`ten_sp`, sp.`id_dm`, sp.`img`, sp.`gia`, sp.`ngay_tao`, sp.`mo_ta`, sp.`chi_tiet`, sp.`so_luong`, dm.`ten_dm` FROM `san_pham` sp JOIN `danh_muc` dm ON sp.`id_dm` = dm.`id_dm` WHERE sp.`id_sp` = '$id_sp'";
        return pdo_query_one($sql);
    }


    function Update_Product($id_sp,$name_product,$id_dm, $img, $price_product,$des,$detail,$quantity){
        if($img !=''){
             $sql="UPDATE `san_pham` SET `ten_sp`='$name_product',`id_dm`='$id_dm',`img`='$img',`gia`='$price_product', `mo_ta` = '$des',`chi_tiet` ='$detail',`so_luong` = '$quantity' WHERE `id_sp`='$id_sp'";
             pdo_query($sql);
        }else{
            $sql="UPDATE `san_pham` SET `ten_sp`='$name_product',`id_dm`='$id_dm',`gia`='$price_product', `mo_ta` = '$des',`chi_tiet` ='$detail',`so_luong` = '$quantity'  WHERE `id_sp`=".$id_sp;
            pdo_query($sql);
        }
    function Load_Product_Same_Category($id_dm){
        $sql ="SELECT san_pham.id_sp, san_pham.ten_sp, san_pham.gia, san_pham.img, danh_muc.ten_dm, san_pham.ngay_tao
        FROM san_pham 
        JOIN danh_muc ON san_pham.id_dm = danh_muc.id_dm;";
    }
       
    }
    function Load_Recommned_Product(){
        $sql = "SELECT * FROM `san_pham` ORDER BY ngay_tao DESC LIMIT 3";
        return pdo_query($sql);
    }

    function Load_Recommend_Today(){
        $sql = "SELECT * FROM `san_pham` ORDER BY ngay_tao DESC LIMIT 8";
        return pdo_query($sql);
    }

        /**
 *
 * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
 *
 * @access    public
 * @param    string
 * @return    string
 */
if (!function_exists('currency_format')) {

    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }

}
?>