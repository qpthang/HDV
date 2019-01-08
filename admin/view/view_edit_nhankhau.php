<div class="panel panel-primary">
	<div class="panel-heading">Sửa nhân khẩu</div>
	<div class="panel-body">
		<form action="index.php?controller=QL_nhankhau&action=do_edit" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">Số hộ khẩu</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="hokhauso" value="<?php echo $data['sohokhau_id']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Quan hệ với hộ chủ</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="quanhevoichuho"
					value="<?php echo $data['quanhe']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Họ và tên</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="hovaten" value="<?php echo $data['hoten']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Họ và tên khác (nếu có)</div>
				<div class="col-md-10">
					<input type="text"  class="form-control" name="hotenkhac" value="<?php echo $data['hotenkhac']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Ngày sinh</div>
				<div class="col-md-10">
					<input type="date"  required class="form-control" name="ngaysinh" value="<?php echo $data['ngaysinh']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Giới tính</div>
				<div class="col-md-2">
				<select name="type" class="form-control" id="">
					<option <?php echo $data['gioitinh']==2?"selected":""; ?> value="2">Nam</option>
					<option <?php echo $data['gioitinh']==1?"selected":"" ;?> value="1">Nữ</option>
				</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Quê quán</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="quequan" value="<?php echo $data['quequan']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Dân tộc</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="dantoc" value="<?php echo $data['dantoc']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Tôn giáo</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="tongiao" value="<?php echo $data['tongiao']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">CMDN</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="CMND" value="<?php echo $data['CMND']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Hộ chiếu</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="hochieu" value="<?php echo $data['hochieu']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Nghề nghiệp</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="nghenghiep" value="<?php echo $data['nghenghiep']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Ngày chuyển đến</div>
				<div class="col-md-10">
					<input type="text"  class="form-control" name="chuyendenngay" value="<?php echo $data['chuyendenngay']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Chỗ thường trú trước khì chuyển đến</div>
				<div class="col-md-10">
					<input type="text"  class="form-control" name="noiokhiden" value="<?php echo $data['noitrukhiden'];?>">
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