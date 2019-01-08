<?php 
	class controller_home extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			//load view
			include 'view/view_home.php';	
		}
	}
	new controller_home();
?>