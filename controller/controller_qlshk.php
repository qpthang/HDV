
<?php
		class controller_qlshk extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
						include "view/view_qlshk.php";
					break;
					case 'do_add':
					$hokhauso=isset($_POST['hokhauso'])?$_POST['hokhauso']:"";
					$quanhechuho=isset($_POST['quanhechuho'])?$_POST['quanhechuho']:"";
					$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
					$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
					$nguyenquan=isset($_POST['nguyenquan'])?$_POST['nguyenquan']:"";
					$dantoc=isset($_POST['dantoc'])?$_POST['dantoc']:"";
					$quoctich=isset($_POST['quoctich'])?$_POST['quoctich']:"";
					$noithuongtru=isset($_POST['noithuongtru'])?$_POST['noithuongtru']:"";
					$chohiennay=isset($_POST['chohiennay'])?$_POST['chohiennay']:"";
					$this->model->execute("insert into kb_nhankhau values(null,'$hovaten','$hotenkhac','$ngaysinh','$gioitinh','$noisinh','$quequan','$dantoc','$tongiao','$quoctich','$CMND','$hochieu','$noithuongtru','$chohiennay','$trinhdohocvan','$trinhdochuyenmon','$trinhdongoaingu','$nghenghiep')");
					header("location:index.php?controller=qlshk");
					break;
				default:
					$a=$_POST['search'];
					$data=$this->model->fetch("select * from kb_nhankhau where sohokhau_id=$a /*or hovaten=$a or CMND=$a*/");
					include "view/view_qlshk.php";
					break;
				}
			}
		}
	new controller_qlshk();
 ?>