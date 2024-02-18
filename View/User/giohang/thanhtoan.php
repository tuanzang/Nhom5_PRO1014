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
    <form action="../../../../Duan1_Project/Controller/index_user.php?request=confirm-payment" method="POST">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order_box location">
                            <i class="fa-solid fa-location-dot"></i>
                            <span style="margin-left: 10px;color:rgb(255,69,0); 
                            font-size:20px">Địa chỉ nhận hàng</span>
                             <?php if(empty($list_address_checked)){
                                echo ' <div class="col" style="font-size:20px; margin-top:20px">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAddress">+ Thêm địa chỉ 
                                </button>
                                
                                </div>';
                            }else{
                                extract($list_address_checked);
                                echo '
                                    <div class="info-container">
                                            <label for="">Tên người nhận</label>
                                            <input type="hidden" name="id_dia_chi"  value="'.$id_dia_chi.'">
                                            <input type="text" disabled value="'.$ten_nguoi_nhan.'">
                                            
                                            <label for="">Số điện thoại</label>
                                            <input type="text" value="'.$sdt_nguoi_nhan.'" disabled>
                                            
                                            <label for="">Địa chỉ nhận hàng</label>
                                            <input type="text" value="'.$dia_chi_nguoi_nhan.'" disabled>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myAddress"> Đổi địa chỉ
                                    </button>
                                ';
                            } ?>
                            </div>
                        </div>
                        <div class="order_box">
                            <h2>Đơn đặt hàng của bạn</h2>
                           
                                 <ul class="list">
                                    <li class="row title">
                                        <div class="col-lg-5">Sản phẩm</div>
                                        <div class="col-lg-2">Đơn giá</div>
                                        <div class="col-lg-2">Số lượng</div>
                                        <div class="col-lg-3 ">Tổng</div>
                                    </li>
                                <?php
                                foreach ($list_data_checked as $value): 
                                    extract($value);   
                                ?>
                                    <li class="row title">
                                        <div class="col-lg-5"><?=$ten_sp?></div>
                                        <div class="col-lg-2"><?=currency_format($gia, ' VND'); ?></div>
                                        <div class="col-lg-2">X<?=$so_luong?></div>
                                        <div class="col-lg-3 "><?php echo currency_format($so_luong * $gia, ' VND'); ?></div>
                                    </li>
                                <?php endforeach ?>
                            </ul>

                            <ul class="list list_2">
                                <li>
                                    <a href="#">Tạm tính
                                        <span><?php echo currency_format($tong_tien, ' VND'); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Vận chuyển
                                        <span> <?= number_format('50000', 0, ',', '.') ?>đ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Thanh Toán Tổng
                                        <span><?php echo currency_format($tong_tien + 50000, ' VND'); ?></span>
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

                                <div class="col-md-12 form-group">
                                    <div class="creat_account">
                                        <h3>Ghi chú khi vận chuyển</h3>
                                    </div>
                                    <textarea class="form-control"  name="message" id="message" rows="4"></textarea>
                                </div>
                            
                           <!-- <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector1" required/>
                                <label for="f-option4">Tôi đã đọc và chấp nhận về</label>
                                <a href="#"> điều khoản & điều kiện</a><label for="f-option4">của MDPsmartphone</label>
                            </div> -->
                            
                            <input type="submit" value="Đặt hàng" class="main_btn" style="width: 100%;" name="btn_thanhtoan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Modal -->
<div class="modal fade" id="myAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Địa chỉ của tôi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row mb-5">
                     <?php foreach($list_all_address as $value):extract($value) ?>
                        <div class='col-lg-1 p-2'></div>
                        <div class="col-lg-11 mb-3 d-flex justify-content-between">
                            <div class="col-lg-10">
                                <input class="form-check-input" type="checkbox" <?= $status === 1 ? 'checked' : '' ?> name="check-box" data-id="<?= $id_dia_chi ?>" id="flexCheckDefault">
                                    <span style="font-size:18px;display:block;">
                                    <?=$ten_nguoi_nhan?> | <?=$sdt_nguoi_nhan?></span>
                                    <span style="font-size:13px;display:block;"><?=$dia_chi_nguoi_nhan?>
                                </span>
                            </div>
                            <?php if($status !== 1) echo '
                            <div class="col-lg-1 mr-1"><a href="../../../../Duan1_Project/Controller/index_user.php?request=delete-address&id_address='.$id_dia_chi.'">Xóa</a></div>';  
                            ?>
                            
                            
                        </div>   
                    <?php endforeach?>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAddress">+ Thêm địa chỉ khác
                </button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Địa chỉ mới</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../../../../Duan1_Project/Controller/index_user.php?request=addtional-address">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên người nhận</label>
                <input type="text" class="form-control" name="name_receiver" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" name="phone_receiver" id="exampleInputPassword1">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" name="address_receiver" id="exampleInputPassword1">
            </div>
            
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <input type="submit" name="submit" class="btn btn-primary" value="Xác nhận">
            </div>
      </form>
    </div>
  </div>
</div>
<!--================End Checkout Area =================-->
<script>
   document.addEventListener('DOMContentLoaded', () => {
        let checkboxes = document.querySelectorAll('.form-check-input');
        checkboxes.forEach((checkbox) =>  {
            checkbox.addEventListener('change', () =>  {
                    let checkboxId = checkbox.dataset.id;
                    window.location.href = `../../../../Duan1_Project/Controller/index_user.php?request=change-address&id_address=${checkboxId}` ;            
            });
        });
    });
</script>