<div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order_box bill">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav d-flex justify-content-around w-100">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Duan1_Project/Controller/index_user.php?request=wait-confirm">Chờ Xác Nhận</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Duan1_Project/Controller/index_user.php?request=receive">Đang đóng gói và vận chuyển</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning" href="../../../../Duan1_Project/Controller/index_user.php?request=complete">Hoàn Thành</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../../../Duan1_Project/Controller/index_user.php?request=cancel">Đã Hủy</a>
                                    </li>
                                </ul>
                             </div>
                        </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container mb-3">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">

                        <?php if(!empty($list_complete_bill )) :  ?>
                        <?php foreach( $list_complete_bill as $value):extract($value)?>
                            <div class="order_box mb-3 ">
                                <div class="row  border-bottom">
                                    <div class="col-8 ">
                                        <img src="https://laptop360.net/wp-content/uploads/2019/04/logo-home-laptop-360.png" style="height: 50px; width: 50px;" alt="">
                                        <span>NMT Laptop World</span>
                                    </div>
                                    <div class="col-4 justify-content-center my-auto text-center">
                                        <i class="fa-solid fa-face-smile-wink"></i>
                                        <span class="ml-2">Cảm ơn bạn đã mua hàng của shop!!</span>
                                </div>
                                </div>
                                <?php 
                                    $detail_bill = Load_Detail_Bill_Transport($id_hoa_don);
                                    foreach($detail_bill as $innerValue):
                                        extract($innerValue);
                                        echo '
                                            <div class="row mt-4 border-bottom">
                                                <div class="col-2">
                                                <a href="../../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product='.$id_sp.'"><img src="../../../../Duan1_Project/img/'.$img.'" alt="" style="width: 100px;" /></a>
                                                </div>
                                                <div class="col-8">
                                                    <div><span style="font-size: 15px">'.$ten_sp.'</span></div>
                                                    <div>X'.$quantity.'</div>
                                                </div>
                                                <div class="col-2"><span style="font-size: 18px">'.currency_format($gia, ' VND').'</span></div>
                                            </div>
                                        ';
                                    endforeach;
                                ?>
                                <div class="row mt-4 mb-2">
                                    <div class="col-8"></div>
                                    <div class="col-4 text-right">
                                        <i class="fa-regular fa-money-bill-1" style="font-size: 18px"></i>
                                        <span style="font-size: 18px">Thành tiền: <?php echo currency_format($tong_gia, ' VND'); ?></span>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-10 my-auto">
                                       
                                    </div>
                                    <div class="col-2">
                                        <div class="d-inline">
                                            <a href="../../../../Duan1_Project/Controller/index_user.php?request=received-product&id_bill=<?=$id_hoa_don?>" class="btn btn-success">Đánh giá</a>
                                        </div>
                                    </div>
                                            
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else :  ?>
                        <div class="text-center" role="alert">
                            <p class="alert alert-primary h3">Chưa có đơn hàng nào</p>
                        </div>
                    <?php endif; ?>
                       



                    </div>
                </div>
            </div>
        </div>

     