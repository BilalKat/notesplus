
    
    <!DOCTYPE html>
<html lang="en">
<head>
	<title>Notes Plus</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="body">

        <header class="mainheader">
            <nav><ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="reg.php">Register</a></li>

		</ul></nav>
	   </header>
	
	<div class="maincontent">
		<div class ="content">
			<article class="topcontent">
				
	
				<content>
					<form action="login_handler.php" method="post">
			<table>
				<tr>
					<td><label for="username"><b>Username:</b></label></td>
					<td><input type="text" name="username" id="username" placeholder="Full name" size="35"/></td><br>
					</tr>
					<tr>
					<td><label for="password"><b>Password:</b></label></td>
					<td><input type="password" name="password" id="password" placeholder="Password" size="35"/></td><br>
					</tr>
					<tr>
			          <td><input type="submit" value="  Login  "></td>
					</tr> 
			</table>			  
		</form>
					
						
				</content>
			</article>
			
			
		</div>
	</div>
	
	
	<aside class="middle-sidebar">
        
            <p>Test</p> 
        
	</aside>
	

	<footer class="mainfooter">
   <p class="p">copyright&copy ITvarsity bootcamp 2014 (Sahal Motala , Haroon Vankra)</p>
	</footer>
</body>

</html>