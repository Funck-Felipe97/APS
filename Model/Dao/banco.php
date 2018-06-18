<?php 
	
	function getConnection(){
		return new PDO("mysql:dbname=projeto;host=localhost", "felipe", "1234567");
	}

 ?>