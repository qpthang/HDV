<?php 
	class controller_logout{
		public function __construct(){
			//huy session $_SESSION["username"]
			unset($_SESSION["username"]);
			header("location:index.php");
		}
	}
	new controller_logout();
 ?>