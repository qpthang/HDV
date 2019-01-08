<?php 
	class controller_login extends controller{
		public function __construct(){
			//goi ham __construct cua class controller
			parent::__construct();
			//----------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$username = $_POST["username"];
				$password = $_POST["password"];
				$password = md5($password);
				$arr = $this->model->fetch_one("select username,password from admin where username='$username'");
				if(isset($arr["username"])){
					//kiem tra password
					if($arr["password"] == $password){
						//dang nhap thanh cong
						$_SESSION["username"] = $username;
					}
				}else{
					echo "not ok";
				}
				header("location:index.php");
			}
			//----------
			//load view
			include "view/view_login.php";
		}
	}
	new controller_login();
 ?>