<?php 
//include("connection.php");
include("functions.php");

 $connection = openDB();
session_start();

	
	$firstname		=		$_POST['firstname'];		
	$lastname		=		$_POST['lastname'];
	$username		=		$_POST['username'];
	$email		=		$_POST['email'];
	$password	=		$_POST['password'];
	$activationDate		=		date("Y-m-d");
    
    $query = "INSERT INTO bootcamp2014_01_users (firstname,lastname, username, email, password, activationDate) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$activationDate')";	
			
			$results = mysql_query($query)
			or die("query failed :".mysql_error());

 mysql_close($connection);


?>
<a href="showUser.php">Users</a>
