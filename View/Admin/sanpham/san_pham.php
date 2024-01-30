<!-- CONTENT -->
<section id="content">
        <!-- NAVBAR -->
        <nav>
			<a href="#" class="nav-link">Hello ...</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="./public/images/people.png">
			</a>
		</nav>
        <!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản Lý Sản Phẩm</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Quản Lý Sản Phẩm</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Đơn Hàng</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>User</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Doanh Thu</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách sản phẩm</h3>
						<button type="button" class="btn btn-primary btn-add-sp" data-toggle="modal" data-target="#them-moi-san-pham">Thêm Sản Phẩm</button>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên Sản Phẩm</th>
								<th>Ảnh</th>
								<th>Giá Tiền</th>
								<th>Loại</th>
								<th>Tạo Ngày</th>
								<th>Update Ngày</th>
								<th>Chức Năng</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>
									John Doe
								</td>
								<td>
                                    <img src="./public/images/people.png">
								</td>
								<td>10.000.000 </td>
								<td>Iphone</td>
								<td>01-10-2021</td>
								<td>01-10-2021</td>
								<td><button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#sua-san-pham">Sửa</button>
									<button type="button" class="btn btn-primary status process" data-toggle="modal" data-target="#xoa-san-pham">Xóa</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
    </section>
    <!-- CONTENT -->

	<!--MODAL thêm sản phẩm BOOTSTRAP-->
	<div class="modal fade" id="them-moi-san-pham" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Sản Phẩm</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <form>
				<div class="form-group">
				  <label for="recipient-name" class="col-form-label">Tên sản phẩm:</label>
				  <input type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Ảnh:</label>
					<input type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Giá tiền:</label>
					<input type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Loại:</label>
					<input type="text" class="form-control" id="recipient-name">
				</div>
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Ngày:</label>
					<input type="text" class="form-control" id="recipient-name">
				  </div>
			  </form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Add</button>
			</div>
		  </div>
		</div>
	  </div>
	  <!--MODAL thêm sản phẩm-->


	<!--MODAL sửa sản phẩm BOOTSTRAP-->
	<div class="modal fade" id="sua-san-pham" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Sửa Sản Phẩm</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
					  <label for="recipient-name" class="col-form-label">Tên sản phẩm:</label>
					  <input type="text" class="form-control" id="recipient-name" value="Tên sản phẩm ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Ảnh:</label>
						<input type="text" class="form-control" id="recipient-name" value="Ảnh sản phẩm ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Giá tiền:</label>
						<input type="text" class="form-control" id="recipient-name" value="Giá tiền sản phẩm ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Loại:</label>
						<input type="text" class="form-control" id="recipient-name" value="Loại sản phẩm ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Ngày:</label>
						<input type="text" class="form-control" id="recipient-name" value="Ngày sản phẩm ở đây">
					  </div>
				  </form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Update</button>
			</div>
		  </div>
		</div>
	  </div>
	<!--MODAL sửa sản phẩm BOOTSTRAP-->


	<!--MODAL xóa sản phẩm BOOTSTRAP-->
	<div class="modal fade" id="xoa-san-pham" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			  <button type="button" class="btn btn-danger">Delete</button>
			</div>
		  </div>
		</div>
	  </div>
	<!--MODAL xóa sản phẩm BOOTSTRAP-->