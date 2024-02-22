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
                    <a class="active" href=".../../../../Duan1_Project/Controller/index_admin.php?request=manage-bill">Quản Lý Đơn Hàng</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>ID hóa đơn: <?=$id_bill?></h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tạm Tính</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$row = 0;
foreach ($list_detail_bill_address as $value_address) {
    extract($value_address);

    // Tính tổng số sản phẩm
    $totalProducts = count($list_detail_bill_product);

    echo '<tr>';
    echo '<td rowspan='.$totalProducts.'>'.$ten_nguoi_nhan.'</td>';
    echo '<td rowspan='.$totalProducts.'>'.$dia_chi_nguoi_nhan.'</td>';

    foreach ($list_detail_bill_product as $value_product) {
        $row += 1;
        extract($value_product);

        echo '<td>'.$ten_sp.'</td>';
        echo '<td>'.$quantity.'</td>';
        echo '<td>'.currency_format($gia, ' VND').'</td>';
        echo '<td>'.currency_format($gia * $quantity, ' VND').'</td>';
        echo '</tr>';
      
    }  
    echo '<tr>
        <th style="font-size: 20px" colspan="5">Tổng giá</th>
        <td>'.currency_format($tong_gia, ' VND').'</td>
    </tr>';
}
?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>