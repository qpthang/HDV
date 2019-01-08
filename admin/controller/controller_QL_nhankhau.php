<?php
		class QL_nhankhau extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
						$id=isset($_GET['id'])?$_GET['id']:0;
						include "view/view_add_qlnk.php";
					break;
					case 'do_add':
					$hokhauso=isset($_POST['hokhauso'])?$_POST['hokhauso']:"";
					$quanhevoichuho=isset($_POST['quanhevoichuho'])?$_POST['quanhevoichuho']:"";
					$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
					$hotenkhac=isset($_POST['hotenkhac'])?$_POST['hotenkhac']:"";
					$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
					$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
					$quequan=isset($_POST['quequan'])?$_POST['quequan']:"";
					$dantoc=isset($_POST['dantoc'])?$_POST['dantoc']:"";
					$tongiao=isset($_POST['tongiao'])?$_POST['tongiao']:"";
					$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
					$hochieu=isset($_POST['hochieu'])?$_POST['hochieu']:"";
					$nghenghiep=isset($_POST['nghenghiep'])?$_POST['nghenghiep']:"";
					$chuyendenngay=isset($_POST['chuyendenngay'])?$_POST['chuyendenngay']:"";
					$noiokhiden=isset($_POST['noiokhiden'])?$_POST['noiokhiden']:"";
					$this->model->execute("insert into kb_nhankhau values(null,$hokhauso,'$quanhevoichuho','$hovaten','$hotenkhac','$ngaysinh','$gioitinh','$quequan','$dantoc','$tongiao','$CMND','$hochieu','$nghenghiep','$chuyendenngay','$noiokhiden')");
					header("location:index.php?controller=sohokhau");
					break;
				case 'view':
					$id=isset($_GET['id'])?$_GET['id']:0;
					$data=$this->model->fetch("select * from sohokhau INNER JOIN kb_nhankhau on sohokhau.sohokhau=kb_nhankhau.sohokhau_id 
						where kb_nhankhau.sohokhau_id=$id");
					include "view/view_qlnk.php";
					break;
				case 'delete':
					$id=isset($_GET['id'])?$_GET['id']:0;
					$this ->model->execute("delete from kb_nhankhau where id=$id");
					header('location:index.php?controller=QL_nhankhau');
					break;
				case 'edit':
					$id=isset($_GET['id'])?$_GET['id']:0;
					$data= $this->model->fetch_one("select * from kb_nhankhau where id='$id'");
					include "view/view_edit_nhankhau.php";	
					break;
				case 'do_edit':
					$id=isset($_GET['id'])?$_GET['id']:0;
					$hokhauso=isset($_POST['hokhauso'])?$_POST['hokhauso']:"";
					$quanhevoichuho=isset($_POST['quanhevoichuho'])?$_POST['quanhevoichuho']:"";
					$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
					$hotenkhac=isset($_POST['hotenkhac'])?$_POST['hotenkhac']:"";
					$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
					$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
					$quequan=isset($_POST['quequan'])?$_POST['quequan']:"";
					$dantoc=isset($_POST['dantoc'])?$_POST['dantoc']:"";
					$tongiao=isset($_POST['tongiao'])?$_POST['tongiao']:"";
					$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
					$hochieu=isset($_POST['hochieu'])?$_POST['hochieu']:"";
					$nghenghiep=isset($_POST['nghenghiep'])?$_POST['nghenghiep']:"";
					$chuyendenngay=isset($_POST['chuyendenngay'])?$_POST['chuyendenngay']:"";
					$noiokhiden=isset($_POST['noiokhiden'])?$_POST['noiokhiden']:"";
					$this->model->execute("update kb_nhankhau set sohokhau_id=$hokhauso,quanhe='$quanhevoichuho',hoten='$hovaten',hotenkhac='$hotenkhac',ngaysinh='$ngaysinh',gioitinh='$gioitinh',quequan='$quequan',dantoc='$dantoc',tongiao='$tongiao',CMND='$CMND',hochieu='$hochieu',nghenghiep='$nghenghiep',chuyendenngay='$chuyendenngay',noitrukhiden='$noiokhiden'");
					header('location:index.php?controller=QL_nhankhau');
					break;
				default:
					$data=$this->model->fetch("select * from sohokhau");
					include "view/view_sohokhau.php";
					break;
				}
			}
		}
	new QL_nhankhau();
 ?>