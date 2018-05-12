<?php 
	
	function getConnection(){
		return new PDO("mysql:dbname=aps_db;host=localhost", "root", "felipe");
	}

 ?>