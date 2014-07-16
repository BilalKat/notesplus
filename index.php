<?php
session_start();
if(isset($_SESSION['isLoggedIn'])){
   // header'Location:showNotes.php';
}
?>
<?php include('header.php');?>

	<header class="mainheader">
		<nav><ul>
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="reg.php" >Register</a></li>
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
                        <img class="bootcamp2014" src="img/bootcamp.jpg">
		

         
                    
					
				 		
				</content>
			</article>
			
			<!--article class="bottomcontent">
				<header>
				
				</header>
				
				<footer>
					<p class ="post-info"></p>
				</footer>
				
				
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