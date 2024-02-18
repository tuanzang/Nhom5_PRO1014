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
                        <?=$mo_ta?>
                    </p>
                    <form action="../../../../Duan1_Project/Controller/index_user.php?request=add-cart&id_product=<?=$id_sp?>&&price=<?=$gia?>" method="POST">
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input type="number" name="quantity" id="sst" max="3" value="1" min="1" title="Quantity:" class="input-text qty" />
                        </div>
                        <div class="card_area">

                            <input type="hidden" value="<?= $id_sp ?>" name="product_id">
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
        <li class="nav-item">
            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Sự mô tả</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Nhận xét</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <?=$chi_tiet?>

        </div>
        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
            <div class="review-heading">ĐÁNH GIÁ</div>
            <div class="mb-20">
               
                    <div class=" mb-2 " style="display:inline-block; padding: 5px 10px; border-radius: 10px; width: auto; background-color:#f6f6f6;">
                        <h6 class="card-title"></h6>
                        <p class="card-text ps-3"><?= $note ?></p>
                    </div><br>
                <?php
                    
                ?>
            </div>
            <form class="review-form" action="index.php?action=comment" method="POST">
                <div class="form-group">
                    <label>Đánh giá của bạn</label>
                    <div class="reviews-counter">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id_product" value="">

                    <label>Tin nhắn của bạn</label>

                    <input name="note" type="text" class="form-control">
                </div>

                <button type="submit" name="btn_gui" class="round-black-btn">Gửi đánh giá</button>
            </form>
        </div>
    </div>
    <div class="row ">
           <h2 style="margin-bottom: 15px">Sản phẩm cùng hãng</h2>
            <?php foreach($list_same_category as $value) : extract($value); ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="product-img">
                        <img class="img-fluid w-100" src="../../../../Duan1_Project/img/<?=$img?>" alt="" />
                        <div class="p_icon">
                            <a href="../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product=<?=$id_sp?>">
                                <i class="ti-eye" title="Chi tiết sản phẩm"></i>
                            </a>
                            <a href="index.php?action=addgiohang&id_pro=">
                                <i class="ti-shopping-cart" title="Thêm vào giỏ hàng"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product=<?=$id_sp?>" class="d-block">
                            <h4><?=$ten_sp?></h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4"> <?php echo currency_format($gia, ' VND'); ?></span>
                            <del>20.000.000 VND</del>
                        </div>
                    </div>
                </div>
            </div>
       <?php endforeach ?>
    </div>
</div>