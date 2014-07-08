

		<?php
		if(!isset($_POST['username'])){
			//header('location: login_forms.php');
		}
		include 'functions.php';
		
		$connection = openDB();
	
			
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			/*$username = sanitize($username);
			$password = sanitize($password);
			
			$password = encryptPassword($password);*/
			
			//echo $password;
			//exit();
	
		//checking the database for the user
		$query = "SELECT * FROM bootcamp2014_01_users WHERE username ='$username' And password = '$password'";
		
		$results = mysql_query($query)
		or die("query failed".mysql_error());
		
		
		if($row = mysql_fetch_array($results)){
			//match found:: continue to index.php
			//if(sizeOf($row)){
			session_start();
			$_SESSION['isLoggedIn']	=	"true";
			$_SESSION['username']	=	$row['username'];
			
			header("location:http://localhost/notesplus/showNotes.php");
			
		}
		else{
		//no match found::go back to login form
			header("location:http://localhost/ntesplus/login.php");
		}
		
		closeDB($connection);
			
	
		?>

