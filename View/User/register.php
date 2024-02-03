<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../../css/dangky.css">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">

</head>

<body>
    <section>
        <div class="img-bg">
            <img src="../../images_giao_dien/sign.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Ký</h2>
                <form action="../../Controller/index_user.php?request=register" method="POST">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="user_name" required>
                    </div>
                    <div class="input-form">
                        <span>Số điện thoại</span>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="pass1" required>
                    </div>
                    <div class="input-form">
                        <span>Nhập Lại Mật Khẩu</span>
                        <input type="password" name="pass2" required>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Ký" name="btn-register">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>