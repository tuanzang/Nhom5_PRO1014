<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../images_giao_dien/logo.png" type="image/png" />
    <title>MDPsmartphone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                                echo '
                                <li><a href="index.php?action=history">Lịch sử mua hàng</a></li>
                                <li><a href="../../../Duan1_Project/Controller/index_user.php?request=log-out">Đăng xuất</a></li> 
                                ';

                            } if (isset($_SESSION['user']['id_vaitro']) === 1)  {
                                echo '<li><a href="../../../Duan1_Project/Controller/index_admin.php">Quản trị</a></li>';
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
                    <a class="navbar-brand logo_h" href="index.php">
                        <img src="https://laptop360.net/wp-content/uploads/2019/04/logo-home-laptop-360.png " style="height: 70px; width: 100px;" alt="" />
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
                                        <a class="nav-link" href="../../../Duan1_Project/Controller/index_user.php">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../Duan1_Project/Controller/index_user.php?request=list-product">Sản Phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">

                                    <form class="form-inline" action="../../../Duan1_Project/Controller/index_user.php?request=filter" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search" name="key-search">
                                            <div class="input-group-append">
                                                <button class="btn btn-success btn-sm" type="submit" name="btn-search">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>


                                    <li class="nav-item">
                                   
                                        <a href="index.php?action=giohang" class="icons" >
                                        
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
                                            <a href="../../../Duan1_Project/View/User/login.php" class="icons">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </li>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--MODAL sửa user BOOTSTRAP-->
    <div class="modal fade  " id="sua-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="../../../Duan1_Project/Controller/index_user.php?request=update-acc" method="POST" enctype="multipart/form-data">
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
                            <input type="text" disabled class="form-control" id="recipient-name" value="<?=$_SESSION['user']['ho_ten']?>" name="user_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" disabled class="form-control" id="recipient-name" value="<?=$_SESSION['user']['gmail']?>" name="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                            <input type="text" disabled class="form-control" id="recipient-name" value="<?=$_SESSION['user']['sdt']?>" name="phone">
                        </div>
                       
                       
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
    </div>
    </div>
    </div>
    </form>
    </div>
    <!--MODAL sửa sản phẩm BOOTSTRAP-->