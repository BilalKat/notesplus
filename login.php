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
			<li><a href="reg.php">Register</a></li>
			<li><a href="login.php" class="active">login</a></li>

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
                        	<form action="login_handler.php" method="post">
			<table>
				<tr>
					<td><label for="username">username:</label></td>
					<td><input type="text" name="username" id="username" placeholder="Full name"/></td><br>
					</tr>
					<tr>
					<td><label for="password">password:</label></td>
					<td><input type="password" name="password" id="password" placeholder="Password"/></td><br>
					</tr>
					<tr>
			          <td><input type="submit" value="login"></td>
					</tr> 
			</table>
						
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
