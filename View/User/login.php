
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../Duan1_Project/css/dangnhap.css">
    <link rel="icon" type="image/x-icon" href="../images_giao_dien/logo.png">
    <link rel="stylesheet" href="../css/boostrap.css">
    <style>
        *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
section{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
}
section .img-bg{
    position: relative;
    width: 50%;
    height: 100%;
}
section .img-bg img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
section .noi-dung{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
}
section .noi-dung .form{
    width: 50%;
}
section .noi-dung .form h2{
    color: #607d8b;
    font-weight: 500;
    font-size: 1.5em;
    text-transform: uppercase;
    margin-bottom: 20px;
    border-bottom: 4px solid #ff4584;
    display: inline-block;
    letter-spacing: 1px;
}
section .noi-dung .form .input-form{
    margin-bottom: 20px;
}
section .noi-dung .form .input-form span{
    font-size: 16px;
    margin-bottom: 5px;
    display: inline-block;
    color: #607db8;
    letter-spacing: 1px;
     }
section .noi-dung .form .input-form input{
    width: 100%;
    padding: 10px 20px;
    outline: none;
    border: 1px solid #607d8b;
    font-size: 16px;
    letter-spacing: 1px;
    color: #607d8b;
    background: transparent;
    border-radius: 30px;
    }
section .noi-dung .form .input-form input[type="submit"]{
    background: #ff4584;
    color: #fff;
    outline: none;
    border: none;
    font-weight: 500;
    cursor: pointer;
    box-shadow: 0 1px 1px rgba(0,0,0,0.12),
               0 2px 2px rgba(0,0,0,0.12),
               0 4px 4px rgba(0,0,0,0.12),
              0 8px 8px rgba(0,0,0,0.12),
              0 16px 16px rgba(0,0,0,0.12);
}
section .noi-dung .form .input-form input[type="submit"]:hover{
    background: #f53677;
}
section .noi-dung .form .nho-dang-nhap{
    margin-bottom: 10px;
    color: #607d8b;
    font-size: 14px;
}
section .noi-dung .form .input-form p{
    color: #607d8b;
}
section .noi-dung .form .input-form p a{
    color: #ff4584;
}

@media (max-width: 768px){
    section .img-bg{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    section .noi-dung{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    section .noi-dung .form{
        width: 100%;
        padding: 40px;
        background: rgba(255 255 255 / 0.9);
        margin: 50px;
    }
}
    </style>
</head>

<body>
    <section class="d-flex">
        <div class="img-bg">
            <img src="../images_giao_dien/sign.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="../Controller/index_user.php?request=login-user" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user_name">
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
                        <p>Bạn Chưa Có Tài Khoản? <a href="../Controller/index_user.php?request=register">Đăng Ký</a></p>
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