<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "qlnhankhau";
	$link = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($link,"UTF8");
?>