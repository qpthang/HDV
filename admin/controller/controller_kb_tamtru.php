<?php
		class kb_tamtru extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
							include "view/view_add_tamtru.php";
						break;
					case 'do_add':
						$conganphuong=isset($_POST['conganphuong'])?$_POST['conganphuong']:"";
						$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
						$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
						$quequan=isset($_POST['quequan'])?$_POST['quequan']:"";
						$tamtrutai=isset($_POST['tamtrutai'])?$_POST['tamtrutai']:"";
						$tungay=isset($_POST['tungay'])?$_POST['tungay']:"";
						$denngay=isset($_POST['denngay'])?$_POST['denngay']:"";
						$this->model->execute("insert into kb_tamtru values(null,'$conganphuong','$hovaten','$ngaysinh','$quequan','$tamtrutai','$tungay','$denngay')");
						header("location:index.php?controller=kb_tamtru");
						break;
					case 'delete':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$this ->model->execute("delete from kb_tamtru where id=$id");
						header('location:index.php?controller=kb_tamtru');
					break;
					case 'edit':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$data= $this->model->fetch_one("select * from kb_tamtru where id='$id'");
						include "view/view_edit_tamtru.php";	
					break;
					case 'do_edit':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$conganphuong=isset($_POST['conganphuong'])?$_POST['conganphuong']:"";
						$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
						$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
						$quequan=isset($_POST['quequan'])?$_POST['quequan']:"";
						$tamtrutai=isset($_POST['tamtrutai'])?$_POST['tamtrutai']:"";
						$tungay=isset($_POST['tungay'])?$_POST['tungay']:"";
						$denngay=isset($_POST['denngay'])?$_POST['denngay']:"";
						$this->model->execute("update kb_tamtru set conganphuong='$conganphuong',hovaten='$hovaten',ngaysinh='$ngaysinh',quequan='$quequan',$tamtrutai='$tamtrutai',tungay='$tungay',denngay='$denngay'  where id='$id'");
						header("location:index.php?controller=kb_tamtru");
						break;
					default:
						$data=$this->model->fetch("select * from kb_tamtru");
						include "view/view_tamtru.php";
					break;
				}

			}
		}
	new kb_tamtru();
?>