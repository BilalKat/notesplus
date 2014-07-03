<?php include ('header.php');?>
<form action="reg_handler.php" method="post">
            <div id="row1">
                <h1>Registration Form</h1>
        <table>    
            <tr>
                        <td><label for="first_name">First Name</label></td>
                        <td><input type="text" name="first_name" id="first_name" placeholder="First Name" required></td>
             <tr>
                        <td><label for="last_name">last Name</label></td>
                        <td><input type="text" name="last_name" id="last_name" placeholder="last Name" required></td>    
            </tr>
                        
            <tr>
                       <td> <label for="username">Username</label></td>
                       <td> <input type="text" name="surname" id="username" placeholder="Username" required></td>
            </tr>
            <tr>
                            <td><label for="email">email</label></td>
                            <td><input type="text" name="email" id="email" placeholder="email" required></td>
            </tr>
             <tr>
                            <td><label for="email2">email2</label></td>
                            <td><input type="text" name="email2" id="email2" placeholder="repeat- email" required></td>
            </tr>
          
            <tr>
                            <td><label for="pass">Password</label></td>
                            <td><input type="text" name="pass" id="pass" placeholder="Password" required></td>
            </tr>
              <tr>
                            <td><label for="pass2">Password2</label></td>
                            <td><input type="text" name="pass2" id="pass2" placeholder="reapeat- password" required></td>
            </tr>
            <tr>
				<td><h3><b><u>Gender:</u></b></h3></td>
			</tr>
			<tr>
				<td><label for="female">Female</label></td>
				<td><input type="radio" name="gender" value="female"></td>
			</tr>
			<tr>
				<td><label for="male">Male</label></td>
				<td><input type="radio" name="gender" value="male"></td>
			</tr>
             <tr>
                       <td> <label for="activationDate">Activation Date</label></td>
                       <td> <input type="Date" name="activationDate" id="activationDate"</td>
            </tr>
            <tr><td> <input type="submit" value="send"></td></tr>
            </table>
                </div>
        </form>    
    </body>
</html>