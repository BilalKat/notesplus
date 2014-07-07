<?php 
//include ("inc/header.inc.php");
//include("connection.php");
include("functions.php");
 $connection = openDB();
session_start();

if(!isset($_SESSION["user_login"])){
	$username = "";	
}
else{
	$username = $_SESSION["user_login"];
}
?>
<?php
		// User login code
		if(isset($_POST['user_login']) && isset($_POST['password_login'])){
			$user_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_login"]);	//flter everything but numbers and letters
			$password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password_login"]);  //flter everything but numbers and letters	
             $password_login = encryptPassword($password_login);
            //$password_login = ($password_login);
			$sql = mysql_query("SELECT id FROM bootcamp2014_01_users WHERE username = '$user_login' AND password = '$password_login' LIMIT 1" );
			// check for their existance
			$userCount = mysql_num_rows($sql); 	  //conut the number of rows returned
				if($userCount == 1){
					while($row = mysql_fetch_array($sql)){
						$id = $row["id"];
					}
					$SESSION['user_login'] = $user_login;
					header("location: note.php");
                    
					exit() ;
				}
				else{
					echo "The information is incorrect!!  Please try again";
					exit();
				}
		}		
		
?>