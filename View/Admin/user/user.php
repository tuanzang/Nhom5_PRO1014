
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản Lý User</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Quản Lý User</a>
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
						<h3>Danh sách user</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên Đăng Nhập</th>
								<th>Email</th>
								<th>Số Điện Thoại</th>
								<th>Địa Chỉ</th>
								<th>Role</th>
                                <th>Chức năng</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>
									ngocdeptrai123
								</td>
								<td>
									ngoc@gmail.com
								</td>
								<td>0399999999</td>
								<td>Hồ Tùng Mậu, Hà Nội</td>
								<td>Admin</td>
								<td><button type="button" class="btn btn-primary status pending" data-toggle="modal" data-target="#sua-user">Sửa</button>
									<button type="button" class="btn btn-primary status process" data-toggle="modal" data-target="#xoa-user">Xóa</button>
									
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

	<!--MODAL sửa user BOOTSTRAP-->
	<div class="modal fade" id="sua-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Sửa Thông Tin User</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
					<label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
					<input type="text" class="form-control" id="recipient-name" value="Tên đăng nhập ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Email:</label>
						<input type="text" class="form-control" id="recipient-name" value="Email ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Số điện thoại:</label>
						<input type="text" class="form-control" id="recipient-name" value="Số điện thoại ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Địa chỉ:</label>
						<input type="text" class="form-control" id="recipient-name" value="Địa chỉ ở đây">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Role:</label>
						<input type="text" class="form-control" id="recipient-name" value="Admin or User">
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
	<div class="modal fade" id="xoa-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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