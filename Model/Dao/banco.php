<?php 
	
	function getConnection(){
		return new PDO("mysql:dbname=aps_db;host=localhost", "felipe", "1234567");
	}

 ?>