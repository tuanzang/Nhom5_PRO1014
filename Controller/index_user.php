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
                    //tham khỏa regex-expressison
                    $regrex = '/^(?=.*[!@#$%^&*()-_=+{}\[\]:;<>,.?\/`])[\w!@#$%^&*()-_=+{}\[\]:;<>,.?\/`]{6,}$/';
                    $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                    $pattern_phone = '/^0[0-9]{9}$/';
                    $user_name = $_POST['user_name'];
                    $phone_number = $_POST['phone'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $account_exist = Check_Account_Exist($user_name,$phone_number);
                    if(!is_array($account_exist)){
                        if($pass1 === $pass2){
                            // o:f 1:t
                            if(preg_match($regrex,$pass2) === 1 && preg_match($pattern_email,$email) ===1 && preg_match($pattern_phone,$phone_number)===1){
                                Create_User($user_name,$phone_number,$email,$pass1);
                                echo '<script>alert("Tạo tài khoản thành công!");window.location="../../../../Duan1_Project/View/User/login.php";</script>';
                            } else {
                                if(preg_match($regrex,$pass2) === 0){
                                    echo '<script>alert("Mật khẩu ít nhất 6 kí tự  !");window.location="../../../../Duan1_Project/View/User/register.php";</script>';
                                } else if (preg_match($pattern_email,$email) === 0 ){
                                    echo '<script>alert("Email chưa đúng định dạng !");window.location="../../../../Duan1_Project/View/User/register.php";</script>';
                                } else if (preg_match($pattern_phone,$phone_number) === 0 ){
                                    echo '<script>alert("Số điện thoại chưa đúng định dạng  !");window.location="../../../../Duan1_Project/View/User/register.php";</script>';
                                }
                            } 
                        } else {
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
                            if (is_array( $list_one_data_product)) {
                                extract( $list_one_data_product);
                            }
                            $list_same_category = Load_Product_Same_Category($id_dm);
                        }
                        include '../View/User/sanpham/sanphamct.php';
                        break;

                    case 'list-product':
                
                        include '../View/User/sanpham/sanpham.php';
                        include '../View/User/sanpham/brand_sp.php';
                        break;
                    case 'filter':
                        if(isset($_GET['id_brand']) && $_GET['id_brand']){
                            $id_dm = $_GET['id_brand'];
                            $list_data_product = Load_Product_Same_Category($id_dm);
                        }else if(isset($_POST['btn-search'])){
                            $key_search = $_POST['key-search'];
                            $list_data_product = Search_With_Name($key_search);
                        }else{
                            $list_data_product =  Load_All_Data_Products();
                        }
                        include '../View/User/sanpham/sanpham.php';
                        include '../View/User/sanpham/brand_sp.php';
                        break;

                    case 'cart':
                        if(isset($_SESSION['user'])){
                            $list_cart = Load_All_Cart($_SESSION['user']['is_kh']);

                        }else {
                            $list_cart = array();
                        }
                        include '../../Duan1_Project/View/User/giohang/giohang.php';
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
