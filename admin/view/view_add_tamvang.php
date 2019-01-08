<div class="panel panel-primary">
	<div class="panel-heading">Thêm tạm vắng</div>
	<div class="panel-body">
		<form action="index.php?controller=kb_tamvang&action=do_add" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">Họ và tên</div>
				<div class="col-md-10">
					<input type="text" placeholder="Họ và tên"  required class="form-control" name="hovaten">
				</div>
			</div><br>
				<div class="row">
				<div class="col-md-2">Giới tính</div>
				<div class="col-md-2">
				<select name="gioitinh" class="form-control" id="">
					<option value="2">Nam</option>
					<option value="1">Nữ</option>
				</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Ngày sinh</div>
				<div class="col-md-10">
					<input type="date"  required class="form-control" name="ngaysinh">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">CMND</div>
				<div class="col-md-10">
					<input type="text" placeholder="Chứng minh nhân dân" required class="form-control" name="CMND">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Điên thoại</div>
				<div class="col-md-10">
					<input type="text" placeholder="Số điện thoại" required class="form-control" name="sdt">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Nơi cư trú</div>
				<div class="col-md-10">
					<input type="text" placeholder="Nơi cư trú" required class="form-control" name="noicutru">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Từ ngày </div>
				<div class="col-md-10">
					<input type="date"  required class="form-control" name="tungay">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Đến ngày</div>
				<div class="col-md-10">
					<input type="date" required class="form-control" name="denngay">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Lý do</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="lydo">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" class="btn btn-success" value="Save">
				</div>
		</form>
	</div>
</div>