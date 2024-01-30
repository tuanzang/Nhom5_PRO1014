
<form method="POST" enctype="multipart/form-data" action="../Controller/index_admin.php?request=update-product">
    <div class="" role="document">
        <div class="">
            <?php if(is_array($list_one_data_product)) extract($list_one_data_product);
                $id_dm_product = $id_dm;
            ?>
            <div class="modal-body">
                <input type="hidden" value="<?=$id_sp?>" name="id_pro">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" id="recipient-name" name="pro_name" value="<?=$ten_sp?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Ảnh: (<?=$img?>)</label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Giá tiền:</label>
                    <input type="text" class="form-control" id="recipient-name" name="price" value="<?php echo currency_format($gia, ' VND'); ?>">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Loại:</label>
                    <select name="brand" id="" class="form-control">
                    <?php 
                            foreach($list_data_categories as $value){
                            extract($value);
                            $selected = ($id_dm === $id_dm_product) ? "selected":"";
                            echo '<option value="'.$id_dm.'" '.$selected.'>'.$ten_dm.'</option>' ;
                        } ?>
                    </select>

                </div>
                <!-- <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mô tả</label>
                    <input type="text" class="form-control" id="recipient-name" name="des" value="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Chi tiết</label>
                    <input type="text" class="form-control" id="recipient-name" name="detail" value="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số lượng</label>
                    <input type="text" class="form-control" id="recipient-name" name="quantity"value="">
                </div> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="btn_update_pro" class="btn btn-primary" value="Cập Nhật">
            </div>
            <span></span>
        </div>
    </div>
</form>