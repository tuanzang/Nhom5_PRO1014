 <!-- MAIN -->
 <main>
     <div class="head-title">
         <div class="left">
             <h1>Quản Lý Sản Phẩm</h1>
             <ul class="breadcrumb">
                 <li>
                     <a href="#">Home</a>
                 </li>
                 <li><i class='bx bx-chevron-right'></i></li>
                 <li>
                     <a class="active" href="#">Quản Lý Sản Phẩm</a>
                 </li>
             </ul>
         </div>
     </div>

     <div class="table-data">
         <div class="order">
             <div class="head">
                 <h3>Danh sách sản phẩm</h3>
                 <a href="../Controller/index_admin.php?request=create-product" class="btn btn-primary btn-add-sp">Thêm Sản Phẩm</a>

             </div>
             <table>
                 <thead>
                     <tr>
                         <th>Mã</th>
                         <th>Tên Sản Phẩm</th>
                         <th>Danh Mục</th>
                         <th>Ảnh</th>
                         <th>Giá</th>
                         <th>Ngày Tạo</th>
                         
                     </tr>
                 </thead>
                 <tbody>
                   <?php foreach(  $list_data_product as $value) : extract($value) ?>
                         <tr>
                             <td><?=$id_sp?></td>
                             <td><?=$ten_sp?></td>
                             <td><?=$ten_dm?></td>
                             <td><img src='../img/<?=$img?>'></td>
                             <td><?php echo currency_format($gia, ' VND'); ?></td>
                             <td><?=$ngay_tao?></td>
                             <td><a href="../Controller/index_admin.php?request=edit-product&id=<?=$id_sp?>" class="btn btn-primary status pending">Sửa</a>
                                 <a href="../Controller/index_admin.php?request=delete-product&id=<?=$id_sp?>" onclick="return confirm('bạn chắc chắn xóa chứ!');" class="btn btn-primary status process">Xóa</a>
                             </td>
                         </tr>
                <?php endforeach ?>
                 </tbody>
             </table>
         </div>

     </div>
 </main>
 <!-- MAIN -->
 </section>