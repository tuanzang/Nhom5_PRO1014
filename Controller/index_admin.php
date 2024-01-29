<?php 
    include '../View/Admin/header.php';
    include '../View/Admin/sidebar.php';
    include '../View/Admin/nav.php';
    include '../Model/pdo.php';
    include '../Model/action_danhmuc.php';

    if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){
            case 'donhang':
                include '../View/Admin/donhang/list.php';
                break;

            case 'createbrand':
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_categories = $_POST['brand_name'];
                    Add_Brand_Name($name_categories);
                }
                include '../View/Admin/danhmuc/add_brand.php';
                break;

            case 'editBrand':
                if(isset($_GET['id_dm']) && $GET['id_dm']){
                    $id_dm = $GET['id_dm'];
                    $list_one_data_category = Load_One_Data_Categories($id_dm);
                }
                 include '../View/Admin/danhmuc/update_brand.php';              
                 break;
                 
            case 'update-brand' :
                if(isset($_POST['submit']) && $_POST['submit']){
                    $ten_dm = $_POST['name_brand'];
                    $id_dm = $_POST['id_brand'];
                    Update_Category($ten_dm, $id_dm);
                }
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/danhmuc/list.php';
                break;

            case 'manager':
                include '../View/Admin/danhmuc/list.php';
               break;

            case 'list_categories':
                $list_data_categories = Load_All_Data_Categories();
                include '../View/Admin/danhmuc/list.php';
                break;
        }
    }else {
        include '../View/Admin/danhmuc/list.php';
    }
     include '../View/Admin/footer.php';
?>