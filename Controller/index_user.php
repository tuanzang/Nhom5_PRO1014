<?php
    ob_start();
    session_start();
    include '../View/User/header.php';
    include '../Model/pdo.php';
    include '../Model/action_user.php';
    include '../Model/action_product.php';

    $list_data_product =  Load_All_Data_Products();
    $list_three_data_product = Load_Recommned_Product();
    $list_six_data_product = Load_Recommend_Today();

    if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){

            case 'login':
                include '../View/User/login.php';
                break;

            case 'register':
                if(isset($_POST['btn-register']) && $_POST['btn-register']){
                    $user_name = $_POST['user_name'];
                    $phone_number = $_POST['phone'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];

                    if($pass1 === $pass2){
                        Create_User($user_name, $phone_number, $email, $pass1);
                    } else {
                        $messgae = "Mật khẩu không khớp";
                    }
                }
                include '../View/User/register.php';
                break;

            case 'login-user':
                if(isset($_POST['login']) && $_POST['login']){
                    $user_name = $_POST['user_name'];
                    $pass = $_POST['pass'];
                    $data_user = Check_User($user_name, $pass);
                    if(is_array($data_user)){
                        header("Location:../Controller/index_user.php");
                    } else {
                        include '../View/User/login.php';
                        break;
                    }
                }

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
