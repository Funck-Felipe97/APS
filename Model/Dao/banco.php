<?php 
	
	function getConnection(){
		return new PDO("mysql:dbname=projeto;host=localhost", "root", "");
	}

 ?>