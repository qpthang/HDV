<div class="panel panel-primary">
	<div class="panel-heading">
		Thêm tài khoản
	</div>
	<div class="panel-body">
		<div class="col-md-10 col-md-offset-1 col-xs-12">
			<form action="index.php?controller=user&action=do_add" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">Tài khoản</span>
			                <input type="text" class="form-control" required name="username" placeholder="Nhập tên tài khoản">
			              </div>
					</div>
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">Mật Khẩu</span>
			                <input type="password" class="form-control" required name="password" placeholder="*********">
			              </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">Họ và tên</span>
			                <input type="text" class="form-control" required name="hoten" placeholder="Nhập họ và tên">
			              </div>
					</div>
					<div class="col-md-6">
						<div class="input-group" style="margin:5px 0px;">
			                <span class="input-group-addon">SDT</span>
			                <input type="text" class="form-control" required name="sdt" placeholder="0969374590">
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