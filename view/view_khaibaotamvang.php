<div class="kbtv" style="padding-left: 100px;">
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" style="text-align: center; ">Danh sách nhân khẩu tạm vắng đang được quản lý</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Họ và tên</td>
					<td>Giới tính</td>
					<td>Ngày sinh</td>
					<td>CMND</td>
					<td>Điện thoại</td>
					<td>Nơi cư trú</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
				<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['hovaten']; ?></td>
					 		<td><?php echo $value['gioitinh']; ?></td>
					 		<td><?php echo $value['ngaysinh'];?></td>
					 		<td><?php echo $value['CMND']; ?></td>
					 		<td><?php echo $value['dienthoai']; ?></td>
					 		<td><?php echo $value['noicutru']; ?></td>
				</tr>
				<?php
					 } 
					  ?>
				</table>
			</div>
		</div>
	</div>
</div>
</div>