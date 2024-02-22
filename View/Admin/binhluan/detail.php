<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Bình Luận</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="../../../../Duan1_Project/Controller/index_admin.php?request=manage-comment">Quản Lý Bình Luận</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Tên sản phẩm: <?=$ten_sp?></h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Nội dung</th>
                        <th>Ngày BL</th>
                        <th>Người BL</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt=0;
                    foreach ($list_detail_comment as $value) {
                        extract($value);
                        $stt +=1;
                    ?>
                        <tr>
                            <td><?= $stt ?></td>
                            <td><?= $noi_dung?></td>
                            <td><?= $ngay_tao ?></td>
                            <td><?= $ho_ten ?></td>
                            <td>
                                <a href="../../../../../Duan1_Project/Controller/index_admin.php?request=delete-comment&id_bl=<?=$id_bl?>" class="btn btn-primary status pending">Xóa</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>