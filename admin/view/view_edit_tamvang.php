<div class="panel panel-primary">
	<div class="panel-heading">Sửa tạm trú</div>
	<div class="panel-body">
		<form action="index.php?controller=kb_tamvang&action=do_edit" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">Họ và tên</div>
				<div class="col-md-10">
					<input type="text" placeholder="Họ và tên"  required class="form-control" name="hovaten" value="<?php echo $data['hovaten']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Ngày sinh</div>
				<div class="col-md-10">
					<input type="date"  required class="form-control" name="ngaysinh" <?php echo $data['ngaysinh']; ?>>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Quê quán</div>
				<div class="col-md-10">
					<input type="text" placeholder="Quê quán" required class="form-control" name="quequan" value="<?php echo $data['quequan']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Tạm trú tại</div>
				<div class="col-md-10">
					<input type="text" placeholder="tạm trú tại" required class="form-control" name="tamtrutai" value="<?php echo $data['tamtrutai']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Từ ngày </div>
				<div class="col-md-10">
					<input type="date"  required class="form-control" name="tungay" value="<?php echo $data['tungay']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2">Đến ngày</div>
				<div class="col-md-10">
					<input type="date" required class="form-control" name="denngay" value="<?php echo $data['denngay']; ?>">
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