<div class="aa" style="padding-left: 10px; padding-right: 20px;">
	<form action="" method="post" style="padding: 15px 10px 10px 300px;">
		Search: <input type="text" name="search">
		<button type="submit" name="aaa">Summit</button>
	</form>
	<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" style="text-align: center; padding-bottom: 15px;">SỔ HỘ KHẨU</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<td>STT</td>
					<td>Hộ khẩu số</td>
					<td>Quan hệ với chủ hộ</td>
					<td>Họ và tên</td>
					<td>Giới tính</td>
					<td>Ngày sinh</td>
					<td>Nguyên quán</td>
					<td>Dân tộc</td>
					<td>Nơi thường trú</td>
				<tr>
				 <?php 
					if(isset($_POST['aaa'])){
						$a=$_POST['search'];
						$stt=0;
						foreach ($data as $value){
						if($a=$value['sohokhau_id']){
							$stt++ ;
				?> 
				<tr>
					 		<td><?php echo $stt; ?></td>
					 		<td><?php echo $value['sohokhau_id']; ?></td>
					 		<td><?php echo $value['quanhevoichuho']; ?></td>
					 		<td><?php echo $value['hoten'];?></td>
					 		<td><?php echo $value['gioitinh']; ?></td>
					 		<td><?php echo $value['ngaysinh']; ?></td>
					 		<td><?php echo $value['quenquan']; ?></td>
					 		<td><?php echo $value['dantoc']; ?></td>
					 		<td><?php echo $value['noitrukhiden']; ?></td>
				</tr>	
			 <?php
					}
				}
				
						}
				?> 
				</table>
			</div>
		</div>
	</div>
</div>
</div>

