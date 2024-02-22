<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Chi tiết sản phẩm</h2>
                    <p>Đây là sản phẩm mà bạn đang để ý ư ...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<div class="product_image_area mb-40">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_product_img">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../../../../Duan1_Project/img/<?=$img?>" alt="firt" style="padding: 50px;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?= $ten_sp ?></h3>
                    <h2><?php echo currency_format($gia, ' VND'); ?></h2>
                    <ul class="list">
                        <li>
                            <a class="active" href="#">
                                <span>Hãng </span> : <?=$ten_dm?></a>
                        </li>
                        <li>
                            <a href="#"> <span>Dung lượng</span> : 64GB</a>
                        </li>
                    </ul>
                    <p>
                        <?= $mo_ta ?>
                    </p>
                    <form action="../../../../Duan1_Project/Controller/index_user.php?request=add-cart" method="POST">
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input type="number" name="quantity" id="sst"  value="1" min="1" title="Quantity:" class="input-text qty" />
                        </div>
                        <div class="card_area">
                            <input type="hidden" value="<?= $id_sp ?>" name="id_product">
                            <input type="hidden" value="<?= $gia ?>" name="price">
                            <input type="submit" class="main_btn" value="Thêm vào giỏ hàng" name="add_to_cart">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-info-tabs container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mô tả</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#comment" type="button" role="tab" aria-controls="profile" aria-selected="false">Bình luận</button>
        </li>
    
    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?=$chi_tiet?>
            </div>
            <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="contact-tab">


            <?php if(!empty($list_comment)){
                        foreach($list_comment as $value){
                            extract($value);
                     ?>
                    <div class="card mb-3 comment-container border-0 rounded">
                    <div class="card-header row border-0">
                            <div class="card-title col-9 text-primary mb-1">
                                <i class="fa-solid fa-circle-user mr-1"></i><?=$ho_ten?>
                            </div>
                            <div class="card-subtitle text-muted col-3"><?=$ngay_tao?></div>
                            <div class="star row mt-0 mb-1">
                                <div class="col-3 ">
                                  <i class="fas fa-star" style="color:gold"></i>
                                  <i class="fas fa-star" style="color:gold"></i>
                                  <i class="fas fa-star" style="color:gold"></i>
                                  <i class="fas fa-star" style="color:gold"></i>
                                  <i class="fas fa-star" style="color:gold"></i>
                                </div>
                                <div class="col-9"></div>
                            </div>
                            <div class=" border-0 mt-0">
                            <p class="card-text" style="font-size:16px"><?=$noi_dung?></p>
                        </div>
                        </div>
                    </div>
                    <?php } }  ?>    
                    
                    <?php  if(isset($_SESSION['user'])){
                        echo '
                                <form action="../../../../Duan1_Project/Controller/index_user.php?request=add-comment" method="post" class="mt-3">
                                <div class="mb-4">
                                    <span >Đánh giá</span>
                                    <div class="star row mt-0 mb-3">
                                        <div class="col-3 ">
                                        <i class="fas fa-star" style="color:gold"></i>
                                        <i class="fas fa-star" style="color:gold"></i>
                                        <i class="fas fa-star" style="color:gold"></i>
                                        <i class="fas fa-star" style="color:gold"></i>
                                        <i class="fas fa-star" style="color:gold"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="id_product" value="'.$id_sp.'">
                                    <input type="text" name="comment" class="form-control py-5" id="comment" required>
                                </div>
                                <input type="submit" name="comment-btn" style="width: auto; padding: 5px 10px;" class="btn btn-primary " value="Bình luận">
                        </form>
                        
                        ';
                    }?>
                    
                
                    
                    

            </div>
        </div>
    </div>

        <div class="row">
            <h2 style="margin-bottom: 15px">Sản phẩm cùng hãng</h2>
            <?php foreach ($list_same_category as $value) : extract($value); ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="../../../../Duan1_Project/img/<?= $img ?>" alt="" />
                            <div class="p_icon">
                                <a href="../../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product=<?= $id_sp ?>">
                                    <i class="ti-eye" title="Chi tiết sản phẩm"></i>
                                </a>
                                <a href="../../../../Duan1_Project/Controller/index_user.php?request=add-cart&id_product=<?=$id_sp?>&price=<?=$gia?>">
                                    <i class="ti-shopping-cart" title="Thêm vào giỏ hàng"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                            <a href="../../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product=<?= $id_sp ?>" class="d-block">
                                <h4><?= $ten_sp ?></h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4"><?php echo currency_format($gia, ' VND'); ?></span>
                                <del>20.000.000 VND</del>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    
</div>