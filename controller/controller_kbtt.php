<?php
		class controller_kbtt extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
							include "view/view_kbtt.php";
						break;
					case 'do_add':
						$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
						$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
						$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
						$quequan=isset($_POST['quequan'])?$_POST['quequan']:"";
						$quoctich=isset($_POST['quoctich'])?$_POST['quoctich']:"";
						$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
						$chohientai=isset($_POST['chohientai'])?$_POST['chohientai']:"";
						$trinhdohocvan=isset($_POST['trinhdohocvan'])?$_POST['trinhdohocvan']:"";
						$nghenghiep=isset($_POST['nghenghiep'])?$_POST['nghenghiep']:"";
						$this->model->execute("insert into kb_tamtru values(null,'$hovaten','$ngaysinh','$gioitinh','$quequan','$quoctich','$CMND','$tamtrutai','$chohientai','$trinhdohocvan','$nghenghiep')");
						header("location:index.php?controller=kbtt");
						break;
					default:
						$data=$this->model->fetch("select * from kb_tamtru");
						include "view/view_kbtt.php";
					break;
				}

			}
		}
	new controller_kbtt();
?>