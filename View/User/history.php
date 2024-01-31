<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Cùng kiểm tra những món đồ mà bạn đã mua</h2>
                    <p>Cám ơn các bạn đã đồng hàng cùng zipphone !</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<section class="cat_product_area section_gap">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col" class="col-lg-3">Mã đơn hàng</th>
                            <th scope="col" class="col-lg-2">Giá Tiền</th>
                            <th scope="col">Ngày đặt</th>
                            <th scope="col">Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $id_user = $_SESSION['user']['user_id'];
                            $stt = 0;
                            foreach (get_bill_by_user($id_user) as $cart) {
                                extract($cart);
                                $stt += 1;
                        ?>
                                <tr class="">
                                    <td><?= $stt ?></td>
                                    <td><?= $code ?></td>
                                    <td><?= number_format($price_all) ?>đ</td>
                                    <td><?= $date_time?></td>
                                    <td><?php
                                        if ($role == 0) {
                                            echo "Chờ xác nhận";
                                        } elseif ($role == 1) {
                                            echo 'Đang xử lí';
                                        } elseif ($role == 2) {
                                            echo 'Đang giao hàng';
                                        } elseif ($role == 3) {
                                            echo 'Đã giao hàng';
                                        } elseif ($role == 4) {
                                            echo 'Đã hủy';
                                        } elseif($role == 5){
                                            echo 'Chờ xác nhận hủy đơn';
                                        }
                                        ?></td>
                                    <td>
                                        <button type="button" class=" btn btn-sm btn-success" data-toggle="collapse" aria-expanded="false" aria-controls="detail-cart<?= $code ?>" data-target="#detail-cart<?= $code ?>">Chi tiết</button>
                                        <?php
                                            if($role == 0 || $role == 1 ){
                                        ?>
                                            <a type="button" href="index.php?action=huydon&id_cart=<?=$cart_id?>" class="btn btn-sm btn-warning text-light">
                                                <?=$role == 5 ? '' : 'Yêu cầu hủy đơn'?>
                                            </a>
                                        <?php
                                            }
                                            
                                        ?>
                                    </td>
                                </tr>

                                <?php
                                foreach (get_cartdetail_by_code($code) as $cart_detail) {
                                ?>
                                    <tr id="detail-cart<?= $code ?>" class="collapse">
                                        <td></td>
                                        <td><?= getProductId($cart_detail['product_id'])['product_name'] ?></td>
                                        <td><img src="../public/img/product/<?= getProductId($cart_detail['product_id'])['image'] ?>" style="width: 40px; " alt=""></td>
                                        <td><?= $cart_detail['quantity'] ?></td>
                                        <td><?= number_format($cart_detail['total_price']) ?>đ</td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                        <?php  }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
