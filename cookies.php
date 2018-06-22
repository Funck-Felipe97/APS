<?php 
	

	/**
	* 
	*/
	class Cookies 
	{
		
		function __construct()
		{
			# code...
		}

		public function setCookies($cli, $pass){
			
			setcookie("usuario", "$cli", time() + 3600,"/APS/App/");
			setcookie("pass", "$pass", time() + 3600,"/APS/App/");
			header("Location:../App/index.php");
			
		}
	}
		

?>