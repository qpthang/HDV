<?php
	 class controller_user extends controller{
	 	
	 	public function __construct(){
	 		parent:: __construct();
			$action=isset($_GET['action'])?$_GET['action']:"";
			switch ($action) {
				case 'add':
					include "view/view_add_user.php" ;
					break;
				case 'do_add':
					$username=isset($_POST['username'])?$_POST['username']:"";
					$password=md5(isset($_POST['password'])?$_POST['password']:"");
					$hoten=isset($_POST['hoten'])?$_POST['hoten']:"";
					$sdt=isset($_POST['sdt'])?$_POST['sdt']:"";
					$this->model->execute("insert into admin values('$username','$password','$hoten','$sdt')");
					echo "insert into admin values('$username','$password','$hoten','$sdt','')";
					header("location:index.php?controller=user");
					break;
				case 'delete':
					$username=isset($_GET['username'])?$_GET['username']:"";
					$this->model->execute("delete from admin where username='$username'");
					header('location:index.php?controller=user');
					break;
				 case 'edit':
					$username=isset($_GET['username'])?$_GET['username']:"";
				 	$data= $this->model->fetch_one("select * from admin where username='$username'");
					include "view/view_edit_user.php";
					break;
				case 'do_edit':
					$username=isset($_POST['username'])?$_POST['username']:"";
					$password=md5(isset($_POST['password'])?$_POST['password']:"");
					$hoten=isset($_POST['hoten'])?$_POST['hoten']:"";
					$sdt=isset($_POST['sdt'])?$_POST['sdt']:"";
					$this->model->execute("update admin set password='$password',hoten='$hoten',sdt='$sdt' where username='$username'");
					header("location:index.php?controller=user");
					break;
				default:
					$data=$this->model->fetch("select * from admin");
					include "view/view_user.php";
					break;
			}
	 		
	 	}
	 } 
	 new controller_user();
 ?>