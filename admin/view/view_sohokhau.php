<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Danh sách sổ hộ khẩu </div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Số hộ khẩu</td>
					<td>Họ và tên chủ hộ</td>
					<td>Nơi thường trú</td>
					<td>Action</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
					 	<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['sohokhau']; ?></td>
					 		<td><?php echo $value['chuho']; ?></td>
					 		<td><?php echo $value['noithuongtru']; ?></td>
					 		<td>
					 		<a onclick="return confirm('Bạn chắc chắn xóa')" href="index.php?controller=sohokhau&action=delete&id=<?php echo $value['sohokhau'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
					 		<a href="index.php?controller=QL_nhankhau&action=add&id=<?php echo $value['sohokhau'];?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></a>
					 		<a href="index.php?controller=QL_nhankhau&action=view&id=<?php echo $value['sohokhau']; ?>" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></a>
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