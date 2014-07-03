
<?php include ("header.php"); ?>
<?php include ("functions.php"); ?>
    
<?php 
    $connection = openDB();
    

?>
<?php
	if(isset($_GET['u'])){
		$username = mysql_real_escape_string($_GET['u']);
			if(cytype_alnum($username)){
				//check user exist
				$check = mysql_query("SELECT username, firstname FROM bootcamp2014_01_users WHERE username= '$username'");
					if(mysql_num_rows($check)=== 1){
						$get = mysql_fetch_assoc($check);
						$username = $get['username'];
						$first_name = $get['first_name'];
					}
					else{
						echo "<meta http-equive=\"refresh\" content=\"0, url=http://localhost/My NewSite/login.php\">" ;
						exit(); 
					}
			}
	}
?>
</body>
</html>	