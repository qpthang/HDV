<div class="panel panel-primary">
	<div class="panel-heading">Thêm sổ hộ khẩu</div>
	<div class="panel-body">
		<form action="index.php?controller=sohokhau&action=do_add" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">Số hộ khẩu</div>
				<div class="col-md-10">
					<input type="text" placeholder="Số hộ khẩu " required class="form-control" name="hokhauso">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Họ và tên chủ hộ</div>
				<div class="col-md-10">
					<input type="text" placeholder="Họ và tên chủ hộ" required class="form-control" name="hotenchuho">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Nơi thường trú</div>
				<div class="col-md-10">
					<input type="text" placeholder="nơi thường trú"  required class="form-control" name="noithuongtru">
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