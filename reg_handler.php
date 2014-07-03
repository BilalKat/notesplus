<?php 
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
	$reg = @$_POST['reg'];
	//declaring variable to prevent errors
	$fn		=	"";		
	$ln		=	"";
	$un		=	"";
	$em		=	"";
	$em2	=	"";
	$pswd	=	"";
	$pswd2	=	"";
	$d		=	"";
	$u_check =	""; //check if username exist
	
	// registration form
	$fn		=		strip_tags(@$_POST['first_name']);		
	$ln		=		strip_tags(@$_POST['last_name']);
	$un		=		strip_tags(@$_POST['username']);
	$em		=		strip_tags(@$_POST['email']);
	$em2	=		strip_tags(@$_POST['email2']);
	$pswd	=		strip_tags(@$_POST['password']);
	$pswd2	=		strip_tags(@$_POST['password2']);
	$d		=		date("Y-m-d");
    if(isset($_POST['gender'])){
						$gender = $_POST['gender'];
						
			        }
	
	if ($reg){
 		if($em == $em2){
			//check if user alredy exist
			$u_check = mysql_query("SELECT username FROM users WHERE username = '$un' ");
			//count the number of rows where username = $un
			$check = mysql_num_rows($u_check);
			//check whether email already exist in the database
			$e_check = mysql_query("SELECT email FROM users WHERE email='$em'");
			//count the number of rows returned
			$email_check = mysql_num_rows($e_check);
				if ($check == 0){ 
					if($email_check == 0){
					//chech if all the fields have been filled in
					if($fn&&$ln&&$un&&$em&&$em2&&$pswd&&$pswd2){
						//check that passwords match
						if($pswd == $pswd2){
							//check the maximum length of username/firstname/lastname does not exceed to 25 characters
							if(strlen($un)> 25||strlen($fn)>25||strlen($ln)>25){
								echo ("The maximum limit for username/firstname/lastname is 25 characters!!");
								
							}
								//chech the maximum length of password does not exceed 25 characters and is not less than 5 characters
								else{
									if (strlen($pswd)> 30 ||strlen($pswd)< 5){
										echo ("Your password must be betwwen 5 and 30 characters long");
									}
									
									//encrypt password and password2 using md5 before sending to database
								else{
									 $pswd = encryptPassword($password);
									$pswd2 = encryptPassword($password2);
									$query 	= mysql_query("INSERT INTO users VALUES ('', '$fn', '$ln', '$un', '$em', '$pswd', '$d', '0')");
									die("<h2>Welcome to the Vankra's world</h2>Login to your account to get started...");
									}
								}
						}
						else{
							echo ("Your password dont match!");
						}
					}
					else{
						echo ("please fill in all the fields");
					}
				
				}
				else{
					echo ("username already taken..");
				}
		}
		else{
			echo "sorry, email already taken!";
		}
		}
	
			else{
				echo ("Your E-mails don't match!");
			} 
	}
		
?>
