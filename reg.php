<?php include ('header.php');?>
<form action="reg_handler.php" method="post">
            <div id="row1">
                <h1>Registration Form</h1>
        <table>    
            <tr>
                        <td><label for="firstname">First Name</label></td>
                        <td><input type="text" name="firstname" id="firstname" placeholder="First Name" required></td>
             <tr>
                        <td><label for="lastname">last Name</label></td>
                        <td><input type="text" name="lastname" id="lastname" placeholder="last Name" required></td>    
            </tr>
                        
            <tr>
                       <td> <label for="username">Username</label></td>
                       <td> <input type="text" name="username" id="username" placeholder="Username" required></td>
            </tr>
            <tr>
                            <td><label for="email">email</label></td>
                            <td><input type="text" name="email" id="email" placeholder="email" required></td>
            </tr>
            
          
            <tr>
                            <td><label for="pass">Password</label></td>
                            <td><input type="text" name="password" id="password" placeholder="Password" required></td>
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