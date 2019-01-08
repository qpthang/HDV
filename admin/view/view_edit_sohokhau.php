<div class="panel panel-primary">
	<div class="panel-heading">Sửa sổ hộ khẩu</div>
	<div class="panel-body">
		<form action="index.php?controller=sohokhau&action=do_edit" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">Số hộ khẩu</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="hokhauso" value="<?php echo $data['sohokhau']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Họ và tên chủ hộ</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="hotenchuho" value="<?php echo $data['hotenchuho']; ?>">
				</div>
			</div><br>>
			<div class="row">
				<div class="col-md-2">Nơi thường trú</div>
				<div class="col-md-10">
					<input type="text" required class="form-control" name="noithuongtru" value="<?php echo $data['noithuongtru']; ?>">
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