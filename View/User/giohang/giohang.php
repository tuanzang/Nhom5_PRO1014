 <!--================Home Banner Area =================-->
 <section class="banner_area">
     <div class="banner_inner d-flex align-items-center">
         <div class="container">
             <div class="banner_content d-md-flex justify-content-between align-items-center">
                 <div class="mb-3 mb-md-0">
                     <h2>Giỏ hàng</h2>
                     <p>Chuẩn bị thanh toán thui ...</p>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ================End Home Banner Area =================-->

 <!--================Cart Area =================-->
 <section class="cart_area">
    
     <div class="container">
         <div class="cart_inner">
            <div class="table-responsive">
            <?php if (!empty($list_cart)) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Giá Tiền</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        foreach ($list_cart as $value) {
                            extract($value);
                        ?>
                            <tr>
                                <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= $status === 1 ? 'checked' : '' ?> name="check-box" data-id="<?= $id_sp ?>" id="flexCheckDefault">
                                </div>

                                </td>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <a href="../../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product=<?=$id_sp?>"><img src="../../../../Duan1_Project/img/<?=$img?>" alt="" style="width: 100px;" /></a>
                                        </div>
                                        <div class="media-body">
                                            <p><?= $ten_sp ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5><?php echo currency_format($gia, ' VND'); ?></h5>
                                </td>
                                <td>
                                    <a href="../../../../../Duan1_Project/Controller/index_user.php?request=minus-cart&id_product=<?= $id_sp ?>" class="text-secondary"><i class="fa fa-minus"></i></a>
                                    <div class="product_count" style="margin: 0 10px;">
                                        <span class="text-dark font-weight-bold"><?= $so_luong ?></span>
                                    </div>
                                    <a href="./../../../../Duan1_Project/Controller/index_user.php?request=plus-cart&id_product=<?= $id_sp ?>" class="text-secondary"><i class="fa fa-plus"></i></a>
                                </td>
                                <td>
                                    <h5><?php echo currency_format($gia * $so_luong, ' VND'); ?></h5>
                                </td>
                                <td><a href="./../../../../Duan1_Project/Controller/index_user.php?request=delete-cart&id_product=<?= $id_sp ?>">Xóa</a></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Thành tiền</h5>
                            </td>
                            <td>
                                <h5>
                                <?php echo currency_format($tong_tien, ' VND'); ?>
                                </h5>
                            </td>
                            <td></td>
                        </tr>
                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner">
                                    <a class="gray_btn" href="../../../../Duan1_Project/Controller/index_user.php">Tiếp tục mua sắm</a>
                                    <?php if(!empty( $list_data_checked)) {
                                        echo' <a class="main_btn" href="../../../../../Duan1_Project/Controller/index_user.php?request=payment" >Thanh toán giỏ hàng</a>'; }
                                    ?>
                                </div>  
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                
            <?php else : ?>
                <div class="text-center" role="alert">
                    <p class="alert alert-primary h3">Ồ!! Giỏ hàng trống!Quay lại mua hàng bạn nhé</p>
                </div>
                <div class="checkout_btn_inner">
                        <a class="gray_btn" href="../../../../Duan1_Project/Controller/index_user.php">Tiếp tục mua sắm</a> 
                    </div>
            <?php endif; ?>

         </div>
     </div>
 </section>

 <script>
   document.addEventListener('DOMContentLoaded', () => {
        var checkboxes = document.querySelectorAll('.form-check-input');
        checkboxes.forEach((checkbox) =>  {
            checkbox.addEventListener('change', () =>  {
                    var checkboxId = checkbox.dataset.id;
                    window.location.href = '../../../../../Duan1_Project/Controller/index_user.php?request=select&id_product=' + checkboxId;            
            });
        });
    });
</script>
 <!--================End Cart Area ================= -->