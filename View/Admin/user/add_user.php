

<form method="POST" enctype="multipart/form-data" action="../../../../Duan1_Project/Controller/index_admin.php?request=add-user">
    <div class="" role="document">
        <div class="">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm quản trị viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="user_name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" id="recipient-name"  name="password">
                </div>
                <!-- <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Hình ảnh: </label>
                    <input type="file" class="form-control" id="recipient-name" name="img">
                </div> -->
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="email">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" id="recipient-name"  name="phone">
                </div>
                <!-- <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" id="recipient-name"  name="address">
                </div> -->
                <input type="hidden" name="role" id="" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="btn_add_user" value="Thêm">
            </div>
        </div>
    </div>
</form>
<script>
		// const allSideMenu = document.querySelectorAll('#sidebar .side-menu .top li a');

		// allSideMenu.forEach(item => {
		// 	const li = item.parentElement;

		// 	item.addEventListener('click', function() {
		// 		allSideMenu.forEach(i => {
		// 			i.parentElement.classList.remove('active');
		// 		})
		// 		li.classList.add('active');
		// 	})
		// });
		
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

	</html>