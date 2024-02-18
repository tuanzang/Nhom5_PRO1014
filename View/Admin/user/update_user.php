<?php
if (isset($list_one_data_user ) && is_array($list_one_data_user )) {
    extract($list_one_data_user );
}
?>
<form method="POST" enctype="multipart/form-data" action="../../../../Duan1_Project/Controller/index_admin.php?request=update-user">
    <div class="" role="document">
        <div class="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Thông Tin User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_user" value="<?= $id_kh?>">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $ho_ten ?>" name="user_name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mật khẩu:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $mk ?>" name="password">
                </div>
                <!-- <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Hình ảnh: (<?= $image ?>)</label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div> -->
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $gmail ?>" name="email">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" id="recipient-name" value="<?= $sdt ?>" name="phone">
                </div>
                <!-- <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" id="recipient-name" value="<?= $address ?>" name="address">
                </div> -->
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Vai Trò</label>
                    <select required class="form-control" name="role" id="">
                        <?php $arr = array('0' => 'Thành Viên', '1' => 'Admin'); ?>
                        <?php foreach ($arr as $key => $value) { ?>
                            <option value="<?php echo $key; ?>" <?php echo $key ==  $id_vaitro ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <input type="submit" class="btn btn-primary" name="btn_update_user" value="Cập Nhật">
            </div>
        </div>
    </div>
</form>