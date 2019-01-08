<?php
		class controller_kbtv extends controller{

			
			public function __construct()
			{
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) 
				{
					case 'add':
							include "view/view_khaibaotamvang.php";
						break;
					case 'do_add':
						$hovanten=isset($_POST['hovanten'])?$_POST['hovanten']:"";
						$conganphuong=isset($_POST['conganphuong'])?$_POST['conganphuong']:"";
						$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
						$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
						$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
						$dienthoai=isset($_POST['dienthoai'])?$_POST['dienthoai']:"";
						$noicutru=isset($_POST['noicutru'])?$_POST['noicutru']:"";
						$tungay=isset($_POST['tungay'])?$_POST['tungay']:"";
						$denngay=isset($_POST['denngay'])?$_POST['denngay']:"";
						$lydo=isset($_POST['lydo'])?$_POST['lydo']:"";
						$this->model->execute("insert into kb_tamvang values(null,'$hovanten','$conganphuong','$gioitinh','$ngaysinh','$CMND','$dienthoai','$noicutru','$tungay','$denngay',$lydo)");
						header("location:index.php?controller=kbtv");
						break;
					default:
						$data=$this->model->fetch("select * from kb_tamvang");
						include "view/view_khaibaotamvang.php";
						break;
				}

			}
		}
	new controller_kbtv();
?>