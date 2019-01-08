<!DOCTYPE html>
<html lang="en">
<head>
	<meta name = "viewport" content = "width = device-width">
	<title>Quản lý nhân khẩu</title>
	<link href="public/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/css/paginate.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"></link>
</head>
<body>
	<div class="wrap">
		<!--header-->
		<div class="header">
			<div class="right">
				<ul>
					<li><a href="#">Sign up</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">RSS Feed</a></li>
					<li><a href="#">Archived News</a></li>
				</ul>
			</div>
		</div>
		<!--end header-->
		<!-- menu -->
		<div class="menu">
			<ul>
				<li><a href="index.php?controller=home">Trang chủ</a></li>
				<li><a href="index.php?controller=gioithieu">Giới thiệu</a></li>
				<li><a href="index.php?controller=qlnk">Danh sách nhân khẩu</a></li>
				<li><a href="index.php?controller=kbtv">Danh sách tạm vắng</a></li>
				<li><a href="index.php?controller=kbtt">Danh sách tạm trú</a></li>
				<li><a href="index.php?controller=qlshk">Quản lý sổ hộ khẩu</a></li>
			</ul>
		</div>
		<!-- end menu -->
		<div style="clear: both;">
			
		</div>
		<div class="main">
		<?php 
            if(file_exists($controller))
            	include $controller;
        ?>
		<!--footer-->
		<div class="footer">
			<div style="font:13px normal Arial, sans-serif; color:#222;">
				CỔNG THÔNG TIN ĐIỆN TỬ BỘ TƯ PHÁP<br>
				Địa chỉ: 60 Trần Phú, Ba Đình, Hà Nội. <br>
				Điện thoại: 04.62739718 - Fax: 04.62739359. <br>
				Email: banbientap@moj.gov.vn; cntt@moj.gov.vn.<br>
			</div>
		</div>
		<!--end footer-->
	</div>
</body>
</html>