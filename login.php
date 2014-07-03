        <?php include ('header.php');?>
        <div id="row1">
		<table>
			<tr>
				<td width="60%" valign="top">
					<h2>Already a member? <br/> <br/>  Sign in below!</h2>
					<form action="login_handler.php" method="POST">
                        <labe for="user_login">Username</labe>
						<input type="text" name="user_login" size="25" placeholder="Username"/><br/><br/>
                        <label for="password_login">Password</label>
						<input type="text" name="password_login" size="25" placeholder="Password"/><br/><br/>
						<input type="submit" name="login" value="Login!"><br/><br/>
					</form>
				</td>	
			</tr>
		</table></div>
<?php //include ("./inc/footer.inc.php"); ?>		