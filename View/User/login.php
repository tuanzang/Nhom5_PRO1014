
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
            <img src="https://media.istockphoto.com/id/1305665241/vi/vec-to/h%C3%ACnh-%C4%91%E1%BA%A1i-di%E1%BB%87n-khu%C3%B4n-m%E1%BA%B7t-trung-l%E1%BA%ADp-gi%E1%BB%9Bi-t%C3%ADnh-%E1%BA%A9n-danh-h%C3%ACnh-b%C3%B3ng-%C4%91%E1%BA%A7u-%E1%BA%A9n-danh-minh-h%E1%BB%8Da-ch%E1%BB%A9ng.jpg?s=612x612&w=0&k=20&c=7U_5zwzYaPbCSI6NmLIKhKv2YguMjF4zU32LfBd5QZg=" alt="Hình Ảnh Minh Họa">
        </div>
       
        <div class="noi-dung">
        <!-- <button class="exit w-100px h-50px ">Thoát</button> -->
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="../../Controller/index_user.php?request=login-user" method="POST">
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
                        <p>Bạn Chưa Có Tài Khoản? <a href="../../../Duan1_Project/View/User/register.php">Đăng Ký</a></p>
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
        <form method="POST" action="index.php?action=fgpass">
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
                        <span><?=isset($mes)&& !empty($mes)?$mes:''?></span>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <input type="submit" value="Add" class="btn btn-primary" name="btn_brand_create"> -->
                        <button type="submit" class="btn btn-primary" name="btn_forgot_pass">Update</button>
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