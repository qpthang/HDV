<div class="panel panel-primary">
	<div class="panel-heading">
		Sửa tài khoản
	</div>
	<div class="panel-body">
		<div class="col-md-10 col-md-offset-1 col-xs-12">
			<form action="index.php?controller=user&action=do_edit&username=<?php echo $username;?>" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">Tài khoản</span>
			                <input type="text" class="form-control" required name="username" value="<?php echo $data['username']; ?>">
			              </div>
					</div>
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">Mật Khẩu</span>
			                <input type="password" class="form-control" required name="password" value="<?php echo $data['password']; ?>">
			              </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">Họ và tên</span>
			                <input type="text" class="form-control" required name="hoten" value="<?php echo $data['hoten']; ?>">
			              </div>
					</div>
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">SDT</span>
			                <input type="text" class="form-control" required name="sdt" value="<?php echo $data['sdt']; ?>">
			              </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<input type="submit" class="btn btn-success" value="Lưu">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="panel-footer">	
	</div>
</div>