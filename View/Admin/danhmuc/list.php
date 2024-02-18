
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Danh Mục</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href=" ../../../../Duan1_Project/Controller/index_admin.php?request=manager">Quản Lý Danh Mục</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="table-data">
        <div class="todo">
            <div class="head">
                <h3>Danh sách danh mục</h3>
                <a href="../../../../Duan1_Project/Controller/index_admin.php?request=createbrand" class="btn btn-primary status pending btn-add-sp">Thêm danh mục</a>
            </div>
            <ul class="todo-list">
                <?php foreach ($list_data_categories as $value): extract($value); ?>
                        <li class="completed">
                                <?=$ten_dm?>
                                <div>
                                    <a href="../../../../Duan1_Project/Controller/index_admin.php?request=editBrand&id=<?=$id_dm?>" class="btn btn-primary status pending">Sửa</a>
                                    <a href="../../../../Duan1_Project/Controller/index_admin.php?request=deleteBrand&id=<?=$id_dm?>" class="btn btn-primary status pending" onclick="return confirm('bạn chắc chắn xóa chứ!');">Xóa</a>
                                </div>
                            </li>
                
                <?php endforeach ?>
                    

            </ul>
        </div>

    </div>
</main>
<!-- MAIN -->
</section>