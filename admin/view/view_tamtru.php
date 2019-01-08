<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Danh sách tạm trú </div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Công an phường</td>
					<td>Họ và Tên</td>
					<td>Ngày sinh</td>
					<td>Quê quán</td>
					<td>Tạm trú tại</td>
					<td>Từ ngày</td>
					<td>Đến ngày</td>
					<td>Action</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
					 	<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['conganphuong']; ?></td>
					 		<td><?php echo $value['hovaten']; ?></td>
					 		<td><?php echo $value['ngaysinh']; ?></td>
					 		<td><?php echo $value['quequan']; ?></td>
					 		<td><?php echo $value['tamtrutai']; ?></td>
					 		<td><?php echo $value['tungay']; ?></td>
					 		<td><?php echo $value['denngay']; ?></td>
					 		<td><a onclick="return confirm('Bạn chắc chắn xóa')" href="index.php?controller=kb_tamtru&action=delete&id=<?php echo $value['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
					 		<a href="index.php?controller=kb_tamtru&action=edit&id=<?php echo $value['id'];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
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