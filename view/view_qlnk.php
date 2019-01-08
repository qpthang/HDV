<div class="qlbk" style="padding-left: 20px; padding-right: 20px;">
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" style="text-align: center; ">Danh sách nhân khẩu đang được quản lý</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Số sổ hộ khẩu</td>
					<td>Họ và tên</td>
					<td>Ngày sinh</td>
					<td>Giới tính</td>
					<td>Quê quán</td>
					<td>Dân tộc</td>
					<td>CMND</td>
					<td>Nghề nghiệp</td>
					<td>Nơi cư trú</td>
				<tr>
					<?php 
					$stt=0;
					foreach ($data as  $value) {
						$stt++ ;
					 ?>
				<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['sohokhau_id']; ?></td>
					 		<td><?php echo $value['hoten']; ?></td>
					 		<td><?php echo $value['ngaysinh']; ?></td>
					 		<td><?php echo $value['gioitinh']==1?"Nữ":"Nam";?></td>
					 		<td><?php echo $value['quenquan']; ?></td>
					 		<td><?php echo $value['dantoc']; ?></td>
					 		<td><?php echo $value['CMND']; ?></td>
					 		<td><?php echo $value['nghenghiep']; ?></td>
					 		<td><?php echo $value['noitrukhiden']; ?></td>
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