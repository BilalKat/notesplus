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
    if(isset($_POST['gender'])){
						$gender = $_POST['gender'];
						
			        }
    
    $query = "INSERT INTO bootcamp2014_01_users (firstname,lastname, username, email, password, gender, activationDate) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$gender', '$activationDate')";	
			
			$results = mysql_query($query)
			or die("query failed :".mysql_error());

 mysql_close($connection);


?>
Thanks for registering now 
<a href="login.php">login</a>
