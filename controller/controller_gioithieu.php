<?php 
	class controller_gioithieu extends controller
	{
		
		function __construct()
		{
			parent::__construct();
			//load view
			include 'view/view_gioithieu.php';	
		}
	}
	new controller_gioithieu();
?>