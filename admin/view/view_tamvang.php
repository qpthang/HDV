<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Danh sách tạm trú </div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Họ và Tên</td>
					<td>Giới tính</td>
					<td>Ngày sinh</td>
					<td>Chứng minh nhân dân</td>
					<td>Số điện thoại</td>
					<td>Nơi cu trú</td>
					<td>Từ ngày</td>
					<td>Đến ngày</td>
					<td>Ly do</td>
					<td>Action</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
					 	<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['hovaten']; ?></td>
					 		<td><?php echo $value['gioitinh']==1?"Nữ":"Nam";?></td>
					 		<td><?php echo $value['ngaysinh']; ?></td>
					 		<td><?php echo $value['CMND']; ?></td>
					 		<td><?php echo $value['dienthoai']; ?></td>
					 		<td><?php echo $value['noicutru']; ?></td>
					 		<td><?php echo $value['tungay']; ?></td>
					 		<td><?php echo $value['denngay']; ?></td>
					 		<td><?php echo $value['lydo']; ?></td>
					 		<td>
					 		<a onclick="return confirm('Bạn chắc chắn xóa')" href="index.php?controller=kb_tamvang&action=delete&id=<?php echo $value['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
					 		<a href="index.php?controller=kb_tamvang&action=edit&id=<?php echo $value['id'];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
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