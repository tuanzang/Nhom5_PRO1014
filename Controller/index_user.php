<?php
    ob_start();
    session_start();
    include_once '../View/User/header.php';
    include_once '../Model/pdo.php';
    include_once '../Model/action_user.php';
    include_once '../Model/action_product.php';
    include_once '../Model/action_danhmuc.php';
    include_once '../Model/action_cart.php';
    include_once '../Model/action_address.php';
    include_once '../Model/action_bill.php';
    include_once '../Model/action_comment.php';

    $list_brand = Load_All_Data_Categories();
    $list_three_data_product = Load_Recommned_Product();
    $list_six_data_product = Load_Recommend_Today();

    if(isset($_GET['request']) && $_GET['request']){
        switch($_GET['request']){

            //Thao tác đăng kí đăng nhập
            case 'register':
                if(isset($_POST['btn-register']) && $_POST['btn-register']){
                    $regrex = '/^(?=.*[!@#$%^&*()-_=+{}\[\]:;<>,.?\/`])[\w!@#$%^&*()-_=+{}\[\]:;<>,.?\/`]{6,}$/';
                    $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                    $pattern_phone = '/^0[0-9]{9}$/';

                    $user_name = $_POST['user_name'];
                    $phone_number = $_POST['phone'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $account_exist = Check_Account_Exist($phone_number,$email);
                    if (!is_array($account_exist)) {
                        if ($pass1 === $pass2) {
                            if (preg_match($regrex, $pass2) === 1 && preg_match($pattern_email, $email) === 1 && preg_match($pattern_phone, $phone_number) === 1) {
                                Create_User($user_name, $phone_number, $email, $pass1);
                                echo '<script>alert("Tạo tài khoản thành công!");window.location="../../../../Duan1_Project/View/User/login.php"</script>';
                            } else {
                                if (preg_match($regrex, $pass2) === 0) {
                                    echo '<script>alert("Mật khẩu ít nhất 6 kí tự, bao gồm kí tự đặc biệt!");window.location="../../../../Duan1_Project/View/User/register.php"</script>';
                                } else if (preg_match($pattern_email, $email) === 0) {
                                    echo '<script>alert("Email chưa đúng định dạng!");window.location="../../../../Duan1_Project/View/User/register.php"</script>';
                                } else if (preg_match($pattern_phone, $phone_number) === 0) {
                                    echo '<script>alert("Số điện thoại chưa đúng định dạng!");window.location="../../../../Duan1_Project/View/User/register.php"</script>';
                                }
                            }
                        } else {
                            echo '<script>alert("Mật khẩu không trùng khớp!");window.location="../../../../Duan1_Project/View/User/register.php"</script>';
                        } 
                    } else {
                        echo '<script>alert("Tài khoản đã tồn tại!");window.location="../../../../Duan1_Project/View/User/register.php"</script>';
                    } 
                }
                break;
            //Đăng nhập
            case 'login-user':
                if(isset($_POST['login']) && $_POST['login']){
                    $phone_number = $_POST['phone'];
                    $pass = $_POST['pass'];
                    $data_user = Check_User($phone_number, $pass);
                    if(is_array($data_user)){
                        $_SESSION['user'] = $data_user;
                        echo '<script>alert("Đăng nhập thành công!");window.location="../../../../Duan1_Project/Controller/index_user.php";</script>';
                    } else {
                        echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác");window.location="../../../../Duan1_Project/View/User/login.php";</script>';
                    }
                }
                break;
        //Quên mật khẩu
           

            //Đăng xuất
            case 'log-out':
                session_destroy();
                header('Location: ../../../../Duan1_Project/Controller/index_user.php');
                break;

            //Thao tác với phẩn render, hiển thị sản phẩm
            //Chi tiết sản phẩm
            case 'detail-product':
                if(isset($_GET['id_product']) && $_GET['id_product']){
                    $id_sp = $_GET['id_product'];
                    $list_one_data_product = Load_One_Data_Product($id_sp);
                    if (is_array( $list_one_data_product)) {
                        extract( $list_one_data_product);
            
                    }
                    $list_comment =  Load_Comment($id_sp);
                    $list_same_category = Load_Product_Same_Category($id_dm);

                }
                include '../View/User/sanpham/sanphamct.php';
                break;
            //Danh sách tất cả sản phẩm

            case 'list-product':
                $list_data_product =  Load_All_Data_Products(); 
                include '../View/User/sanpham/sanpham.php';
                include '../View/User/sanpham/brand_sp.php';
                break;

            //Lọc sản phẩm theo danh mục, từ khóa
            case 'filter':
                if(isset($_GET['id_brand']) && $_GET['id_brand']){
                    $id_dm = $_GET['id_brand'];
                    $list_data_product = Load_Product_Same_Category($id_dm);
                }else if(isset($_POST['btn-search'])) {
                    $key_search= $_POST['key-search'];
                    $list_data_product = Search_With_Name($key_search);
                } else {
                    $list_data_product =  Load_All_Data_Products();
                }
                include '../View/User/sanpham/sanpham.php';
                include '../View/User/sanpham/brand_sp.php';
                break;
            //Thao tác với giỏ hàng
            //Hiển thị phần giỏ hàng
            //Check_Login: kiểm tra user đã đang nhập hay chưa 
            //true: hiển thị giỏ hàng theo user,tổng tiền của các sp đc chọn, list_data_checked dùng để kiểm tra khách
            //đã chọn sp chưa
            case 'cart':
               Check_Login();
               break;
            
            //Thêm sp vào giỏ hàng
            case 'add-cart':
                if(isset($_SESSION['user'])){
                    if(isset($_GET['id_product']) && $_GET['id_product']){
                        $id_product = $_GET['id_product'];
                        $so_luong = 1;
                        $id_user = $_SESSION['user']['id_kh'];
                        $price = $_GET['price'];
                        $check_exist_product = Check_Exist_Product($id_product,$id_user);
                        if(!empty($check_exist_product)){
                            $quantity = Quantity_Product($id_product)['so_luong'];
                            $quantity++;
                            Update_Quantity_Product($id_product,$quantity);
                        } else{
                            Add_Cart($id_product,$id_user,$price,$so_luong); 
                        }  
                    } else if(isset($_POST['add_to_cart']) && $_POST['add_to_cart']) {
                            $id_product = $_POST['id_product'];
                            $id_user = $_SESSION['user']['id_kh'];
                            $so_luong = $_POST['quantity'];
                            $quantity = (int)$quantity;
                            $price = $_POST['price'];
                            $check_exist_product = Check_Exist_Product($id_product,$id_user);
                            if(!empty($check_exist_product)){
                                $quantity = Quantity_Product($id_product)['so_luong'];
                                $quantity+=$so_luong;
                                Update_Quantity_Product($id_product,$quantity);
                            } else{
                                Add_Cart_Btn($id_product,$id_user,$price,$quantity);
                            }  
                    }    
                    $list_cart = Load_All_Cart($id_user);
                    $list_data_checked= Load_Data_Checked($_SESSION['user']['id_kh']);
                    header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=cart');
                }else{
                    echo '<script>alert("Vui lòng đăng nhập để mua hàng");window.location="../../../../Duan1_Project/View/User/login.php";</script>';
                }
                break;
            
            //Xóa sản phẩm khỏi giỏ hàng
            case 'delete-cart':
                if(isset($_GET['id_product']) && $_GET['id_product']){
                    $id_product = $_GET['id_product'];
                    Delete_Cart($id_product);
                }
                $list_cart = Load_All_Cart($_SESSION['user']['id_kh']);
                $list_data_checked= Load_Data_Checked($_SESSION['user']['id_kh']);
                header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=cart');
                break;
            //Thêm số lượng sp vào giỏ hàng
            case 'plus-cart':
                if(isset($_GET['id_product']) && $_GET['id_product']){
                    $id_product = $_GET['id_product'];
                    $quantity = Quantity_Product($id_product)['so_luong'];
                    $quantity++;
                    Update_Quantity_Product($id_product,$quantity);
                }
                $list_cart = Load_All_Cart($_SESSION['user']['id_kh']);
                $list_data_checked= Load_Data_Checked($_SESSION['user']['id_kh']);
                header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=cart');
                break;

            //Trừ số lượng sp 
            case 'minus-cart':
                if(isset($_GET['id_product']) && $_GET['id_product']){
                    $id_product = $_GET['id_product'];
                    $quantity = Quantity_Product($id_product)['so_luong'];
                    if($quantity === 1){
                        Update_Quantity_Product($id_product,$quantity);
                    }else{
                        $quantity--;
                        Update_Quantity_Product($id_product,$quantity);
                    }
                }
                $list_cart = Load_All_Cart($_SESSION['user']['id_kh']);
                $list_data_checked= Load_Data_Checked($_SESSION['user']['id_kh']);
                header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=cart');
                break;
            
            //Thay đôi trạng thái khi sp trong giỏ hàng được chọn
            case 'select' :
                if(isset($_GET['id_product']) && $_GET['id_product']){
                    $id_product = $_GET['id_product'];
                    $status = Status_Product($id_product)['status'];
                    if($status === 0 ){
                        Update_Status_Cart($id_product,1);
                    }else{
                        Update_Status_Cart($id_product,0);
                    }
                    $list_data_checked= Load_Data_Checked($_SESSION['user']['id_kh']);
                    $list_cart = Load_All_Cart($_SESSION['user']['id_kh']);
                    header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=cart');
                    break;
                }
            //Thao tác với địa chỉ nhận
            //Thêm địa chỉ nhận
            case 'addtional-address':
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name_receiver = $_POST['name_receiver'];
                    $phone_receiver = $_POST['phone_receiver'];
                    $address_receiver = $_POST['address_receiver'];
                    $list_address_user = Load_All_Address($_SESSION['user']['id_kh']);
                    if (!empty($_POST['name_receiver']) && !empty($_POST['phone_receiver']) && !empty($_POST['address_receiver'])) {
                         Add_Address_User($_SESSION['user']['id_kh'],$name_receiver,$phone_receiver,$address_receiver,$list_address_user);
                        $_SESSION['success_message'] = 'Thêm thành công!!';
                    }else {
                        $_SESSION['success_message'] = 'Khong duoc bo trong';
                    }
                }
                 
                 $list_data_checked = Load_Data_Checked($_SESSION['user']['id_kh']);
                 $list_data_user = Load_One_Data_User($_SESSION['user']['id_kh']);
                 $tong_tien = Total_Price($_SESSION['user']['id_kh'])['tong_tien'];
                 $list_address_checked = Address_Checked($_SESSION['user']['id_kh']);
                 $list_all_address = Load_All_Address($_SESSION['user']['id_kh']);   
                 header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=payment');
                 break;

            //Xóa địa chỉ
            case 'delete-address':
                if(isset($_GET['id_address']) && $_GET['id_address']){
                    Delete_Address($_GET['id_address']);
                    $_SESSION['success_message'] = 'Xóa thành công!!';
                }
                $list_data_checked = Load_Data_Checked($_SESSION['user']['id_kh']);
                $tong_tien = Total_Price($_SESSION['user']['id_kh'])['tong_tien'];
                $list_address_checked = Address_Checked($_SESSION['user']['id_kh']);
                $list_all_address = Load_All_Address($_SESSION['user']['id_kh']);
                header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=payment');
                break;
            
            //Thay đổi địa chỉ
            case 'change-address':
                if(isset($_GET['id_address']) && $_GET['id_address']){
                    $id_dia_chi = $_GET['id_address'];
                    $id_user = $_SESSION['user']['id_kh'];
                    $status = Status_Address($id_dia_chi)['status'];
                    Change_Status_Address($id_dia_chi, $status,$id_user);
                    $_SESSION['success_message'] = 'Cập nhật thành công!!';
                }
                $list_data_checked = Load_Data_Checked($_SESSION['user']['id_kh']);
                $tong_tien = Total_Price($_SESSION['user']['id_kh'])['tong_tien'];
                $list_address_checked = Address_Checked($_SESSION['user']['id_kh']);
                $list_all_address = Load_All_Address($_SESSION['user']['id_kh']);
                header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=payment');
                break;
            
            //Thanh toán đơn hàng 
            case 'payment':
                $list_data_checked = Load_Data_Checked($_SESSION['user']['id_kh']);
                $tong_tien = Total_Price($_SESSION['user']['id_kh'])['tong_tien'];
                $list_address_checked = Address_Checked($_SESSION['user']['id_kh']);
                $list_all_address = Load_All_Address($_SESSION['user']['id_kh']);
                include '../View/User/giohang/thanhtoan.php';
                break;

            //Xác nhận thanh toán
            case 'confirm-payment':
                if(isset($_POST['btn_thanhtoan']) && $_POST['btn_thanhtoan']){
                    $option = $_POST['selector'];
                    $id_user = $_SESSION['user']['id_kh'];
                    $id_address = $_POST['id_dia_chi'];
                    $note = $_POST['message'];
                    $tong_tien = Total_Price($_SESSION['user']['id_kh'])['tong_tien']+50000;
                    Add_Bill($id_user,$id_address,$note,$tong_tien,$option);
                    $_SESSION['success_message'] ='Thanh toán thành công!!';
                    $lastest_id_bill = Latest_Id($id_user)['latest_id'];
                    $list_data_checked = Load_Data_Checked($id_user);
                    foreach($list_data_checked as $value){
                        $id_sp=$value['id_sp'];
                        $ten_sp = $value['ten_sp'];
                        $quantity = $value['so_luong'];
                        $gia =$value['gia'];
                        $img=$value['img'];
                    Add_Bill_Detail($lastest_id_bill,$quantity,$gia,$img,$ten_sp,$id_sp);
                    }
                    Delete_Cart_Checked($id_user);
                }
                header('Location:../../../../Duan1_Project/Controller/index_user.php?request=history-bill');
                break;
            

            //Thao tác với lịch sử mua hàng
            //Đơn hàng chờ xác nhận status = 0
            case 'history-bill':
            case 'wait-confirm' :
                $list_bill_transport = Load_Bill_Transport($_SESSION['user']['id_kh']);
                include '../View/User/hoadon/xacnhan.php';
                break;
            
           
            
            //Load các đơn hàng đã được xác nhận status = 1
            case 'receive':
                $list_bill_receive = Load_Bill_Receive($_SESSION['user']['id_kh']);
                include '../View/User/hoadon/nhanhang.php';
                break;

            //Thay đổi trạng thái đơn hàng đc nhận => hoàn thành
            case 'received-product':
                if(isset($_GET['id_bill']) && $_GET['id_bill']){
                    $id_bill = $_GET['id_bill'];
                    Received_Success($id_bill);
                    $_SESSION['success_message'] = 'Hoàn thành nhận hàng!!';
                }
                header('Location:../../../../Duan1_Project/Controller/index_user.php?request=complete');
                break;
            //Đơn hàng đã hoàn thành status = 2
             case 'complete':
                $list_complete_bill = Load_Complete_Bill($_SESSION['user']['id_kh']);
                include '../View/User/hoadon/hoanthanh.php';
                break;

            //Thao tác hủy đơn hàng => status = 3
            case 'cancel-bill':
                if(isset($_GET['id_bill']) && $_GET['id_bill']){
                    $id_bill = $_GET['id_bill'];
                    Cancel_Bill($id_bill);
                    $_SESSION['success_message'] = 'Hủy thành công!!';
                }
                header('Location:../../../../Duan1_Project/Controller/index_user.php?request=cancel');
                break;

            //Đơn hàng đã hủy status = 3
            case 'cancel':
                $list_cancel_bill = Load_Cancel_Bill($_SESSION['user']['id_kh']);
                include '../View/User/hoadon/dahuy.php';
                break;

                case 'add-comment':
                    if(isset($_POST['comment-btn']) && $_POST['comment-btn']){
                        $comment = $_POST['comment'];
                        $id_kh = $_SESSION['user']['id_kh'];
                        $id_product = $_POST['id_product'];
                        Add_Comment($id_kh,$id_product,$comment);
                    }
                    header('Location: ../../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product='.$id_product.'');
                    break;

            
            //Trang chủ
            case 'home':
                include '../View/User/content.php';
                break;    
                











        }
    }else {
        include '../View/User/content.php';
    }

    include '../View/User/footer.php';
    ob_end_flush();
?>