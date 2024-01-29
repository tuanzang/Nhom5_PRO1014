
<form method="POST" action="../Controller/index_admin.php?request=update-brand">
    <div class="" role="document">
        <div class="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Danh Mục Sản Phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
                if(is_array($list_one_data_category)){
                    extract($list_one_data_category);
                }
            ?>
            <div class="modal-body">
                    <input type="hidden" class="form-control"  name="id_brand" value="<?=$id_dm?>" >
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên danh mục </label>
                    <input type="text" class="form-control" id="recipient-name" name="brand_name" value="<?=$ten_dm?>">
                </div>
            </div>
            <div class="modal-footer">
                <a href="./index.php?action=danhmuc" class="btn btn-secondary" data-dismiss="modal">Return</a>
                <!-- <input type="submit" value="Add" class="btn btn-primary" name="btn_brand_create"> -->
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
        </div><span></span>
    </div>

</form>