<?php
		class  kb_tamvang extends controller{

			
			public function __construct(){
				parent:: __construct();
				$action=isset($_GET['action'])?$_GET['action']:"";
				switch ($action) {
					case 'add':
							include "view/view_add_tamvang.php" ;
						break;
					case 'do_add':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
						$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
						$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
						$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
						$sdt=isset($_POST['sdt'])?$_POST['sdt']:"";
						$noicutru=isset($_POST['noicutru'])?$_POST['noicutru']:"";
						$tungay=isset($_POST['tungay'])?$_POST['tungay']:"";
						$denngay=isset($_POST['denngay'])?$_POST['denngay']:"";
						$lydo=isset($_POST['lydo'])?$_POST['lydo']:"";
						$this->model->execute("insert into kb_tamvang values(null,'$hovaten','$gioitinh','$ngaysinh','$CMND','$sdt','$noicutru','$tungay','$denngay','$lydo')");
						header("location:index.php?controller=kb_tamvang");
						break;
					case 'delete':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$this ->model->execute("delete from kb_tamvang where id=$id");
						header('location:index.php?controller=kb_tamvang');
						break;
					case 'edit':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$data= $this->model->fetch_one("select * from kb_tamvang where id='$id'");
						include "view/view_edit_tamvang.php";
						break;
					case 'do_edit':
						$id=isset($_GET['id'])?$_GET['id']:0;
						$hovaten=isset($_POST['hovaten'])?$_POST['hovaten']:"";
						$gioitinh=isset($_POST['gioitinh'])?$_POST['gioitinh']:"";
						$ngaysinh=isset($_POST['ngaysinh'])?$_POST['ngaysinh']:"";
						$CMND=isset($_POST['CMND'])?$_POST['CMND']:"";
						$sdt=isset($_POST['sdt'])?$_POST['sdt']:"";
						$noicutru=isset($_POST['noicutru'])?$_POST['noicutru']:"";
						$tungay=isset($_POST['tungay'])?$_POST['tungay']:"";
						$denngay=isset($_POST['denngay'])?$_POST['denngay']:"";
						$lydo=isset($_POST['lydo'])?$_POST['lydo']:"";
						$this->model->execute("update  kb_tamvang set  hovaten='$hovaten',gioitinh='$gioitinh',ngaysinh='$ngaysinh',CMND='$CMND',dienthoai='$sdt',noicutru='$noicutru',tungay='$tungay',denngay='$denngay',lydo='$lydo'  where id='$id'");
						header("location:index.php?controller=kb_tamvang");
						break;
					
					default:
						$data=$this->model->fetch("select * from kb_tamvang");
						include "view/view_tamvang.php";
						break;
				}
			}
		}
	new kb_tamvang();
?>