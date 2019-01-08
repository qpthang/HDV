<div class="kbtt" style="padding-left: 100px;">
<div class="row" >
	<div class="panel panel-primary">
		<div class="panel-heading" style="text-align: center;">Danh sách nhân khẩu tạm trú đang được quản lý</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Công an quận</td>
					<td>Công an phường</td>
					<td>Họ và tên</td>
					<td>Ngày sinh</td>
					<td>Quê quán</td>
					<td>Tạm trú tại</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
				<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['conganquan']; ?></td>
					 		<td><?php echo $value['conganphuong']; ?></td>
					 		<td><?php echo $value['hovaten'];?></td>
					 		<td><?php echo $value['ngaysinh']; ?></td>
					 		<td><?php echo $value['quequan']; ?></td>
					 		<td><?php echo $value['tamtrutai']; ?></td>
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