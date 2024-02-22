<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Đơn Hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Quản Lý Đơn Hàng</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách đơn hàng</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id đơn hàng</th>
                        <th>Người đặt hàng</th> 
                        <th>Số điện thoại</th>
                        <th>Thành tiền</th>
                        <th>Thời Gian</th>
                        <th>Phương thức Thanh Toán</th>
                        <th>Trạng Thái Đơn hàng</th>
                        <th>Chi tiết</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                        <?php if (!empty($list_wait_confirm)) {
                            foreach ($list_wait_confirm as $value) {
                                extract($value);
                        ?>
                                <tr>
                                    <td><?= $id_hoa_don ?></td>
                                    <td><?= $ho_ten ?></td>
                                    <td><?= $sdt ?></td>
                                    <td><?php echo currency_format($tong_gia, ' VND'); ?></td>
                                    <td><?= $ngay_tao ?></td>
                                    <td>
                                        <span class="badge badge-pill badge-primary">
                                            <?php
                                            if ($phuong_thuc === 0) {
                                                echo 'Thanh toán online';
                                            } else {
                                                echo 'Thanh toán khi nhận hàng';
                                            }
                                            ?>
                                        </span>
                                    </td>
                                    <td>
                                    <?php
                                            if ($trang_thai === 0) {
                                                echo ' <span class="badge badge-pill badge-warning">
                                                            Chờ xác nhận
                                                       </span>
                                                ';
                                            } else if($trang_thai === 1){
                                                echo '<span class="badge badge-pill badge-warning">
                                                        Đang vận chuyển
                                                    </span>';
                                            }else if($trang_thai === 2){
                                                echo '<span class="badge badge-pill badge-success">
                                                Hoàn thành
                                               </span>';
                                            }else if ($trang_thai === 3){
                                                echo ' <span class="badge badge-pill badge-danger">
                                                Đã hủy
                                           </span>';
                                            }
                                            ?>
                                       
                                    </td>
                                    <td>
                                        <a href=".../../../../Duan1_Project/Controller/index_admin.php?request=detail-bill&id_bill=<?=$id_hoa_don?>" class="btn btn-primary status pending">Chi tiết</a>
                                    </td>
                                    <td>
                                        <?php if($trang_thai !== 3 && $trang_thai !== 1 && $trang_thai !== 2){
                                            echo '<a href=".../../../../Duan1_Project/Controller/index_admin.php?request=edit-bill&id_bill='.$id_hoa_don.'" class="badge badge-pill badge-info">Sửa</a>';
                                        }?>
                                    </td>
                                    
                                </tr>
                        <?php }
                        } ?>
                 </tbody>

            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->