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
 <!--================End Home Banner Area =================-->

 <!--================Cart Area =================-->
 <section class="cart_area">
     <div class="container">
         <div class="cart_inner">
             <div class="table-responsive">
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
                            if (!empty($_SESSION['cart'])) {
                                $stt = 0;
                                $tong_tien = 0;
                                foreach ($_SESSION['cart'] as $product_id => $product) {

                                    $stt++;
                                    extract($product);
                                    $tong_tien += $total_price;
                            ?>
                                 <tr>
                                     <td>
                                         <div class="d-flex align-items-center">
                                             <?= $stt ?>
                                         </div>
                                     </td>
                                     <td>
                                         <div class="media">

                                             <div class="d-flex">
                                                 <img src="../img/product/<?= $image ?>" alt="" style="width: 100px;" />
                                             </div>
                                             <div class="media-body">
                                                 <p><?= $product_name ?></p>
                                             </div>
                                         </div>
                                     </td>
                                     <td>
                                         <h5 id=" price_<?= $product_id ?>"><?= number_format($price, 0, ',', '.') ?></h5>
                                     </td>
                                     <td>
                                         <a href="index.php?action=tru_cart&id_pro=<?= $product_id ?>" class="text-secondary"><i class="fa fa-minus"></i></a>
                                         <div class="product_count" style="margin: 0 10px;;">
                                             <span class="text-dark font-weight-bold"><?= $quantity ?></span>
                                         </div>
                                         <a href="index.php?action=cong_cart&id_pro=<?= $product_id ?>" class="text-secondary"><i class="fa fa-plus"></i></a>
                                     </td>
                                     <td>
                                         <h5 id=" total_price_<?= $product_id ?>"><?= number_format($total_price, 0, ',', '.') ?></h5>
                                     </td>
                                     <td><a href="index.php?action=delete_cart&id=<?= $product_id ?>">Xóa</a></td>
                                 </tr>

                         <?php
                                }
                            }
                            ?>

                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td>
                                 <h5>Thành tiền</h5>
                             </td>
                             <td>
                                 <h5 id=""><?= empty($_SESSION['cart']) ? 0 : number_format($tong_tien, 0, ',', '.') ?> đ</h5>
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
                                     <a class="gray_btn" href="index.php">Tiếp tục mua sắm</a>
                                     <a class="main_btn" href="<?= empty($_SESSION['cart']) ? '#' : 'index.php?action=thanhtoan' ?>" onclick="<?= empty($_SESSION['cart']) ? "return confirm('Giỏ hàng của bạn đang trống');" : "" ?>">Thanh toán giỏ hàng</a>
                                 </div>
                             </td>
                             <td></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
 <!--================End Cart Area =================-->