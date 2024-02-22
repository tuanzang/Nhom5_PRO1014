<?php 
    ob_start();
    session_start();
    include_once '../View/Admin/header.php';
    include_once '../View/Admin/sidebar.php';
    include_once '../View/Admin/nav.php';
    include_once '../Model/pdo.php';
    include_once '../Model/action_danhmuc.php';
    include_once '../Model/action_product.php';
    include_once '../Model/action_user.php';
    include_once '../View/Admin/sweetalert.php';
    include_once '../Model/action_cart.php';
    include_once '../Model/action_bill.php';
    include_once '../Model/action_comment.php';
    include_once '../Model/action_chart.php';

    $list_data_categories = Load_All_Data_Categories();
    $list_data_product = Load_All_Data_Products();
    $list_data_user = Load_All_Users();

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
                    $description = $_POST['des'];
                   
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
            
            case 'list-user':
                include '../View/Admin/user/list.php';
                break;
            
            case 'add-user':
                if(isset($_POST['btn_add_user']) && $_POST['btn_add_user']){
                    $regrex = '/^(?=.*[!@#$%^&*()-_=+{}\[\]:;<>,.?\/`])[\w!@#$%^&*()-_=+{}\[\]:;<>,.?\/`]{6,}$/';
                    $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                    $pattern_phone = '/^0[0-9]{10}$/';
                    $user_name = $_POST['user_name'];
                    $password= $_POST['password'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    $account_exist = Check_Account_Exist($phone,$email);
                    if(!is_array($account_exist)){
                        if(preg_match($regrex, $password) === 1 && preg_match($pattern_email, $email) === 1 && preg_match($pattern_phone,$phone) === 1){
                            Create_Admin($user_name,$password,$email,$phone,$role);
                            echo '<script>alert("Tạo thành công!");</script>';
                        }else{
                            if (preg_match($regrex, $password) === 0) {
                                echo '<script>alert("Mật khẩu ít nhất 6 kí tự, bao gồm kí tự đặc biệt!")</script>';
                            } else if (preg_match($pattern_email, $email) === 0) {
                                echo '<script>alert("Email chưa đúng định dạng!");</script>';
                            } else if (preg_match($pattern_phone, $phone) === 0) {
                                echo '<script>alert("Số điện thoại chưa đúng định dạng!");</script>';
                            }
                        }
                    }else{
                        echo '<script>alert("Tài khoản đã tồn tại!");</script>';
                    }  
                }
               include '../View/Admin/user/add_user.php';
               break;


            case 'delete-user':
                if(isset($_GET['id_user']) && $_GET['id_user']){
                    $id_user = $_GET['id_user'];
                    Delete_User($id_user);
                    echo '<script>alert("Xóa thành công !");</script>';
                }
                $list_data_user = Load_All_Users();
                include '../View/Admin/user/list.php';
                break;

            case 'edit-user':
                if(isset($_GET['id_user']) && $_GET['id_user']){
                    $id_user = $_GET['id_user'];
                    $list_one_data_user =  Load_One_Data_User($id_user);
                }
                include '../View/Admin/user/update_user.php';
                break;

            case 'update-user':
                if(isset($_POST['btn_update_user']) && $_POST['btn_update_user']){
                    $id_user =$_POST['id_user'];
                    $user_name = $_POST['user_name'];
                    $password= $_POST['password'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    //Regrex expression: Biểu thức chính quy dùng để định dạng
                    $regrex = '/^(?=.*[!@#$%^&*()-_=+{}\[\]:;<>,.?\/`])[\w!@#$%^&*()-_=+{}\[\]:;<>,.?\/`]{6,}$/';
                    $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                    $pattern_phone = '/^0[0-9]{10}$/';
                    //preg_match: Kiểm tra xem dữ liệu nhâp vào có khớp với biểu thức chính quy không
                    if(preg_match($regrex, $password) === 1 && preg_match($pattern_email, $email) === 1 && preg_match($pattern_phone,$phone) === 1){
                         Update_Account_User($id_user,$user_name,$password,$email,$phone,$role);
                         echo '<script>alert("Cập nhật thành công !");</script>';
                          $list_data_user = Load_All_Users();
                          include '../View/Admin/user/list.php';
                          break;
                    } else{
                        if (preg_match($regrex, $password) === 0) {
                            echo '<script>alert("Mật khẩu ít nhất 6 kí tự, bao gồm kí tự đặc biệt!");</script>';
                        } else if (preg_match($pattern_email, $email) === 0) {
                            echo '<script>alert("Email chưa đúng định dạng!");</script>';
                        } else if (preg_match($pattern_phone, $phone) === 0) {
                            echo '<script>alert("Số điện thoại chưa đúng định dạng!");</script>';
                        }
                    }  
                }
                $list_one_data_user =  Load_One_Data_User($id_user);
                include '../View/Admin/user/update_user.php';
                break;
                
                case 'manage-bill':
                    $list_wait_confirm = Load_All_Bill();
                    include '../View/Admin/donhang/all_bill.php';
                    break;

                case 'detail-bill':
                        if(isset($_GET['id_bill']) && $_GET['id_bill']){
                            $id_bill = $_GET['id_bill'];
                            $list_detail_bill_address = Load_Detail_Bill_Address($id_bill);
                            $list_detail_bill_product =  Load_Detail_Bill_Transport($id_bill);
                        }
                        include '../View/Admin/donhang/detail_bill.php';
                        break;
    
                case 'edit-bill':
                    if(isset($_GET['id_bill']) && $_GET['id_bill']){
                        $list_data_bill_current = Load_Bill_Current($_GET['id_bill']);
                        extract($list_data_bill_current);
                        include '../View/Admin/donhang/update_bill.php';
                    }
    
                case 'update-bill':
                    if(isset($_POST['btn_update']) && $_POST['btn_update']){
                        $id_bill = $_POST['id_bill'];
                        $status = $_POST['status'];
                        $status = (int)$status;
                        Update_Status_Bill($id_bill, $status);
                        $_SESSION['success_message'] = 'Cập nhật thành công!!';
                        header('Location: ../../../../Duan1_Project/Controller/index_admin.php?request=manage-bill');
                    }
                    break;
                    case 'manage-comment':
                        $list_data_manage_comment = Manage_Comment();
                        include '../View/Admin/binhluan/list.php';
                        break;
    
                    case 'detail_comment':
                        if(isset($_GET['id_product']) && $_GET['id_product']){
                            $id_product = $_GET['id_product'];
                            $ten_sp = Name_Product ($id_product)['ten_sp'];
                            $list_detail_comment = Detail_Comment($id_product);
                        }
                        include '../View/Admin/binhluan/detail.php';
                        break;
        
                    case 'delete-comment':
                        if(isset($_GET['id_bl']) && $_GET['id_bl']){
                            Delete_Comment($_GET['id_bl']);
                            $_SESSION['success_message'] = 'Xóa thành công!!';
                              echo '<script>window.history.back();</script>';
                            exit();
                        }
                        break;
                        case 'chart':
                            $doanh_thu = Doanh_Thu();
                            $so_luong_nguoi_dung = So_Luong_Nguoi_Dung()[0]['so_luong_kh'];
                            $so_luong_san_pham = So_Luong_San_Pham()[0]['so_luong_sp'];
                            $so_luong_don_hang_hoan_thanh = So_Luong_Don_Hang_Hoan_Thanh()[0]['so_luong_hd'];
                            $so_luong_don_hang_huy = So_Luong_Don_Hang_Huy()[0]['so_luong_hd'];
                            $so_luong_bl = So_Luong_Binh_Luan()[0]['so_luong_bl'];
                            $top_5_kh = Top_5_User();
        
                            $doanh_thu_theo_ngay = [];
                            $tong_doanh_thu_theo_ngay = [];
        
                            $doanh_thu_theo_tuan = [];
                            $tong_doanh_thu_theo_tuan = [];
        
                            $doanh_thu_theo_thang = [];
                            $tong_doanh_thu_theo_thang = [];
        
                            $ten_danh_muc = [];
                            $so_luong_san_pham_danh_muc = [];
        
                            foreach(Doanh_Thu_Theo_Ngay() as $value){
                                $tong_doanh_thu_theo_ngay[] = $value['doanh_thu'];
                                $doanh_thu_theo_ngay[] = $value['ngay_tao'];
                            }
        
                            foreach(Doanh_Thu_Theo_Tuan() as $value){
                                $doanh_thu_theo_tuan[] = $value['tuan'];
                                $tong_doanh_thu_theo_tuan[] = $value['doanh_thu'];
                            }
        
                            foreach(Doanh_Thu_Theo_Thang() as $value){
                                $doanh_thu_theo_thang[] = $value['thang'];
                                $tong_doanh_thu_theo_thang[] = $value['doanh_thu'];
                            }
        
                            foreach(Bieu_Do_Danh_Muc() as $value){
                                $ten_danh_muc[] = $value['ten_dm'];
                                $so_luong_san_pham_danh_muc[] = $value['so_luong_san_pham'];
                            }
                            $top_3_sp_ban_chay = Top_3_San_Pham_Ban_Chay();
        
        
                             
        
                            include '../View/Admin/bieudo/bieudo.php';
    
    
    
            


        }
    }else {
        include '../View/Admin/danhmuc/list.php';
    }
     include '../View/Admin/footer.php';
     ob_end_flush();
?>