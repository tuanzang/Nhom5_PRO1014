<main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Biểu Đồ</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href=".../../../../Duan1_Project/Controller/index_admin.php?request=chart">Biểu Đồ</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-data">
        
        <div class="order">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4 mb-4">
                        <div class="custom-column row" style="background-color: #2ecc71;">
                            <div class="col-12 col-md-3">
                                <i class="fa-solid fa-wallet" style="font-size: 3.5em;"></i>
                            </div>
                            <div class="col-12 col-md-9 chart">
                                <span>Doanh Thu</span>
                                <span><?php if(!empty($doanh_thu[0]["doanh_thu"])){
                                    echo currency_format($doanh_thu[0]["doanh_thu"], ' VND');
                                }else{
                                    echo "Đang Cập Nhật";
                                }  ?> &#9660;</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="custom-column row" style="background-color: #2ecc71;">
                            <div class="col-12 col-md-3">
                                <i class="fa-solid fa-users" style="font-size: 3.5em;"></i>
                            </div>
                            <div class="col-12 col-md-9 chart">
                                <span>Người Dùng</span>
                                <span><?php if(!empty($so_luong_nguoi_dung)){
                                    echo $so_luong_nguoi_dung;
                                }else{
                                    echo "Đang Cập Nhật";
                                }  ?> &#9660;</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="custom-column row" style="background-color: #2ecc71;">
                            <div class="col-12 col-md-3">
                                <i class="fa-brands fa-product-hunt" style="font-size: 3.5em;"></i>
                            </div>
                            <div class="col-12 col-md-9 chart">
                                <span>Số Lượng Sản Phẩm</span>
                                <span><?=$so_luong_san_pham?> &#9660;</span>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4 mb-4">
                        <div class="custom-column row" style="background-color: #2ecc71;">
                            <div class="col-12 col-md-3">
                                <i class="fa-solid fa-file-invoice-dollar" style="font-size: 3.5em;"></i>
                            </div>
                            <div class="col-12 col-md-9 chart">
                                <span>Đơn Hàng Hoàn Thành</span>
                                <span><?php if(!empty($so_luong_don_hang_hoan_thanh)){
                                    echo $so_luong_don_hang_hoan_thanh;
                                }else{
                                    echo "Đang Cập Nhật";
                                }  ?>&#9660;</span>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4 mb-4">
                        <div class="custom-column row" style="background-color: #2ecc71;">
                            <div class="col-12 col-md-3">
                                <i class="fa-solid fa-circle-exclamation" style="font-size: 3.5em;"></i>
                            </div>
                            <div class="col-12 col-md-9 chart">
                                <span>Đơn Hàng Đã Hủy</span>
                                <span><?php if(!empty($so_luong_don_hang_huy)){
                                    echo $so_luong_don_hang_huy;
                                }else{
                                    echo "Đang Cập Nhật";
                                }  ?> &#9660;</span>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4 mb-4">
                        <div class="custom-column row" style="background-color: #2ecc71;">
                            <div class="col-12 col-md-3">
                                <i class="fa-solid fa-comment" style="font-size: 3.5em;"></i>
                            </div>
                            <div class="col-12 col-md-9 chart">
                                <span>Lượt Đánh Giá</span>
                                <span><?=$so_luong_bl ?> &#9660;</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="table-data">
                            <div class="order">
                                <div class="head">
                                    <h3>Top 5 Khách Hàng</h3>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Khách Hàng</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Lượt Mua</th>
                                            <th>Tổng Giá Trị</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $stt = 0;
                                        foreach($top_5_kh as $value): extract($value); $stt+=1; ?>
                                        <tr>
                                            <td><?=$stt?></td>
                                            <td><?=$ho_ten?></td>
                                            <td><?=$sdt?></td>
                                            <td><?=$so_lan_mua?></td>
                                            <td><?php echo currency_format($tong_gia_tri, ' VND'); ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-4 mt-2">
                       <h3>Biểu Đồ</h3>
                    </div>
                    <div class="col-md-4 mb-4 chart-container text-center">
                        <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-0"), {
                                    "type": "line",
                                    "data": {
                                        "labels": <?php echo json_encode($doanh_thu_theo_ngay); ?>,
                                        "datasets": [{
                                            "label": "Doanh Thu Theo Ngày Tháng 02/2024",
                                            "data": <?php echo json_encode($tong_doanh_thu_theo_ngay); ?>,
                                            "fill": false,
                                            "borderColor": "rgb(75, 192, 192)",
                                            "lineTension": 0.1
                                        }]
                                    },
                                    "options": {}
                                });
                            </script>
                        
                    </div>

                    <div class="col-md-4 mb-4">
                        <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-1"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": <?php echo json_encode($doanh_thu_theo_tuan); ?>,
                                        "datasets": [{
                                            "label": "Tuần (01-02 -> 29-02-2024)",
                                            "data": <?php echo json_encode($tong_doanh_thu_theo_tuan); ?>,
                                            "fill": false,
                                            "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                            "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                            "borderWidth": 1
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>

                    </div>
                    <div class="col-md-4 mb-4">
                    <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-7"), {
                                    "type": "bar",
                                    "data": {
                                        "labels": <?php echo json_encode($doanh_thu_theo_thang); ?>,
                                        "datasets": [{
                                            "label": "Tháng",
                                            "data": <?php echo json_encode($tong_doanh_thu_theo_thang); ?>,
                                            "borderColor": "rgb(255, 99, 132)",
                                            "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                        }]
                                    },
                                    "options": {
                                        "scales": {
                                            "yAxes": [{
                                                "ticks": {
                                                    "beginAtZero": true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                    </div>
                    <div class="col-md-4 mb-4">
                        <canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                                new Chart(document.getElementById("chartjs-4"), {
                                    "type": "doughnut",
                                    "data": {
                                        "labels": <?php echo json_encode($ten_danh_muc); ?>, 
                                        "datasets": [{
                                            "label": "Issues",
                                            "data": <?php echo json_encode($so_luong_san_pham_danh_muc); ?>,
                                            "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                        }]
                                    }
                                });
                            </script>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="table-data">
                            <div class="order">
                                <div class="head">
                                    <h3>Top 3 Sản Phẩm Bán Chạy Nhất</h3>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Số Lượng Được Mua</th>
                                            <th>Tổng Giá Trị</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $stt = 0;
                                        foreach($top_3_sp_ban_chay as $value): extract($value); $stt+=1; ?>
                                        <tr>
                                            <td><?=$stt?></td>
                                            <td><?=$ten_sp?></td>
                                            <td><?=$quantity?></td>
                                            <td><?php echo currency_format($tong_gia, ' VND'); ?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                
                    

                  
                    
               
               
               

               

                    
                
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</main>

</section>