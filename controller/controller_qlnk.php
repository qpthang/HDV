<?php
		class controller_qlnk extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
						include "view/view_qlnk.php";
					break;
					case 'do_add':
					$sohokhau_id=isset($_POST['sohokhau_id'])?$_POST['sohokhau_id']:"";
					$quanhevoichuho=isset($_POST['quanhevoichuho'])?$_POST['quanhevoichuho']:"";
					$hoten=isset($_POST['hoten'])?$_POST['hoten']:"";
					$hotenkhac=isset($_POST['hotenkhac'])?$_POST['hotenkhac']:"";
					$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
					$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
					$noisinh=isset($_POST['noisinh'])?$_POST['noisinh']:"";
					$quenquan=isset($_POST['quenquan'])?$_POST['quenquan']:"";
					$dantoc=isset($_POST['dantoc'])?$_POST['dantoc']:"";
					$tongiao=isset($_POST['tongiao'])?$_POST['tongiao']:"";
					$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
					$hochieu=isset($_POST['hochieu'])?$_POST['hochieu']:"";
					$nghenghiep=isset($_POST['nghenghiep'])?$_POST['nghenghiep']:"";
					$chuyendenngay=isset($_POST['chuyendenngay'])?$_POST['chuyendenngay']:"";
					$noitrukhiden=isset($_POST['noitrukhiden'])?$_POST['noitrukhiden']:"";
					$this->model->execute("insert into kb_nhankhau values(null,'$sohokhau_id','$quanhevoichuho','$hoten','$hotenkhac','$ngaysinh','$gioitinh','$noisinh','$quenquan','$dantoc','$tongiao','$CMND','$hochieu','$nghenghiep','$chuyendenngay','$noitrukhiden')");
					header("location:index.php?controller=qlnk");
					break;
				default:
					$data=$this->model->fetch("select * from kb_nhankhau");
					include "view/view_qlnk.php";
					break;
				}
			}
		}
	new controller_qlnk();
 ?>