<div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Hãng</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <?php
                                    if(is_array($list_brand)){
                                       foreach($list_brand as $brand){
                                        extract($brand);
                                ?>
                                <li>
                                    <a href="index.php?action=sanpham&id_brand=<?=$id_dm?>"><?=$ten_dm?></a>
                                </li>
                                <?php
                                    }}
                                ?>
                                <li>
                                    <form class="form-inline" action="index.php?action=sanpham" method="POST">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search" name="key-search">
                                            <div class="input-group-append">
                                                <button class="btn btn-success btn-sm" type="submit" name="btn-search">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </aside>


                </div>
            </div>
        </div>
    </div>
</section>