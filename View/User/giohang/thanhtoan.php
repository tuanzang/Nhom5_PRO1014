<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Thanh toán</h2>
                    <p>Bước cuối cùng rồi khách hàng ơi ...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <form action="index.php?action=thanhtoan" method="POST">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Thông tin cá nhân</h3>
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                            }
                        ?>
                        <div class="row contact_form">
                            <div class="col-md-12 form-group p_star">
                                <label for="first">Họ và tên</label>
                                <input type="text" class="form-control" id="first" name="name" value="<?=$user_name?>"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="number">Số điện thoại</label>
                                <input type="text" class="form-control" id="number" name="number" value="<?=$phone_number?>"/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="email" class="">Email</label>
                                <input type="text" class="form-control" id="email" name="compemailany" value="<?=$email?>"/>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="add1">Địa chỉ</label>
                                <input type="text" class="form-control" id="add1" name="add1" value="<?=$address?>"  required/>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Ghi chú khi vận chuyển</h3>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="order_box">
                            <h2>Đơn đặt hàng của bạn</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Sản phẩm
                                        <span>Tổng</span>
                                    </a>
                                </li>
                                <?php
                                $tong = 0;
                                foreach ($_SESSION['cart'] as $product_id => $product) :
                                    extract($product);
                                    $tong += $total_price;
                                ?>
                                    <li>
                                        <a href="#"><?= $product_name ?>
                                            <span class="middle">x <?= $quantity ?></span>
                                            <span class="last"><?= number_format($total_price, 0, ',', '.') ?>đ</span>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Tổng cộng
                                        <span><?= number_format($tong, 0, ',', '.') ?>đ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Phí ship
                                        <span>Mặc định: <?= number_format('50000', 0, ',', '.') ?>đ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Thanh Toán Tổng
                                        <span><?= number_format($tong + '50000', 0, ',', '.') ?>đ</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector" value="0" required/>
                                    <label for="f-option5">Thanh toán khi nhận hàng</label>
                                    <div class="check"></div>
                                </div>
                                <p>
                                    Vui lòng kiểm tra kĩ thông tin trước khi thanh toán.
                                </p>
                            </div>
                            <div class="payment_item ">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector" value="1" required/>
                                    <label for="f-option6">Paypal </label>
                                    <img src="../img/product/single-product/card.jpg" alt="" />
                                    <div class="check"></div>
                                </div>
                                <p>
                                    Vui lòng kiểm tra kĩ thông tin trước khi thanh toán.
                                </p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector1" required/>
                                <label for="f-option4">Tôi đã đọc và chấp nhận về</label>
                                <a href="#"> điều khoản & điều kiện</a><label for="f-option4">của MDPsmartphone</label>
                            </div>
                            <input type="submit" value="Đặt hàng" class="main_btn" style="width: 100%;" name="btn_thanhtoan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!--================End Checkout Area =================-->