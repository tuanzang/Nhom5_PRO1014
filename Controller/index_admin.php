<?php 
    session_start();
    include '../View/Admin/header.php';
    include '../View/Admin/sidebar.php';
    include '../View/Admin/nav.php';
    include '../Model/pdo.php';
    include '../Model/action_danhmuc.php';
    include '../Model/action_product.php';
    include '../View/Admin/sweetalert.php';

    $list_data_categories = Load_All_Data_Categories();
    $list_data_product = Load_All_Data_Products();

    if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){
         
            case 'createbrand':
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_categories = $_POST['brand_name'];
                    Add_Brand_Name($name_categories);
                }
                include '../View/Admin/danhmuc/add_brand.php';
                break;

            case 'editBrand':
                if(isset($_GET['id']) && $_GET['id']){
                    $id_dm = $_GET['id'];
                    $list_one_data_category = Load_One_Data_Categories($id_dm);
                }
                 include '../View/Admin/danhmuc/update_brand.php';              
                 break;

            case 'update-brand' :
                if(isset($_POST['submit']) && $_POST['submit']){
                    $ten_dm = $_POST['name_brand'];
                    $id_dm = $_POST['id_brand'];
                    Update_Category($id_dm, $ten_dm);
                }
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/danhmuc/list.php';
                break;
            case 'deleteBrand':
                if(isset($_GET['id']) && $_GET['id']){
                    $id_dm = $_GET['id'];
                    Delete_Category($id_dm);
                }
                
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/danhmuc/list.php';
                break;

        

            case 'list_categories':
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/danhmuc/list.php';
                break;

            case 'list_product':
                $list_data_product = Load_All_Data_Products();
                include '../View/Admin/sanpham/list_sp.php';
                break;

            case 'create-product':
                if(isset($_POST['btn_add_pro']) && $_POST['btn_add_pro']){
                    $id_dm = $_POST['brand'];
                    $name_product = $_POST['pro_name'];
                    $price_product = $_POST['price'];
                    $file_name = $_FILES['img']['name'];
                   
                    Upload_Images($file_name);
                    Add_Data_Product($name_product,$id_dm,$file_name,$price_product);
                }
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/sanpham/add_sp.php';
                break;
            case 'delete-product':
                if(isset($_GET['id']) && $_GET['id']){
                    $id_sp = $_GET['id'];
                    Delete_Product($id_sp);
                    $_SESSION['status'] = "Xóa thành công";
                }
                
                $list_data_product = Load_All_Data_Products();
                include '../View/Admin/sanpham/list_sp.php';
                break;
            
            case 'edit-product':
                if(isset($_GET['id']) && $_GET['id']){
                    $id_sp = $_GET['id'];
                    $list_one_data_product = Load_One_Data_Product($id_sp);
                }
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/sanpham/update_sp.php';
                break;

            case 'update-product':
                if(isset($_POST['btn_update_pro']) && $_POST['btn_update_pro']){
                    $id_dm = $_POST['brand'];
                    $id_product = $_POST['id_pro'];
                    $name_product = $_POST['pro_name'];
                    $price_product = $_POST['price'];
                    $file_name = $_FILES['img']['name'];
                    Upload_Images($file_name);
                    Update_Product($id_product, $name_product,$id_dm, $file_name,$price_product);
                }
                $list_data_product = Load_All_Data_Products();
                include '../View/Admin/sanpham/list_sp.php';
                break;

        }
    }else {
        include '../View/Admin/danhmuc/list.php';
    }
     include '../View/Admin/footer.php';
?>