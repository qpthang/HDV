<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Danh sách nhân khẩu</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Họ và tên</td>
					<td>Quan hệ </td>
					<td>ngày sinh</td>
					<td>Giới tính</td>
					<td>Quê quán</td>
					<td>Dân tộc</td>
					<td>Tôn giáo </td>
					<td>CMND</td>
					<td>Nghề nghiệp</td>
					<td>Action</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
					 	<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['hoten']; ?></td>
					 		<td><?php echo $value['quanhe']; ?></td>
					 		<td><?php echo $value['ngaysinh']; ?></td>
					 		<td><?php echo $value['gioitinh']==1?"Nữ":"Nam";?></td>
					 		<td><?php echo $value['quequan']; ?></td>
					 		<td><?php echo $value['dantoc']; ?></td>
					 		<td><?php echo $value['tongiao']; ?></td>
					 		<td><?php echo $value['CMND']; ?></td>
					 		<td><?php echo $value['nghenghiep']; ?></td>
					 		<td><a onclick="return confirm('Bạn chắc chắn xóa')" href="index.php?controller=QL_nhankhau&action=delete&id=<?php echo $value['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
					 		<a href="index.php?controller=QL_nhankhau&action=edit&id=<?php echo $value['id'];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
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