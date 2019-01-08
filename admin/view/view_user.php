<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Danh sách Tài khoản</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Tài Khoản</td>
					<td>Họ và Tên</td>
					<td>Số điện thoại</td>
					<td>Action</td>

				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
					 	<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['username']; ?></td>
					 		<td><?php echo $value['hoten']; ?></td>
					 		<td><?php echo $value['sdt']; ?></td>
					 		<td><a onclick="return confirm('Bạn chắc chắn xóa')" href="index.php?controller=user&action=delete&username=<?php echo $value['username'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
					 		<a href="index.php?controller=user&action=edit&username=<?php echo $value['username'];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
					 		</td>
					 	</tr>
					 <?php
					 } 
					  ?>
				</table>
			</div>
		</div>
	</div>
</div>