<?php include ('header.php');?>

	<header class="mainheader">
		<nav><ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="reg.php" class="active">Register</a></li>
			<li><a href="login.php">login</a></li>

		</ul></nav>
	</header>
	
	<div class="maincontent">
		<div class ="content">
			<article class="topcontent">
				<header>
					<!--<h2><a href="#" title="First post">First post</a></h2>-->
				</header>
				
				<footer>
					<p class ="post-info">
				</footer>
				
				<content>
					<p class="p">
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
                       <td> <input type="Datetime-local" name="activationDate" id="activationDate"</td>
            </tr>
            <tr><td> <input type="submit" value="send"></td></tr>
            </table>
                </div>
        </form> 
						
				</content>
			</article>
			
			<!--article class="bottomcontent">
				<header>
				
				</header>
				
				<footer>
					<p class ="post-info"></p>
				</footer>
				
				<content><p class="p">
					Allow us to show you the way…

We understand that choosing a career can be a difficult and daunting task, and finding the right information to assist you in making an informed decision isn’t easy.

That is why IT varsity offers you absolutely free career guidance. On this page we’ve listed a few of the most commonly asked questions regarding careers, along with our answers in plain and simple language.

If you have a question that is not here, please feel free to contact us to chat – we will be happy to assist!

For a quick read on the subject of IT careers, check out our Infographic: Why IT at IT varsity?</p>
				</content>
			</article-->

		</div>
	</div>
	<aside class="top-sidebar">
		<article>
           <p><a href="#">Download notesplus</a></p>    

		</article>
	</aside>
	
	<aside class="middle-sidebar">
        
		<article>
		<img class="bootcamp" src="img/bt.jpg">
		</article>
        <img class="social" src="img/facebook.jpg">
        <img class="social" src="img/twitter.jpg">
        <img class="social" src="img/whatsapp.jpg">
        
        
	</aside>
	

	<footer class="mainfooter">
   <p class="p">copyright&copy ITvarsity bootcamp 2014 (Sahal Motala , Haroon Vankra)</p>
	</footer>
</body>

</html>
