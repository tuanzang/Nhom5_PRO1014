
<!-- <section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content row">
                <div class="col-lg-12">
                    <p class="sub text-uppercase">MDPsmartphone</p>
                    <h3> <span>Iphone </span> chính hãng<br />Bảo hành <span>trọn đời</span></h3>
                    <h4>Giảm đến 1 triệu đồng cho khách hàng thanh toán lần đầu.</h4>
                </div>
            </div>
        </div>
    </div>
</section> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="https://img.freepik.com/free-psd/cyber-monday-banner-template_23-2148722783.jpg?w=1060&t=st=1706711703~exp=1706712303~hmac=e25591555f5dcac8a05fc607bc38ac03d47145d06d766de3c4465f93ac8b21c6"style="max-height:450px; width: 100%;"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="https://cdn.tgdd.vn/Files/2018/11/27/1134121/bannerlaptopthang12_800x450.png" style="max-height:450px; width: 100%;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" src="https://nguyencongpc.vn/media/news/1069-274295881_3110865975898620_1417727696820541299_n.jpg" style="max-height:450px; width: 100%;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Sản phẩm mới nhất</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
                <?php foreach($list_three_data_product as $value): extract($value) ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="../img/<?=$img?>" alt="" />
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
                                <h4 title="Chi tiết sản phẩm"><span class="mr-4"><?=$ten_sp?></span></h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4"><?php echo currency_format($gia, ' VND'); ?></span>
                                <del>14.000.000đ</del>
                            </div>
                        </div>
                    </div>
                </div>
         <?php endforeach?>
        </div>
    </div>
</section>

<!--================ Inspired Product Area =================-->
<section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Gợi ý hôm nay</span></h2>
                    <p>Có thể bạn sẽ cảm thấy thú vị với những sản phẩm của chúng tôi</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach($list_six_data_product as $value): extract($value) ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="../img/<?=$img?>" alt="" />
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
                                <span class="mr-4"><?=$gia?></span>
                                <del>16.000.000đ</del>
                            </div>
                        </div>
                    </div>
                </div>
           <?php endforeach ?>
        </div>
    </div>
</section>
<!--================ End Inspired Product Area =================-->