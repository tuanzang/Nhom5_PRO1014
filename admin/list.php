<!-- CONTENT -->
<section id="content">
	<!-- NAVBAR -->
	<nav>
		<a href="#" class="nav-link">Hello ...</a>
		<form action="#">
			<div class="form-input">
				<input type="search" placeholder="Search...">
				<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
			</div>
		</form>
		<input type="checkbox" id="switch-mode" hidden>
		<a href="#" class="notification">
			<i class='bx bxs-bell'></i>
			<span class="num">8</span>
		</a>
		<a href="#" class="profile">
			<img src="public/images/people.jpg">
		</a>
	</nav>
	<!-- NAVBAR -->

	<!-- MAIN -->
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
						<a class="active" href="#">Quản Lý Danh Mục</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="table-data">
			<div class="todo">
				<div class="head">
					<h3>Danh sách danh mục</h3>
					<button type="button" class="btn btn-primary status pending btn-add-sp" data-toggle="modal" data-target="#them-danh-muc-san-pham">Thêm danh mục</button>
				</div>
				<ul class="todo-list">
				
						<li class="completed">
							<?= $brand_name ?>
							<form method="POST">
								<button type="submit" class="btn btn-primary status pending" data-toggle="modal" data-target="#xoa--muc" onclick="return confirm('bạn chắc chắn xóa chứ!');">Xóa</button>
							</form>
						</li>

				</ul>
			</div>

		</div>
	</main>
	<!-- MAIN -->
</section>
<!-- CONTENT -->
<!--MODAL thêm danh mục sản phẩm BOOTSTRAP-->
<div class="modal fade" id="them-danh-muc-san-pham" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form method="POST" action="http://localhost/nhom6DA1/index.php?url=admin&action=createBrand">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Thêm Danh Mục Sản Phẩm</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Tên danh mục sản phẩm thêm mới:</label>
						<input type="text" class="form-control" id="recipient-name" name="brand_name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<!-- <input type="submit" value="Add" class="btn btn-primary" name="btn_brand_create"> -->
					<button type="submit" class="btn btn-primary" name="btn_brand_create">Add</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!--MODAL thêm sản phẩm-->
<!--MODAL xóa danh mục BOOTSTRAP-->
<div class="modal fade" id="xoa-danh-muc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cảnh báo !!!!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Bạn có thực sự muốn xóa khum?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-danger " id="button-cofirm" data-item-id="" name="btn-deletebrand">Delete</button>
			</div>
		</div>
	</div>
</div>

<!--MODAL xóa danh mục BOOTSTRAP-->