<?php 
	
	function getConnection(){
		return new PDO("mysql:dbname=banco_aps;host=localhost", "root", "");
	}

 ?>