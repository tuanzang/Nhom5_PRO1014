<?php


// Kiểm tra và hiển thị thông báo
if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    // Xoá biến session sau khi hiển thị thông báo
    unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../../../Du_an_1/images_giao_dien/flat-laptop-logo-template_23-2149017459.avif" type="image/png" />
    <title>NMT Laptop World</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <style>
  .carousel-inner img {
    max-height: 600px; /* Điều chỉnh giá trị max-height theo mong muốn của bạn */
    width: 100%;
    height: auto;
  }
  .feature_product_area {
        margin-top: 20px;
    }
    .form-check-input {
    border: 2px solid black; /* Thay đổi màu sắc theo ý muốn của bạn */
    }
    .display-product{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 12px;
    }
   /* CSS */

li.title {
    display: flex;
    justify-content: space-between;
    margin-bottom: 12px;
}

        li.title .col-lg-3 {
            text-align: right;
        }
        .location{
            margin-bottom: 15px;
        }
        .address{
            margin-top:15px;
            justify-content: space-around;
            align-items:center;

        }
        .location .fa-location-dot{
        font-size:20px;
        color:rgb(255,69,0);
        }

        .info-container {
            width: 100%; 
            padding: 10px; 
            background-color: #f9f9f9; 
            margin-top:10px;
        }

       
        label {
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
        }

        input {
            display: block; 
            width: 100%;
            padding: 4px;
            margin-bottom: 5px; 
            border: none; 
        }
        .history-bill{
            margin-top: 20px;
        }
    
    .bill{
            margin-bottom: 15px;
            padding:0px;
        }
        .navbar-custom .nav-link {
        font-size: 18px;
        color: orange;
        position: relative;
        text-decoration: none;
        font-weight: bold;
    }

    .navbar-custom .nav-link::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 2px;
        background-color: orange;
        display: block;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-custom .nav-link:hover::before,
    .navbar-custom .nav-link.clicked::before {
        transform: scaleX(1);
    }
        

</style>
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
    
                    <div class="top_menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="float-left">
                                    
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="float-right">
                                    <div class="right_side">
                                        <?php if(isset($_SESSION['user'])){
                                            if(($_SESSION['user']['id_vaitro']) === 1){
                                                echo '<li><a href="../../../../Duan1_Project/Controller/index_admin.php">Quản trị</a></li>';
                                            }
                                            echo ' 
                                            <li><a href="../../../../Duan1_Project/Controller/index_user.php?request=history-bill">Đơn mua</a></li>
                                            <li><a href="../../../../Duan1_Project/Controller/index_user.php?request=log-out">Đăng xuất</a></li>
                                            ';
                                        } ?>
                                           
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
      
        
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="../../../../Duan1_Project/Controller/index_user.php">
                        <img src="https://laptop360.net/wp-content/uploads/2019/04/logo-home-laptop-360.png" style="height: 90px; width: 90px;" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-5 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="../../../../Duan1_Project/Controller/index_user.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Duan1_Project/Controller/index_user.php?request=list-product">Sản Phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                    <form class="form-inline" action="../../../../Duan1_Project/Controller/index_user.php?request=filter" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search" name="key-search">
                                            <div class="input-group-append">
                                                <button class="btn btn-success btn-sm" type="submit" name="btn-search">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>


                                    <li class="nav-item ">
                                   
                                        <a href="../../../../Duan1_Project/Controller/index_user.php?request=cart" class="icons" style="font-size: 25px; margin-right: 15px">
                                        
                                            <i class="ti-shopping-cart">
                                            
                                            </i>
                                        </a>
                                    </li>
                                    <li class="nav-item">

                                        <?php
                                        if (isset($_SESSION['user'])) {
                                        ?>
                                        
                                            <span>Xin chào,<a data-toggle="modal" data-target="#sua-user" class="icons " style="cursor: pointer;"><?= $_SESSION['user']['ho_ten'] ?></a> </span>                                           
                                        <?php
                                        } else {
                                        ?>
                                            <a href="../../../../Duan1_Project/View/User/login.php" class="icons">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--MODAL sửa user BOOTSTRAP-->
    <div class="modal fade" id="sua-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="../../../../Duan1_Project/Controller/index_user.php?request=update-acc" method="POST" enctype="multipart/form-data">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        
                        <div class="text-center" style="border-radius: 100%;">
                            <img src="../img/user/" alt="" style="width: 80px;" />
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
                            <input type="text" class="form-control" disabled id="recipient-name" value="<?=$_SESSION['user']['ho_ten']?>" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" disabled id="recipient-name" value="<?=$_SESSION['user']['gmail']?>" name="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" disabled id="recipient-name" value="<?=$_SESSION['user']['sdt']?>"name="phone">
                        </div>
                       
        </form>
    </div>
    <div class="modal-footer">
       
    </div>
    </div>
    </div>
    </form>
    </div>
    <!--MODAL sửa sản phẩm BOOTSTRAP-->