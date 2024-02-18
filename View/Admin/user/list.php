<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý User</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý User</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách user</h3>
                <a href="../../../../Duan1_Project/Controller/index_admin.php?request=add-user" class="btn btn-primary btn-add-sp">Thêm quản trị viên</a>

            </div>

            <table>
                <thead>
                    <tr>
                        <th>Tên Đăng Nhập</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Vai trò</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_data_user as $value) {
                        extract($value);
                    ?>
                        <tr>
                            <td>
                                <?= $ho_ten ?>
                            </td>
                            <td>
                                <?= $gmail ?>
                            </td>
                            <td><?= $sdt ?></td>
                            <td>
                                <?php if ($id_vaitro === 1) {
                                    echo "<span class='badge badge-danger'>Admin</span>";
                                } else {
                                    echo "<span class='badge badge-success'>Thành Viên</span>";
                                } ?>
                            </td>
                            <td>
                                <a href="../../../../Duan1_Project/Controller/index_admin.php?request=edit-user&id_user=<?= $id_kh?>" class="btn btn-primary status pending">Sửa</a>
                                <a href="../../../../Duan1_Project/Controller/index_admin.php?request=delete-user&id_user=<?= $id_kh ?>" class="btn btn-primary status process" onclick="return confirm('Bạn chắc chắn xóa chứ!');">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</main>