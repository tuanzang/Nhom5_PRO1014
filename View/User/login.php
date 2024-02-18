
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../css/dangnhap.css">
    <link rel="icon" type="image/x-icon" href="../images_giao_dien/logo.png">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    
</head>

<body>
    <section class="d-flex">
        <div class="img-bg">
            <img src="../../images_giao_dien/sign.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="../../../../Duan1_Project/Controller/index_user.php?request=login-user" method="POST">
                    <div class="input-form">
                        <span>Số Điện Thoại</span>
                        <input type="text" name="phone">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập" name="login">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="../../../../Duan1_Project/View/User/register.php">Đăng Ký</a></p>
                    </div>
                    <div class="input-form">
                        <a style="cursor: pointer;" data-toggle="modal" data-target="#quen-mat-khau">Quên mật khẩu</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!--MODAL Quên mật khẩu BOOTSTRAP-->
    <div class="modal fade" id="quen-mat-khau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="POST" action="../../../../Duan1_Project/Controller/index_user.php?request=forgot_pass">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Quên mật khẩu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="recipient-name" name="user_name" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="recipient-name" name="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" id="recipient-name" name="pass2" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <!-- <input type="submit" value="Add" class="btn btn-primary" name="btn_brand_create"> -->
                        <input type="submit" class="btn btn-primary" name="btn_forgot_pass" value="Cập nhật">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/stellar.js"></script>
    <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/isotope/isotope-min.js"></script>
    <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendors/counter-up/jquery.counterup.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/theme.js"></script>


</body>

</html>