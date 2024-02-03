<?php
    ob_start();
    session_start();
    include '../View/User/header.php';
    include '../Model/pdo.php';
    include '../Model/action_user.php';
    include '../Model/action_product.php';
    include '../Model/action_danhmuc.php';

    $list_data_product =  Load_All_Data_Products();
    $list_brand = Load_All_Data_Categories();
    $list_three_data_product = Load_Recommned_Product();
    $list_six_data_product = Load_Recommend_Today();

    if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){

                
            case 'register':
                if(isset($_POST['btn-register']) && $_POST['btn-register']){
                    $user_name = $_POST['user_name'];
                    $phone_number = $_POST['phone'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $account_exist = Check_Account_Exist($user_name,$phone_number);
                    if(!is_array($account_exist)){
                        if($pass1 === $pass2){
                            Create_User($user_name, $phone_number, $email, $pass1);
                            echo '<script>alert("Tạo tài khoản thành công!");window.location="../../../../Duan1_Project/View/User/login.php";</script>';
                        }else{
                            echo '<script>alert("Mật khẩu không trùng khớp!");window.location="../../../../Duan1_Project/View/User/register.php";</script>';
                        } 
                    } else {
                        echo '<script>alert("Tài khoản đã tồn tại. Vui lòng nhập đúng thông tin!");window.location="../../../../Duan1_Project/View/User/register.php";</script>';
                    }
                }
                break;

                case 'login-user':
                    if(isset($_POST['login']) && $_POST['login']){
                        $phone = $_POST['phone'];
                        $pass = $_POST['pass'];
                        $data_user = Check_User($phone, $pass);
                        if(is_array($data_user)){
                            $_SESSION['user'] = $data_user;
                            echo '<script>alert("Đăng nhập thành công!");window.location="../../Duan1_Project/Controller/index_user.php";</script>';
                        } else {
                            echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác");window.location="../../Duan1_Project/View/User/login.php";</script>';
                        }
                    }
                    break;
                case 'log-out':
                    session_destroy();
                    echo '<script>window.location="../../Duan1_Project/View/User/login.php";</script>';
                    break;
                
                case 'detail-product':
                    if(isset($_GET['id_product']) && $_GET['id_product']){
                       $id_sp = $_GET['id_product'];
                       $list_one_data_product = Load_One_Data_Product($id_sp);
                       $id_dm = $list_one_data_product['id_dm'];
                    }
                    include('../View/User/sanpham/sanphamct.php');
                    break;

                    case 'list-product':
                
                        include '../View/User/sanpham/sanpham.php';
                        include '../View/User/sanpham/brand_sp.php';
                        break;

            case 'home':
                include '../View/User/content.php';
                break;
        }
    } else {
        // Nếu không có tham số "request", mặc định bao gồm trang content
        include '../View/User/content.php';
    }

    include '../View/User/footer.php';
    ob_end_flush();
?>
