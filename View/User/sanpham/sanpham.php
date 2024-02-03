<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Tất cả sản phẩm</h2>
                    <p>Những sản phẩm trong shop đều ở đây hết đó ...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_gap">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">

                <div class=" product_top_barlatest_product_inner">
                    <div class="row">
                            <?php
                                if(is_array($list_data_product)){
                                    foreach($list_data_product as $product){
                                        extract($product);
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img class="card-img" src="../../../../Duan1_Project/img/<?=$img?>" alt="" />
                                        <div class="p_icon">
                                            <a href="../../../Duan1_Project/Controller/index_user.php?request=detail-product&id_product=<?=$id_sp?>">
                                                <i class="ti-eye" title="Chi tiết sản phẩm"></i>
                                            </a>
                                            <a href="index.php?action=addgiohang&id_pro=<?=$product_id?>">
                                                <i class="ti-shopping-cart" title="Thêm vào giỏ hàng"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4><?=$ten_sp?></h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4"><?php echo currency_format($gia, ' VND'); ?></span>
                                            <del>20.000.000đ</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }}
                            ?>
                    </div>
                </div>
            </div>