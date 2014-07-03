<?php
	
	function openDB(){
	include 'config.php';
	//connecting to the server
		$connection = mysql_connect("$host","$username", "")
		or die("could not connect to the server".mysql_error());
		
		//conecting to the database
		$database = mysql_select_db("notesplus",$connection)
		or die("could not find the database".mysql_error());
		
		return $connection;
		}
		
		function closeDB($connection){
		mysql_close($connection);
		}
		
		function encryptPassword($password){
			$password .= "#!&lmo";
			$password = sha1($password);
			return $password;
		}
		
		function sanatize($input){
			$input = str_replace("--", "", $input);
			$input = str_replace("'", "", $input);
			$input = str_replace('"', '', $input);
			$input = str_replace( '!',  '', $input);
			
			return $input;
		}
	
		
?>