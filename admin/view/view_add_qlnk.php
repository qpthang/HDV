<div class="panel panel-primary">
	<div class="panel-heading">Thêm nhân khẩu</div>
	<div class="panel-body">
		<form action="index.php?controller=QL_nhankhau&action=do_add" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">Số hộ khẩu</div>
				<div class="col-md-10">
				<input type="text"  required class="form-control" name="hokhauso" value="<?php echo $id;?>">	
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Quan hệ </div>
				<div class="col-md-10">
					<input type="text" placeholder="Quan hệ với hộ chủ " required class="form-control" name="quanhevoichuho">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Họ và tên</div>
				<div class="col-md-10">
					<input type="text" placeholder="Họ và tên" required class="form-control" name="hovaten">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Họ và tên khác (nếu có)</div>
				<div class="col-md-10">
					<input type="text" placeholder="Họ và tên khác" class="form-control" name="hotenkhac">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Ngày sinh</div>
				<div class="col-md-10">
					<input type="date"  required class="form-control" name="ngaysinh">
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
				<div class="col-md-2">Quê quán</div>
				<div class="col-md-10">
					<input type="text" placeholder="Quê quán" required class="form-control" name="quequan">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Dân tộc</div>
				<div class="col-md-10">
					<input type="text" placeholder="Dân tộc" required class="form-control" name="dantoc">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Tôn giáo</div>
				<div class="col-md-10">
					<input type="text" placeholder="Tôn giáo" required class="form-control" name="tongiao">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">CMND</div>
				<div class="col-md-10">
					<input type="text" placeholder="Chứng minh nhân dân" required class="form-control" name="CMND">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Hộ chiếu</div>
				<div class="col-md-10">
					<input type="text" placeholder="Hộ chiếu" required class="form-control" name="hochieu">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Nghề nghiệp</div>
				<div class="col-md-10">
					<input type="text" placeholder="Nghề nghiệp" required class="form-control" name="nghenghiep">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Ngày chuyển đến</div>
				<div class="col-md-10">
					<input type="text" placeholder="Ngày chuyển đến" class="form-control" name="ngaychuyenden">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Chỗ thường trú trước khì chuyển đến</div>
				<div class="col-md-10">
					<input type="text" placeholder="Chỗ thường trú trước khì chuyển đến"  class="form-control" name="noiokhiden">
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