<?php
		class sohokhau extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
							include "view/view_add_sohokhau.php";
						break;
					case 'do_add':
							$hokhauso=isset($_POST['hokhauso'])?$_POST['hokhauso']:"";
							$hotenchuho=isset($_POST['hotenchuho'])?$_POST['hotenchuho']:"";
							$noithuongtru=isset($_POST['noithuongtru'])?$_POST['noithuongtru']:"";
							$this->model->execute("insert into sohokhau values($hokhauso,'$hotenchuho','$noithuongtru')");
							header("location:index.php?controller=sohokhau");
						break;
					case 'delete':
							$id=isset($_GET['id'])?$_GET['id']:0;
							$this ->model->execute("delete from sohokhau where id=$id");
							header('location:index.php?controller=sohokhau'); 
						break;
					case 'edit':
							$id=isset($_GET['id'])?$_GET['id']:0;
							$data= $this->model->fetch_one("select * from sohokhau where id='$id'");
							include "view/view_edit_sohokhau.php";	
						break;
					case 'do_edit':
							$id=isset($_GET['id'])?$_GET['id']:0;
							$hokhauso=isset($_POST['hokhauso'])?$_POST['hokhauso']:"";
							$hotenchuho=isset($_POST['hotenchuho'])?$_POST['hotenchuho']:"";
							$noithuongtru=isset($_POST['noithuongtru'])?$_POST['noithuongtru']:"";
							$this->model->execute("update sohokhau set sohokhau=$hokhauso,chuho='$hotenchuho',noithuongtru='$noithuongtru' where id='$id'");
							header("location:index.php?controller=sohokhau");
						break;
					default:
						$data=$this->model->fetch("select * from sohokhau");
						include "view/view_sohokhau.php";
					break;
				}

			}
		}
	new sohokhau();
?>